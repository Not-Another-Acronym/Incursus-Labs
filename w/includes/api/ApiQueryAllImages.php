<?php

/**
 * API for MediaWiki 1.12+
 *
 * Created on Mar 16, 2008
 *
 * Copyright © 2008 Vasiliev Victor vasilvv@gmail.com,
 * based on ApiQueryAllPages.php
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 */

/**
 * Query module to enumerate all available pages.
 *
 * @ingroup API
 */
class ApiQueryAllImages extends ApiQueryGeneratorBase {

	protected $mRepo;

	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'ai' );
		$this->mRepo = RepoGroup::singleton()->getLocalRepo();
	}

	/**
	 * Override parent method to make sure to make sure the repo's DB is used
	 * which may not necesarilly be the same as the local DB.
	 *
	 * TODO: allow querying non-local repos.
	 * @return DatabaseBase
	 */
	protected function getDB() {
		return $this->mRepo->getSlaveDB();
	}

	public function execute() {
		$this->run();
	}

	public function getCacheMode( $params ) {
		return 'public';
	}

	/**
	 * @param $resultPageSet ApiPageSet
	 * @return void
	 */
	public function executeGenerator( $resultPageSet ) {
		if ( $resultPageSet->isResolvingRedirects() ) {
			$this->dieUsage( 'Use "gaifilterredir=nonredirects" option instead of "redirects" when using allimages as a generator', 'params' );
		}

		$this->run( $resultPageSet );
	}

	/**
	 * @param $resultPageSet ApiPageSet
	 * @return void
	 */
	private function run( $resultPageSet = null ) {
		$repo = $this->mRepo;
		if ( !$repo instanceof LocalRepo ) {
			$this->dieUsage( 'Local file repository does not support querying all images', 'unsupportedrepo' );
		}

		$prefix = $this->getModulePrefix();

		 = $this->getDB();

		$params = $this->extractRequestParams();

		// Table and return fields
		$this->addTables( 'image' );

		$prop = array_flip( $params['prop'] );
		$this->addFields( LocalFile::selectFields() );

		$dir = ( in_array( $params['dir'], array( 'descending', 'older' ) ) ? 'older' : 'newer' );

		if ( $params['sort'] == 'name' ) {
			// Check mutually exclusive params
			$disallowed = array( 'start', 'end', 'wiki_user' );
			foreach ( $disallowed as $pname ) {
				if ( isset( $params[$pname] ) ) {
					$this->dieUsage( "Parameter '{$prefix}{$pname}' can only be used with {$prefix}sort=timestamp", 'badparams' );
				}
			}
			if ( $params['filterbots'] != 'all' ) {
					$this->dieUsage( "Parameter '{$prefix}filterbots' can only be used with {$prefix}sort=timestamp", 'badparams' );
			}

			// Pagination
			if ( !is_null( $params['continue'] ) ) {
				$cont = explode( '|', $params['continue'] );
				if ( count( $cont ) != 1 ) {
					$this->dieUsage( 'Invalid continue param. You should pass the ' .
						'original value returned by the previous query', '_badcontinue' );
				}
				$op = ( $dir == 'older' ? '<' : '>' );
				$cont_from = ->addQuotes( $cont[0] );
				$this->addWhere( "img_name $op= $cont_from" );
			}

			// Image filters
			$from = ( is_null( $params['from'] ) ? null : $this->titlePartToKey( $params['from'] ) );
			$to = ( is_null( $params['to'] ) ? null : $this->titlePartToKey( $params['to'] ) );
			$this->addWhereRange( 'img_name', $dir, $from, $to );

			if ( isset( $params['prefix'] ) ) {
				$this->addWhere( 'img_name' . ->buildLike( $this->titlePartToKey( $params['prefix'] ), ->anyString() ) );
			}
		} else {
			// Check mutually exclusive params
			$disallowed = array( 'from', 'to', 'prefix' );
			foreach ( $disallowed as $pname ) {
				if ( isset( $params[$pname] ) ) {
					$this->dieUsage( "Parameter '{$prefix}{$pname}' can only be used with {$prefix}sort=name", 'badparams' );
				}
			}
			if (!is_null( $params['wiki_user'] ) && $params['filterbots'] != 'all') {
				// Since filterbots checks if each wiki_user has the bot right, it doesn't make sense to use it with wiki_user
				$this->dieUsage( "Parameters 'wiki_user' and 'filterbots' cannot be used together", 'badparams' );
			}

			// Pagination
			$this->addTimestampWhereRange( 'img_timestamp', $dir, $params['start'], $params['end'] );

			// Image filters
			if ( !is_null( $params['wiki_user'] ) ) {
				$this->addWhereFld( 'img_wiki_user_text', $params['wiki_user'] );
			}
			if ( $params['filterbots'] != 'all' ) {
				$this->addTables( 'wiki_user_groups' );
				$groupCond = ( $params['filterbots'] == 'nobots' ? 'NULL': 'NOT NULL' );
				$this->addWhere( "ug_group IS $groupCond" );
				$this->addJoinConds( array( 'wiki_user_groups' => array(
					'LEFT JOIN',
					array(
						'ug_group' => wiki_user::getGroupsWithPermission( 'bot' ),
						'ug_wiki_user = img_wiki_user'
					)
				) ) );
			}
		}

		// Filters not depending on sort
		if ( isset( $params['minsize'] ) ) {
			$this->addWhere( 'img_size>=' . intval( $params['minsize'] ) );
		}

		if ( isset( $params['maxsize'] ) ) {
			$this->addWhere( 'img_size<=' . intval( $params['maxsize'] ) );
		}

		$sha1 = false;
		if ( isset( $params['sha1'] ) ) {
			if ( !$this->validateSha1Hash( $params['sha1'] ) ) {
				$this->dieUsage( 'The SHA1 hash provided is not valid', 'invalidsha1hash' );
			}
			$sha1 = wfBaseConvert( $params['sha1'], 16, 36, 31 );
		} elseif ( isset( $params['sha1base36'] ) ) {
			$sha1 = $params['sha1base36'];
			if ( !$this->validateSha1Base36Hash( $sha1 ) ) {
				$this->dieUsage( 'The SHA1Base36 hash provided is not valid', 'invalidsha1base36hash' );
			}
		}
		if ( $sha1 ) {
			$this->addWhereFld( 'img_sha1', $sha1 );
		}

		if ( !is_null( $params['mime'] ) ) {
			global $wgMiserMode;
			if ( $wgMiserMode  ) {
				$this->dieUsage( 'MIME search disabled in Miser Mode', 'mimesearchdisabled' );
			}

			list( $major, $minor ) = File::splitMime( $params['mime'] );

			$this->addWhereFld( 'img_major_mime', $major );
			$this->addWhereFld( 'img_minor_mime', $minor );
		}

		$limit = $params['limit'];
		$this->addOption( 'LIMIT', $limit + 1 );
		$sort = ( $dir == 'older' ? ' DESC' : '' );
		if ( $params['sort'] == 'timestamp' ) {
			$this->addOption( 'ORDER BY', 'img_timestamp' . $sort );
			if ( $params['filterbots'] == 'all' ) {
				$this->addOption( 'USE INDEX', array( 'image' => 'img_timestamp' ) );
			} else {
				$this->addOption( 'USE INDEX', array( 'image' => 'img_wiki_usertext_timestamp' ) );
			}
		} else {
			$this->addOption( 'ORDER BY', 'img_name' . $sort );
		}

		$res = $this->select( __METHOD__ );

		$titles = array();
		$count = 0;
		$result = $this->getResult();
		foreach ( $res as $row ) {
			if ( ++ $count > $limit ) {
				// We've reached the one extra which shows that there are additional pages to be had. Stop here...
				if ( $params['sort'] == 'name' ) {
					$this->setContinueEnumParameter( 'continue', $row->img_name );
				} else {
					$this->setContinueEnumParameter( 'start', wfTimestamp( TS_ISO_8601, $row->img_timestamp ) );
				}
				break;
			}

			if ( is_null( $resultPageSet ) ) {
				$file = $repo->newFileFromRow( $row );
				$info = array_merge( array( 'name' => $row->img_name ),
					ApiQueryImageInfo::getInfo( $file, $prop, $result ) );
				self::addTitleInfo( $info, $file->getTitle() );

				$fit = $result->addValue( array( 'query', $this->getModuleName() ), null, $info );
				if ( !$fit ) {
					if ( $params['sort'] == 'name' ) {
						$this->setContinueEnumParameter( 'continue', $row->img_name );
					} else {
						$this->setContinueEnumParameter( 'start', wfTimestamp( TS_ISO_8601, $row->img_timestamp ) );
					}
					break;
				}
			} else {
				$titles[] = Title::makeTitle( NS_FILE, $row->img_name );
			}
		}

		if ( is_null( $resultPageSet ) ) {
			$result->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'img' );
		} else {
			$resultPageSet->populateFromTitles( $titles );
		}
	}

	public function getAllowedParams() {
		return array (
			'sort' => array(
				ApiBase::PARAM_DFLT => 'name',
				ApiBase::PARAM_TYPE => array(
					'name',
					'timestamp'
				)
			),
			'dir' => array(
				ApiBase::PARAM_DFLT => 'ascending',
				ApiBase::PARAM_TYPE => array(
					// sort=name
					'ascending',
					'descending',
					// sort=timestamp
					'newer',
					'older',
				)
			),
			'from' => null,
			'to' => null,
			'continue' => null,
			'start' => array(
				ApiBase::PARAM_TYPE => 'timestamp'
			),
			'end' => array(
				ApiBase::PARAM_TYPE => 'timestamp'
			),
			'prop' => array(
				ApiBase::PARAM_TYPE => ApiQueryImageInfo::getPropertyNames( $this->propertyFilter ),
				ApiBase::PARAM_DFLT => 'timestamp|url',
				ApiBase::PARAM_ISMULTI => true
			),
			'prefix' => null,
			'minsize' => array(
				ApiBase::PARAM_TYPE => 'integer',
			),
			'maxsize' => array(
				ApiBase::PARAM_TYPE => 'integer',
			),
			'sha1' => null,
			'sha1base36' => null,
			'wiki_user' => array(
				ApiBase::PARAM_TYPE => 'wiki_user'
			),
			'filterbots' => array(
				ApiBase::PARAM_DFLT => 'all',
				ApiBase::PARAM_TYPE => array(
					'all',
					'bots',
					'nobots'
				)
			),
			'mime' => null,
			'limit' => array(
				ApiBase::PARAM_DFLT => 10,
				ApiBase::PARAM_TYPE => 'limit',
				ApiBase::PARAM_MIN => 1,
				ApiBase::PARAM_MAX => ApiBase::LIMIT_BIG1,
				ApiBase::PARAM_MAX2 => ApiBase::LIMIT_BIG2
			),
		);
	}

	public function getParamDescription() {
		$p = $this->getModulePrefix();
		return array(
			'sort' => 'Property to sort by',
			'dir' => 'The direction in which to list',
			'from' => "The image title to start enumerating from. Can only be used with {$p}sort=name",
			'to' => "The image title to stop enumerating at. Can only be used with {$p}sort=name",
			'continue' => 'When more results are available, use this to continue',
			'start' => "The timestamp to start enumerating from. Can only be used with {$p}sort=timestamp",
			'end' => "The timestamp to end enumerating. Can only be used with {$p}sort=timestamp",
			'prop' => ApiQueryImageInfo::getPropertyDescriptions( $this->propertyFilter ),
			'prefix' => "Search for all image titles that begin with this value. Can only be used with {$p}sort=name",
			'minsize' => 'Limit to images with at least this many bytes',
			'maxsize' => 'Limit to images with at most this many bytes',
			'sha1' => "SHA1 hash of image. Overrides {$p}sha1base36",
			'sha1base36' => 'SHA1 hash of image in base 36 (used in MediaWiki)',
			'wiki_user' => "Only return files uploaded by this wiki_user. Can only be used with {$p}sort=timestamp. Cannot be used together with {$p}filterbots",
			'filterbots' => "How to filter files uploaded by bots. Can only be used with {$p}sort=timestamp. Cannot be used together with {$p}wiki_user",
			'mime' => 'What MIME type to search for. e.g. image/jpeg. Disabled in Miser Mode',
			'limit' => 'How many images in total to return',
		);
	}

	private $propertyFilter = array( 'archivename', 'thumbmime' );

	public function getResultProperties() {
		return array_merge(
			array(
				'' => array(
					'name' => 'string',
					'ns' => 'namespace',
					'title' => 'string'
				)
			),
			ApiQueryImageInfo::getResultPropertiesFiltered( $this->propertyFilter )
		);
	}

	public function getDescription() {
		return 'Enumerate all images sequentially';
	}

	public function getPossibleErrors() {
		$p = $this->getModulePrefix();
		return array_merge( parent::getPossibleErrors(), array(
			array( 'code' => 'params', 'info' => 'Use "gaifilterredir=nonredirects" option instead of "redirects" when using allimages as a generator' ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}start' can only be used with {$p}sort=timestamp" ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}end' can only be used with {$p}sort=timestamp" ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}wiki_user' can only be used with {$p}sort=timestamp" ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}filterbots' can only be used with {$p}sort=timestamp" ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}from' can only be used with {$p}sort=name" ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}to' can only be used with {$p}sort=name" ),
			array( 'code' => 'badparams', 'info' => "Parameter'{$p}prefix' can only be used with {$p}sort=name" ),
			array( 'code' => 'badparams', 'info' => "Parameters 'wiki_user' and 'filterbots' cannot be used together" ),
			array( 'code' => 'unsupportedrepo', 'info' => 'Local file repository does not support querying all images' ),
			array( 'code' => 'mimesearchdisabled', 'info' => 'MIME search disabled in Miser Mode' ),
			array( 'code' => 'invalidsha1hash', 'info' => 'The SHA1 hash provided is not valid' ),
			array( 'code' => 'invalidsha1base36hash', 'info' => 'The SHA1Base36 hash provided is not valid' ),
			array( 'code' => '_badcontinue', 'info' => 'Invalid continue param. You should pass the original value returned by the previous query' ),
		) );
	}

	public function getExamples() {
		return array(
			'api.php?action=query&list=allimages&aifrom=B' => array(
				'Simple Use',
				'Show a list of files starting at the letter "B"',
			),
			'api.php?action=query&list=allimages&aiprop=wiki_user|timestamp|url&aisort=timestamp&aidir=older' => array(
				'Simple Use',
				'Show a list of recently uploaded files similar to Special:NewFiles',
			),
			'api.php?action=query&generator=allimages&gailimit=4&gaifrom=T&prop=imageinfo' => array(
				'Using as Generator',
				'Show info about 4 files starting at the letter "T"',
			),
		);
	}

	public function getHelpUrls() {
		return 'https://www.mediawiki.org/wiki/API:Allimages';
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
