<?php
/**
 * Resource loader module for user tokens.
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
 * @author Krinkle
 */

/**
 * Module for user tokens
 */
class ResourceLoaderwiki_UserTokensModule extends ResourceLoaderModule {

	/* Protected Members */

	protected $origin = self::ORIGIN_CORE_INDIVIDUAL;

	/* Methods */

	/**
	 * Fetch the tokens for the current user.
	 *
	 * @param $context ResourceLoaderContext: Context object
	 * @return Array: List of tokens keyed by token type
	 */
	protected function contextwiki_UserTokens( ResourceLoaderContext $context ) {
		global $wgwiki_User;

		return array(
			'editToken' => $wgwiki_User->getEditToken(),
			'watchToken' => ApiQueryInfo::getWatchToken(null, null),
		);
	}

	/**
	 * @param $context ResourceLoaderContext
	 * @return string
	 */
	public function getScript( ResourceLoaderContext $context ) {
		return Xml::encodeJsCall( 'mw.user.tokens.set',
			array( $this->contextwiki_UserTokens( $context ) ) );
	}

	/**
	 * @return bool
	 */
	public function supportsURLLoading() {
		return false;
	}

	/**
	 * @return string
	 */
	public function getGroup() {
		return 'private';
	}
}
