<?php
/**
 *
 *
 * Created on June 1, 2008
 *
 * Copyright © 2008 Bryan Tong Minh <Bryan.TongMinh@Gmail.com>
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
 * API Module to facilitate sending of emails to users
 * @ingroup API
 */
class ApiEmailwiki_User extends ApiBase {

	public function __construct( $main, $action ) {
		parent::__construct( $main, $action );
	}

	public function execute() {
		$params = $this->extractRequestParams();

		// Validate target
		$targetUser = SpecialEmailwiki_User::getTarget( $params['target'] );
		if ( !( $targetUser instanceof wiki_User ) ) {
			$this->dieUsageMsg( array( $targetUser ) );
		}

		// Check permissions and errors
		$error = SpecialEmailwiki_User::getPermissionsError( $this->getUser(), $params['token'] );
		if ( $error ) {
			$this->dieUsageMsg( array( $error ) );
		}

		$data = array(
			'Target' => $targetUser->getName(),
			'Text' => $params['text'],
			'Subject' => $params['subject'],
			'CCMe' => $params['ccme'],
		);
		$retval = SpecialEmailwiki_User::submit( $data, $this->getContext() );

		if ( $retval instanceof Status ) {
			// SpecialEmailwiki_User sometimes returns a status
			// sometimes it doesn't.
			if ( $retval->isGood() ) {
				$retval = true;
			} else {
				$retval = $retval->getErrorsArray();
			}
		}

		if ( $retval === true ) {
			$result = array( 'result' => 'Success' );
		} else {
			$result = array(
				'result' => 'Failure',
				'message' => $retval
			);
		}

		$this->getResult()->addValue( null, $this->getModuleName(), $result );
	}

	public function mustBePosted() {
		return true;
	}

	public function isWriteMode() {
		return true;
	}

	public function getAllowedParams() {
		return array(
			'target' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true
			),
			'subject' => null,
			'text' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true
			),
			'token' => array(
				ApiBase::PARAM_TYPE => 'string',
				ApiBase::PARAM_REQUIRED => true
			),
			'ccme' => false,
		);
	}

	public function getParamDescription() {
		return array(
			'target' => 'wiki_User to send email to',
			'subject' => 'Subject header',
			'text' => 'Mail body',
			'token' => 'A token previously acquired via prop=info',
			'ccme' => 'Send a copy of this mail to me',
		);
	}

	public function getResultProperties() {
		return array(
			'' => array(
				'result' => array(
					ApiBase::PROP_TYPE => array(
						'Success',
						'Failure'
					),
				),
				'message' => array(
					ApiBase::PROP_TYPE => 'string',
					ApiBase::PROP_NULLABLE => true
				)
			)
		);
	}

	public function getDescription() {
		return 'Email a user.';
	}

	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			array( 'usermaildisabled' ),
		) );
	}

	public function needsToken() {
		return true;
	}

	public function getTokenSalt() {
		return '';
	}

	public function getExamples() {
		return array(
			'api.php?action=emailuser&target=WikiSysop&text=Content' => 'Send an email to the wiki_User "WikiSysop" with the text "Content"',
		);
	}

	public function getHelpUrls() {
		return 'https://www.mediawiki.org/wiki/API:E-mail';
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
