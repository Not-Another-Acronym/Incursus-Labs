<?php
/**
 * Resource loader module for user customizations.
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
 * Module for user customizations
 */
class ResourceLoaderwiki_UserGroupsModule extends ResourceLoaderWikiModule {

	/* Protected Methods */
	protected $origin = self::ORIGIN_USER_SITEWIDE;

	/**
	 * @param $context ResourceLoaderContext
	 * @return array
	 */
	protected function getPages( ResourceLoaderContext $context ) {
		global $wgwiki_User;

		$userName = $context->getUser();
		if ( $userName === null ) {
			return array();
		}

		// Use $wgwiki_User is possible; allows to skip a lot of code
		if ( is_object( $wgwiki_User ) && $wgwiki_User->getName() == $userName ) {
			$user = $wgwiki_User;
		} else {
			$user = wiki_User::newFromName( $userName );
			if ( !$user instanceof wiki_User ) {
				return array();
			}
		}

		$pages = array();
		foreach( $user->getEffectiveGroups() as $group ) {
			if ( in_array( $group, array( '*', 'user' ) ) ) {
				continue;
			}
			$pages["MediaWiki:Group-$group.js"] = array( 'type' => 'script' );
			$pages["MediaWiki:Group-$group.css"] = array( 'type' => 'style' );
		}
		return $pages;
	}

	/* Methods */

	/**
	 * @return string
	 */
	public function getGroup() {
		return 'user';
	}
}
