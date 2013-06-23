<?php
/**
 *
 *
 * Created on July 7, 2007
 *
 * Copyright © 2007 Yuri Astrakhan "<Firstname><Lastname>@gmail.com"
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
 * Query module to enumerate all registered users.
 *
 * @ingroup API
 */
class ApiQueryAllwiki_Users extends ApiQueryBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'au' );
	}

	/**
	 * This function converts the user name to a canonical form
	 * which is stored in the database.
	 * @param String $name
	 * @return String
	 */
	private function getCanonicalwiki_UserName( $name ) {
		return str_replace( '_', ' ', $name );
	}

	public function execute() {
		$db = $this->getDB();
		$params = $this->extractRequestParams();

		$prop = $params['prop'];
		if ( !is_null( $prop ) ) {
			$prop = array_flip( $prop );
			$fld_blockinfo = isset( $prop['blockinfo'] );
			$fld_editcount = isset( $prop['editcount'] );
			$fld_groups = isset( $prop['groups'] );
			$fld_rights = isset( $prop['rights'] );
			$fld_registration = isset( $prop['registration'] );
			$fld_implicitgroups = isset( $prop['implicitgroups'] );
		} else {
			$fld_blockinfo = $fld_editcount = $fld_groups = $fld_registration = $fld_rights = $fld_implicitgroups = false;
		}

		$limit = $params['limit'];

		$this->addTables( 'user' );
		$useIndex = true;

		$dir = ( $params['dir'] == 'descending' ? 'older' : 'newer' );
		$from = is_null( $params['from'] ) ? null : $this->getCanonicalwiki_UserName( $params['from'] );
		$to = is_null( $params['to'] ) ? null : $this->getCanonicalwiki_UserName( $params['to'] );

		# MySQL doesn't seem to use 'equality propagation' here, so like the
		# Activewiki_Users special page, we have to use rc_user_text for some cases.
		$userFieldToSort = $params['activeusers'] ? 'rc_user_text' : 'user_name';

		$this->addWhereRange( $userFieldToSort, $dir, $from, $to );

		if ( !is_null( $params['prefix'] ) ) {
			$this->addWhere( $userFieldToSort .
				$db->buildLike( $this->getCanonicalwiki_UserName( $params['prefix'] ), $db->anyString() ) );
		}

		if ( !is_null( $params['rights'] ) ) {
			$groups = array();
			foreach( $params['rights'] as $r ) {
				$groups = array_merge( $groups, wiki_User::getGroupsWithPermission( $r ) );
			}

			$groups = array_unique( $groups );

			if ( is_null( $params['group'] ) ) {
				$params['group'] = $groups;
			} else {
				$params['group'] = array_unique( array_merge( $params['group'], $groups ) );
			}
		}

		if ( !is_null( $params['group'] ) && !is_null( $params['excludegroup'] ) ) {
			$this->dieUsage( 'group and excludegroup cannot be used together', 'group-excludegroup' );
		}

		if ( !is_null( $params['group'] ) && count( $params['group'] ) ) {
			$useIndex = false;
			// Filter only users that belong to a given group
			$this->addTables( 'user_groups', 'ug1' );
			$this->addJoinConds( array( 'ug1' => array( 'INNER JOIN', array( 'ug1.ug_user=user_id',
					'ug1.ug_group' => $params['group'] ) ) ) );
		}

		if ( !is_null( $params['excludegroup'] ) && count( $params['excludegroup'] ) ) {
			$useIndex = false;
			// Filter only users don't belong to a given group
			$this->addTables( 'user_groups', 'ug1' );

			if ( count( $params['excludegroup'] ) == 1 ) {
				$exclude = array( 'ug1.ug_group' => $params['excludegroup'][0] );
			} else {
				$exclude = array( $db->makeList( array( 'ug1.ug_group' => $params['excludegroup'] ), LIST_OR ) );
			}
			$this->addJoinConds( array( 'ug1' => array( 'LEFT OUTER JOIN',
				array_merge( array( 'ug1.ug_user=user_id' ), $exclude )
				)
			) );
			$this->addWhere( 'ug1.ug_user IS NULL' );
		}

		if ( $params['witheditsonly'] ) {
			$this->addWhere( 'user_editcount > 0' );
		}

		$this->showHiddenwiki_UsersAddBlockInfo( $fld_blockinfo );

		if ( $fld_groups || $fld_rights ) {
			// Show the groups the given users belong to
			// request more than needed to avoid not getting all rows that belong to one user
			$groupCount = count( wiki_User::getAllGroups() );
			$sqlLimit = $limit + $groupCount + 1;

			$this->addTables( 'user_groups', 'ug2' );
			$this->addJoinConds( array( 'ug2' => array( 'LEFT JOIN', 'ug2.ug_user=user_id' ) ) );
			$this->addFields( 'ug2.ug_group ug_group2' );
		} else {
			$sqlLimit = $limit + 1;
		}

		if ( $params['activeusers'] ) {
			global $wgActivewiki_UserDays;
			$this->addTables( 'recentchanges' );

			$this->addJoinConds( array( 'recentchanges' => array(
				'INNER JOIN', 'rc_user_text=user_name'
			) ) );

			$this->addFields( array( 'recentedits' => 'COUNT(*)' ) );

			$this->addWhere( 'rc_log_type IS NULL OR rc_log_type != ' . $db->addQuotes( 'newusers' ) );
			$timestamp = $db->timestamp( wfTimestamp( TS_UNIX ) - $wgActivewiki_UserDays*24*3600 );
			$this->addWhere( 'rc_timestamp >= ' . $db->addQuotes( $timestamp ) );

			$this->addOption( 'GROUP BY', $userFieldToSort );
		}

		$this->addOption( 'LIMIT', $sqlLimit );

		$this->addFields( array(
			'user_name',
			'user_id'
		) );
		$this->addFieldsIf( 'user_editcount', $fld_editcount );
		$this->addFieldsIf( 'user_registration', $fld_registration );

		if ( $useIndex ) {
			$this->addOption( 'USE INDEX', array( 'user' => 'user_name' ) );
		}

		$res = $this->select( __METHOD__ );

		$count = 0;
		$lastwiki_UserData = false;
		$lastwiki_User = false;
		$result = $this->getResult();

		//
		// This loop keeps track of the last entry.
		// For each new row, if the new row is for different user then the last, the last entry is added to results.
		// Otherwise, the group of the new row is appended to the last entry.
		// The setContinue... is more complex because of this, and takes into account the higher sql limit
		// to make sure all rows that belong to the same user are received.

		foreach ( $res as $row ) {
			$count++;

			if ( $lastwiki_User !== $row->user_name ) {
				// Save the last pass's user data
				if ( is_array( $lastwiki_UserData ) ) {
					$fit = $result->addValue( array( 'query', $this->getModuleName() ),
							null, $lastwiki_UserData );

					$lastwiki_UserData = null;

					if ( !$fit ) {
						$this->setContinueEnumParameter( 'from', $lastwiki_UserData['name'] );
						break;
					}
				}

				if ( $count > $limit ) {
					// We've reached the one extra which shows that there are additional pages to be had. Stop here...
					$this->setContinueEnumParameter( 'from', $row->user_name );
					break;
				}

				// Record new user's data
				$lastwiki_User = $row->user_name;
				$lastwiki_UserData = array(
					'userid' => $row->user_id,
					'name' => $lastwiki_User,
				);
				if ( $fld_blockinfo && !is_null( $row->ipb_by_text ) ) {
					$lastwiki_UserData['blockid'] = $row->ipb_id;
					$lastwiki_UserData['blockedby'] = $row->ipb_by_text;
					$lastwiki_UserData['blockedbyid'] = $row->ipb_by;
					$lastwiki_UserData['blockreason'] = $row->ipb_reason;
					$lastwiki_UserData['blockexpiry'] = $row->ipb_expiry;
				}
				if ( $row->ipb_deleted ) {
					$lastwiki_UserData['hidden'] = '';
				}
				if ( $fld_editcount ) {
					$lastwiki_UserData['editcount'] = intval( $row->user_editcount );
				}
				if ( $params['activeusers'] ) {
					$lastwiki_UserData['recenteditcount'] = intval( $row->recentedits );
				}
				if ( $fld_registration ) {
					$lastwiki_UserData['registration'] = $row->user_registration ?
						wfTimestamp( TS_ISO_8601, $row->user_registration ) : '';
				}
			}

			if ( $sqlLimit == $count ) {
				// BUG!  database contains group name that wiki_User::getAllGroups() does not return
				// TODO: should handle this more gracefully
				ApiBase::dieDebug( __METHOD__,
					'MediaWiki configuration error: the database contains more user groups than known to wiki_User::getAllGroups() function' );
			}

			$lastwiki_UserObj = wiki_User::newFromId( $row->user_id );

			// Add user's group info
			if ( $fld_groups ) {
				if ( !isset( $lastwiki_UserData['groups'] ) ) {
					if ( $lastwiki_UserObj ) {
						$lastwiki_UserData['groups'] = $lastwiki_UserObj->getAutomaticGroups();
					} else {
						// This should not normally happen
						$lastwiki_UserData['groups'] = array();
					}
				}

				if ( !is_null( $row->ug_group2 ) ) {
					$lastwiki_UserData['groups'][] = $row->ug_group2;
				}

				$result->setIndexedTagName( $lastwiki_UserData['groups'], 'g' );
			}

			if ( $fld_implicitgroups && !isset( $lastwiki_UserData['implicitgroups'] ) && $lastwiki_UserObj ) {
				$lastwiki_UserData['implicitgroups'] = $lastwiki_UserObj->getAutomaticGroups();
				$result->setIndexedTagName( $lastwiki_UserData['implicitgroups'], 'g' );
			}
			if ( $fld_rights ) {
				if ( !isset( $lastwiki_UserData['rights'] ) ) {
					if ( $lastwiki_UserObj ) {
						$lastwiki_UserData['rights'] =  wiki_User::getGroupPermissions( $lastwiki_UserObj->getAutomaticGroups() );
					} else {
						// This should not normally happen
						$lastwiki_UserData['rights'] = array();
					}
				}

				if ( !is_null( $row->ug_group2 ) ) {
					$lastwiki_UserData['rights'] = array_unique( array_merge( $lastwiki_UserData['rights'],
						wiki_User::getGroupPermissions( array( $row->ug_group2 ) ) ) );
				}

				$result->setIndexedTagName( $lastwiki_UserData['rights'], 'r' );
			}
		}

		if ( is_array( $lastwiki_UserData ) ) {
			$fit = $result->addValue( array( 'query', $this->getModuleName() ),
				null, $lastwiki_UserData );
			if ( !$fit ) {
				$this->setContinueEnumParameter( 'from', $lastwiki_UserData['name'] );
			}
		}

		$result->setIndexedTagName_internal( array( 'query', $this->getModuleName() ), 'u' );
	}

	public function getCacheMode( $params ) {
		return 'anon-public-user-private';
	}

	public function getAllowedParams() {
		$userGroups = wiki_User::getAllGroups();
		return array(
			'from' => null,
			'to' => null,
			'prefix' => null,
			'dir' => array(
				ApiBase::PARAM_DFLT => 'ascending',
				ApiBase::PARAM_TYPE => array(
					'ascending',
					'descending'
				),
			),
			'group' => array(
				ApiBase::PARAM_TYPE => $userGroups,
				ApiBase::PARAM_ISMULTI => true,
			),
			'excludegroup' => array(
				ApiBase::PARAM_TYPE => $userGroups,
				ApiBase::PARAM_ISMULTI => true,
			),
			'rights' => array(
				ApiBase::PARAM_TYPE => wiki_User::getAllRights(),
				ApiBase::PARAM_ISMULTI => true,
			),
			'prop' => array(
				ApiBase::PARAM_ISMULTI => true,
				ApiBase::PARAM_TYPE => array(
					'blockinfo',
					'groups',
					'implicitgroups',
					'rights',
					'editcount',
					'registration'
				)
			),
			'limit' => array(
				ApiBase::PARAM_DFLT => 10,
				ApiBase::PARAM_TYPE => 'limit',
				ApiBase::PARAM_MIN => 1,
				ApiBase::PARAM_MAX => ApiBase::LIMIT_BIG1,
				ApiBase::PARAM_MAX2 => ApiBase::LIMIT_BIG2
			),
			'witheditsonly' => false,
			'activeusers' => false,
		);
	}

	public function getParamDescription() {
		global $wgActivewiki_UserDays;
		return array(
			'from' => 'The user name to start enumerating from',
			'to' => 'The user name to stop enumerating at',
			'prefix' => 'Search for all users that begin with this value',
			'dir' => 'Direction to sort in',
			'group' => 'Limit users to given group name(s)',
			'excludegroup' => 'Exclude users in given group name(s)',
			'rights' => 'Limit users to given right(s) (does not include rights granted by implicit or auto-promoted groups like *, user, or autoconfirmed)',
			'prop' => array(
				'What pieces of information to include.',
				' blockinfo      - Adds the information about a current block on the user',
				' groups         - Lists groups that the user is in. This uses more server resources and may return fewer results than the limit',
				' implicitgroups - Lists all the groups the user is automatically in',
				' rights         - Lists rights that the user has',
				' editcount      - Adds the edit count of the user',
				' registration   - Adds the timestamp of when the user registered if available (may be blank)',
				),
			'limit' => 'How many total user names to return',
			'witheditsonly' => 'Only list users who have made edits',
			'activeusers' => "Only list users active in the last {$wgActivewiki_UserDays} days(s)"
		);
	}

	public function getResultProperties() {
		return array(
			'' => array(
				'userid' => 'integer',
				'name' => 'string',
				'recenteditcount' => array(
					ApiBase::PROP_TYPE => 'integer',
					ApiBase::PROP_NULLABLE => true
				)
			),
			'blockinfo' => array(
				'blockid' => array(
					ApiBase::PROP_TYPE => 'integer',
					ApiBase::PROP_NULLABLE => true
				),
				'blockedby' => array(
					ApiBase::PROP_TYPE => 'string',
					ApiBase::PROP_NULLABLE => true
				),
				'blockedbyid' => array(
					ApiBase::PROP_TYPE => 'integer',
					ApiBase::PROP_NULLABLE => true
				),
				'blockedreason' => array(
					ApiBase::PROP_TYPE => 'string',
					ApiBase::PROP_NULLABLE => true
				),
				'blockedexpiry' => array(
					ApiBase::PROP_TYPE => 'string',
					ApiBase::PROP_NULLABLE => true
				),
				'hidden' => 'boolean'
			),
			'editcount' => array(
				'editcount' => 'integer'
			),
			'registration' => array(
				'registration' => 'string'
			)
		);
	}

	public function getDescription() {
		return 'Enumerate all registered users';
	}

	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			array( 'code' => 'group-excludegroup', 'info' => 'group and excludegroup cannot be used together' ),
		) );
	}

	public function getExamples() {
		return array(
			'api.php?action=query&list=allusers&aufrom=Y',
		);
	}

	public function getHelpUrls() {
		return 'https://www.mediawiki.org/wiki/API:Allusers';
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
