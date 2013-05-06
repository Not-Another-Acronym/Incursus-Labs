<?php
/**
 * Delete image information from the object cache.
 *
 * Usage example:
 * php deleteImageMemcached.php --until "2005-09-05 00:00:00" --sleep 0
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
 * @ingroup Maintenance
 */

require_once( __DIR__ . '/Maintenance.php' );

/**
 * Maintenance script that deletes image information from the object cache.
 *
 * @ingroup Maintenance
 */
class DeleteImageCache extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->mDescription = "Delete image information from the cache";
		$this->addOption( 'sleep', 'How many seconds to sleep between deletions', true, true );
		$this->addOption( 'until', 'Timestamp to delete all entries prior to', true, true );
	}

	public function execute() {
		global $wgMemc;

		$until = preg_replace( "/[^\d]/", '', $this->getOption( 'until' ) );
		$sleep = (int)$this->getOption( 'sleep' ) * 1000; // milliseconds

		ini_set( 'display_errors', false );

		r = wfGetDB( DB_SLAVE );

		$res = r->select( 'image',
			array( 'img_name' ),
			array( "img_timestamp < {$until}" ),
			__METHOD__
		);

		$i = 0;
		$total = $this->getImageCount();

		foreach ( $res as $row ) {
			if ( $i % $this->report == 0 )
				$this->output( sprintf( "%s: %13s done (%s)\n", wfWikiID(), "$i/$total", wfPercent( $i / $total * 100 ) ) );
			$md5 = md5( $row->img_name );
			$wgMemc->delete( wfMemcKey( 'Image', $md5 ) );

			if ( $sleep != 0 )
				usleep( $sleep );

			++$i;
		}
	}

	private function getImageCount() {
		r = wfGetDB( DB_SLAVE );
		return r->selectField( 'image', 'COUNT(*)', array(), __METHOD__ );
	}
}

$maintClass = "DeleteImageCache";
require_once( RUN_MAINTENANCE_IF_MAIN );
