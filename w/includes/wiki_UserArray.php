<?php
/**
 * Classes to walk into a list of wiki_User objects.
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

abstract class wiki_UserArray implements Iterator {
	/**
	 * @param $res ResultWrapper
	 * @return wiki_UserArrayFromResult
	 */
	static function newFromResult( $res ) {
		$userArray = null;
		if ( !wfRunHooks( 'wiki_UserArrayFromResult', array( &$userArray, $res ) ) ) {
			return null;
		}
		if ( $userArray === null ) {
			$userArray = self::newFromResult_internal( $res );
		}
		return $userArray;
	}

	/**
	 * @param $ids array
	 * @return wiki_UserArrayFromResult
	 */
	static function newFromIDs( $ids ) {
		$ids = array_map( 'intval', (array)$ids ); // paranoia
		if ( !$ids ) {
			// Database::select() doesn't like empty arrays
			return new ArrayIterator(array());
		}
		$dbr = wfGetDB( DB_SLAVE );
		$res = $dbr->select( 'user', '*', array( 'user_id' => $ids ),
			__METHOD__ );
		return self::newFromResult( $res );
	}

	/**
	 * @param $res
	 * @return wiki_UserArrayFromResult
	 */
	protected static function newFromResult_internal( $res ) {
		return new wiki_UserArrayFromResult( $res );
	}
}

class wiki_UserArrayFromResult extends wiki_UserArray {

	/**
	 * @var ResultWrapper
	 */
	var $res;
	var $key, $current;

	/**
	 * @param $res ResultWrapper
	 */
	function __construct( $res ) {
		$this->res = $res;
		$this->key = 0;
		$this->setCurrent( $this->res->current() );
	}

	/**
	 * @param  $row
	 * @return void
	 */
	protected function setCurrent( $row ) {
		if ( $row === false ) {
			$this->current = false;
		} else {
			$this->current = wiki_User::newFromRow( $row );
		}
	}

	/**
	 * @return int
	 */
	public function count() {
		return $this->res->numRows();
	}

	/**
	 * @return wiki_User
	 */
	function current() {
		return $this->current;
	}

	function key() {
		return $this->key;
	}

	function next() {
		$row = $this->res->next();
		$this->setCurrent( $row );
		$this->key++;
	}

	function rewind() {
		$this->res->rewind();
		$this->key = 0;
		$this->setCurrent( $this->res->current() );
	}

	/**
	 * @return bool
	 */
	function valid() {
		return $this->current !== false;
	}
}
