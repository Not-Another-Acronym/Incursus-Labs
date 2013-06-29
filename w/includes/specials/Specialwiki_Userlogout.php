<?php
/**
 * Implements Special:wiki_Userlogout
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
 * @ingroup SpecialPage
 */

/**
 * Implements Special:wiki_Userlogout
 *
 * @ingroup SpecialPage
 */
class Specialwiki_Userlogout extends UnlistedSpecialPage {

	function __construct() {
		parent::__construct( 'wiki_Userlogout' );
	}

	function execute( $par ) {
		/**
		 * Some satellite ISPs use broken precaching schemes that log people out straight after
		 * they're logged in (bug 17790). Luckily, there's a way to detect such requests.
		 */
		if ( isset( $_SERVER['REQUEST_URI'] ) && strpos( $_SERVER['REQUEST_URI'], '&amp;' ) !== false ) {
			wfDebug( "Special:wiki_Userlogout request {$_SERVER['REQUEST_URI']} looks suspicious, denying.\n" );
			throw new HttpError( 400, $this->msg( 'suspicious-userlogout' ), $this->msg( 'loginerror' ) );
		}

		$this->setHeaders();
		$this->outputHeader();

		$user = $this->getUser();
		$oldName = $user->getName();
		$user->logout();

		$out = $this->getOutput();
		$out->addWikiMsg( 'logouttext' );

		// Hook.
		$injected_html = '';
		wfRunHooks( 'wiki_UserLogoutComplete', array( &$user, &$injected_html, $oldName ) );
		$out->addHTML( $injected_html );

		$out->returnToMain();
	}
}