<?php
/**
 * This is the SQLite database abstraction layer.
 * See maintenance/sqlite/README for development notes and other specific information
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
 * @ingroup Database
 */

/**
 * @ingroup Database
 */
class DatabaseSqlite extends DatabaseBase {

	private static $fulltextEnabled = null;

	var $mAffectedRows;
	var $mLastResult;
	var $mDatabaseFile;
	var $mName;

	/**
	 * @var PDO
	 */
	protected $mConn;

	/**
	 * Constructor.
	 * Parameters $server, $user and $password are not used.
	 * @param $server string
	 * @param $user string
	 * @param $password string
	 * @param $dbName string
	 * @param $flags int
	 */
	function __construct( $server = false, $user = false, $password = false, $dbName = false, $flags = 0 ) {
		$this->mName = $dbName;
		parent::__construct( $server, $user, $password, $dbName, $flags );
		// parent doesn't open when $user is false, but we can work with $dbName
		if( $dbName ) {
			global $wgSharedDB;
			if( $this->open( $server, $user, $password, $dbName ) && $wgSharedDB ) {
				$this->attachDatabase( $wgSharedDB );
			}
		}
	}

	/**
	 * @return string
	 */
	function getType() {
		return 'sqlite';
	}

	/**
	 * @todo: check if it should be true like parent class
	 *
	 * @return bool
	 */
	function implicitGroupby() {
		return false;
	}

	/** Open an SQLite database and return a resource handle to it
	 *  NOTE: only $dbName is used, the other parameters are irrelevant for SQLite databases
	 *
	 * @param $server
	 * @param $user
	 * @param $pass
	 * @param $dbName
	 *
	 * @return PDO
	 */
	function open( $server, $user, $pass, $dbName ) {
		global $wgSQLiteDataDir;

		$fileName = self::generateFileName( $wgSQLiteDataDir, $dbName );
		if ( !is_readable( $fileName ) ) {
			$this->mConn = false;
			throw new DBConnectionError( $this, "SQLite database not accessible" );
		}
		$this->openFile( $fileName );
		return $this->mConn;
	}

	/**
	 * Opens a database file
	 *
	 * @param $fileName string
	 *
	 * @return PDO|bool SQL connection or false if failed
	 */
	function openFile( $fileName ) {
		$this->mDatabaseFile = $fileName;
		try {
			if ( $this->mFlags & DBO_PERSISTENT ) {
				$this->mConn = new PDO( "sqlite:$fileName", '', '',
					array( PDO::ATTR_PERSISTENT => true ) );
			} else {
				$this->mConn = new PDO( "sqlite:$fileName", '', '' );
			}
		} catch ( PDOException $e ) {
			$err = $e->getMessage();
		}
		if ( !$this->mConn ) {
			wfDebug( "DB connection error: $err\n" );
			throw new DBConnectionError( $this, $err );
		}
		$this->mOpened = !!$this->mConn;
		# set error codes only, don't raise exceptions
		if ( $this->mOpened ) {
			$this->mConn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
			return true;
		}
	}

	/**
	 * Does not actually close the connection, just destroys the reference for GC to do its work
	 * @return bool
	 */
	protected function closeConnection() {
		$this->mConn = null;
		return true;
	}

	/**
	 * Generates a database file name. Explicitly public for installer.
	 * @param $dir String: Directory where database resides
	 * @param $dbName String: Database name
	 * @return String
	 */
	public static function generateFileName( $dir, $dbName ) {
		return "$dir/$dbName.sqlite";
	}

	/**
	 * Check if the searchindext table is FTS enabled.
	 * @return bool False if not enabled.
	 */
	function checkForEnabledSearch() {
		if ( self::$fulltextEnabled === null ) {
			self::$fulltextEnabled = false;
			$table = $this->tableName( 'searchindex' );
			$res = $this->query( "SELECT sql FROM sqlite_master WHERE tbl_name = '$table'", __METHOD__ );
			if ( $res ) {
				$row = $res->fetchRow();
				self::$fulltextEnabled = stristr($row['sql'], 'fts' ) !== false;
			}
		}
		return self::$fulltextEnabled;
	}

	/**
	 * Returns version of currently supported SQLite fulltext search module or false if none present.
	 * @return String
	 */
	static function getFulltextSearchModule() {
		static $cachedResult = null;
		if ( $cachedResult !== null ) {
			return $cachedResult;
		}
		$cachedResult = false;
		$table = 'dummy_search_test';

		$db = new DatabaseSqliteStandalone( ':memory:' );

		if ( $db->query( "CREATE VIRTUAL TABLE $table USING FTS3(dummy_field)", __METHOD__, true ) ) {
			$cachedResult = 'FTS3';
		}
		$db->close();
		return $cachedResult;
	}

	/**
	 * Attaches external database to our connection, see http://sqlite.org/lang_attach.html
	 * for details.
	 *
	 * @param $name String: database name to be used in queries like SELECT foo FROM dbname.table
	 * @param $file String: database file name. If omitted, will be generated using $name and $wgSQLiteDataDir
	 * @param $fname String: calling function name
	 *
	 * @return ResultWrapper
	 */
	function attachDatabase( $name, $file = false, $fname = 'DatabaseSqlite::attachDatabase' ) {
		global $wgSQLiteDataDir;
		if ( !$file ) {
			$file = self::generateFileName( $wgSQLiteDataDir, $name );
		}
		$file = $this->addQuotes( $file );
		return $this->query( "ATTACH DATABASE $file AS $name", $fname );
	}

	/**
	 * @see DatabaseBase::isWriteQuery()
	 *
	 * @param $sql string
	 *
	 * @return bool
	 */
	function isWriteQuery( $sql ) {
		return parent::isWriteQuery( $sql ) && !preg_match( '/^ATTACH\b/i', $sql );
	}

	/**
	 * SQLite doesn't allow buffered results or data seeking etc, so we'll use fetchAll as the result
	 *
	 * @param $sql string
	 *
	 * @return ResultWrapper
	 */
	protected function doQuery( $sql ) {
		$res = $this->mConn->query( $sql );
		if ( $res === false ) {
			return false;
		} else {
			$r = $res instanceof ResultWrapper ? $res->result : $res;
			$this->mAffectedRows = $r->rowCount();
			$res = new ResultWrapper( $this, $r->fetchAll() );
		}
		return $res;
	}

	/**
	 * @param $res ResultWrapper
	 */
	function freeResult( $res ) {
		if ( $res instanceof ResultWrapper ) {
			$res->result = null;
		} else {
			$res = null;
		}
	}

	/**
	 * @param $res ResultWrapper
	 * @return
	 */
	function fetchObject( $res ) {
		if ( $res instanceof ResultWrapper ) {
			$r =& $res->result;
		} else {
			$r =& $res;
		}

		$cur = current( $r );
		if ( is_array( $cur ) ) {
			next( $r );
			$obj = new stdClass;
			foreach ( $cur as $k => $v ) {
				if ( !is_numeric( $k ) ) {
					$obj->$k = $v;
				}
			}

			return $obj;
		}
		return false;
	}

	/**
	 * @param $res ResultWrapper
	 * @return bool|mixed
	 */
	function fetchRow( $res ) {
		if ( $res instanceof ResultWrapper ) {
			$r =& $res->result;
		} else {
			$r =& $res;
		}
		$cur = current( $r );
		if ( is_array( $cur ) ) {
			next( $r );
			return $cur;
		}
		return false;
	}

	/**
	 * The PDO::Statement class implements the array interface so count() will work
	 *
	 * @param $res ResultWrapper
	 *
	 * @return int
	 */
	function numRows( $res ) {
		$r = $res instanceof ResultWrapper ? $res->result : $res;
		return count( $r );
	}

	/**
	 * @param $res ResultWrapper
	 * @return int
	 */
	function numFields( $res ) {
		$r = $res instanceof ResultWrapper ? $res->result : $res;
		return is_array( $r ) ? count( $r[0] ) : 0;
	}

	/**
	 * @param $res ResultWrapper
	 * @param $n
	 * @return bool
	 */
	function fieldName( $res, $n ) {
		$r = $res instanceof ResultWrapper ? $res->result : $res;
		if ( is_array( $r ) ) {
			$keys = array_keys( $r[0] );
			return $keys[$n];
		}
		return false;
	}

	/**
	 * Use MySQL's naming (accounts for prefix etc) but remove surrounding backticks
	 *
	 * @param $name
	 * @param $format String
	 * @return string
	 */
	function tableName( $name, $format = 'quoted' ) {
		// table names starting with sqlite_ are reserved
		if ( strpos( $name, 'sqlite_' ) === 0 ) {
			return $name;
		}
		return str_replace( '"', '', parent::tableName( $name, $format ) );
	}

	/**
	 * Index names have DB scope
	 *
	 * @param $index string
	 *
	 * @return string
	 */
	function indexName( $index ) {
		return $index;
	}

	/**
	 * This must be called after nextSequenceVal
	 *
	 * @return int
	 */
	function insertId() {
		// PDO::lastInsertId yields a string :(
		return intval( $this->mConn->lastInsertId() );
	}

	/**
	 * @param $res ResultWrapper
	 * @param $row
	 */
	function dataSeek( $res, $row ) {
		if ( $res instanceof ResultWrapper ) {
			$r =& $res->result;
		} else {
			$r =& $res;
		}
		reset( $r );
		if ( $row > 0 ) {
			for ( $i = 0; $i < $row; $i++ ) {
				next( $r );
			}
		}
	}

	/**
	 * @return string
	 */
	function lastError() {
		if ( !is_object( $this->mConn ) ) {
			return "Cannot return last error, no db connection";
		}
		$e = $this->mConn->errorInfo();
		return isset( $e[2] ) ? $e[2] : '';
	}

	/**
	 * @return string
	 */
	function lastErrno() {
		if ( !is_object( $this->mConn ) ) {
			return "Cannot return last error, no db connection";
		} else {
			$info = $this->mConn->errorInfo();
			return $info[1];
		}
	}

	/**
	 * @return int
	 */
	function affectedRows() {
		return $this->mAffectedRows;
	}

	/**
	 * Returns information about an index
	 * Returns false if the index does not exist
	 * - if errors are explicitly ignored, returns NULL on failure
	 *
	 * @return array
	 */
	function indexInfo( $table, $index, $fname = 'DatabaseSqlite::indexExists' ) {
		$sql = 'PRAGMA index_info(' . $this->addQuotes( $this->indexName( $index ) ) . ')';
		$res = $this->query( $sql, $fname );
		if ( !$res ) {
			return null;
		}
		if ( $res->numRows() == 0 ) {
			return false;
		}
		$info = array();
		foreach ( $res as $row ) {
			$info[] = $row->name;
		}
		return $info;
	}

	/**
	 * @param $table
	 * @param $index
	 * @param $fname string
	 * @return bool|null
	 */
	function indexUnique( $table, $index, $fname = 'DatabaseSqlite::indexUnique' ) {
		$row = $this->selectRow( 'sqlite_master', '*',
			array(
				'type' => 'index',
				'name' => $this->indexName( $index ),
			), $fname );
		if ( !$row || !isset( $row->sql ) ) {
			return null;
		}

		// $row->sql will be of the form CREATE [UNIQUE] INDEX ...
		$indexPos = strpos( $row->sql, 'INDEX' );
		if ( $indexPos === false ) {
			return null;
		}
		$firstPart = substr( $row->sql, 0, $indexPos );
		$options = explode( ' ', $firstPart );
		return in_array( 'UNIQUE', $options );
	}

	/**
	 * Filter the options used in SELECT statements
	 *
	 * @param $options array
	 *
	 * @return array
	 */
	function makeSelectOptions( $options ) {
		foreach ( $options as $k => $v ) {
			if ( is_numeric( $k ) && $v == 'FOR UPDATE' ) {
				$options[$k] = '';
			}
		}
		return parent::makeSelectOptions( $options );
	}

	/**
	 * @param $options array
	 * @return string
	 */
	function makeUpdateOptions( $options ) {
		$options = self::fixIgnore( $options );
		return parent::makeUpdateOptions( $options );
	}

	/**
	 * @param $options array
	 * @return array
	 */
	static function fixIgnore( $options ) {
		# SQLite uses OR IGNORE not just IGNORE
		foreach ( $options as $k => $v ) {
			if ( $v == 'IGNORE' ) {
				$options[$k] = 'OR IGNORE';
			}
		}
		return $options;
	}

	/**
	 * @param $options array
	 * @return string
	 */
	function makeInsertOptions( $options ) {
		$options = self::fixIgnore( $options );
		return parent::makeInsertOptions( $options );
	}

	/**
	 * Based on generic method (parent) with some prior SQLite-sepcific adjustments
	 * @return bool
	 */
	function insert( $table, $a, $fname = 'DatabaseSqlite::insert', $options = array() ) {
		if ( !count( $a ) ) {
			return true;
		}

		# SQLite can't handle multi-row inserts, so divide up into multiple single-row inserts
		if ( isset( $a[0] ) && is_array( $a[0] ) ) {
			$ret = true;
			foreach ( $a as $v ) {
				if ( !parent::insert( $table, $v, "$fname/multi-row", $options ) ) {
					$ret = false;
				}
			}
		} else {
			$ret = parent::insert( $table, $a, "$fname/single-row", $options );
		}

		return $ret;
	}

	/**
	 * @param $table
	 * @param $uniqueIndexes
	 * @param $rows
	 * @param $fname string
	 * @return bool|ResultWrapper
	 */
	function replace( $table, $uniqueIndexes, $rows, $fname = 'DatabaseSqlite::replace' ) {
		if ( !count( $rows ) ) return true;

		# SQLite can't handle multi-row replaces, so divide up into multiple single-row queries
		if ( isset( $rows[0] ) && is_array( $rows[0] ) ) {
			$ret = true;
			foreach ( $rows as $v ) {
				if ( !$this->nativeReplace( $table, $v, "$fname/multi-row" ) ) {
					$ret = false;
				}
			}
		} else {
			$ret = $this->nativeReplace( $table, $rows, "$fname/single-row" );
		}

		return $ret;
	}

	/**
	 * Returns the size of a text field, or -1 for "unlimited"
	 * In SQLite this is SQLITE_MAX_LENGTH, by default 1GB. No way to query it though.
	 *
	 * @return int
	 */
	function textFieldSize( $table, $field ) {
		return -1;
	}

	/**
	 * @return bool
	 */
	function unionSupportsOrderAndLimit() {
		return false;
	}

	/**
	 * @param $sqls
	 * @param $all
	 * @return string
	 */
	function unionQueries( $sqls, $all ) {
		$glue = $all ? ' UNION ALL ' : ' UNION ';
		return implode( $glue, $sqls );
	}

	/**
	 * @return bool
	 */
	function wasDeadlock() {
		return $this->lastErrno() == 5; // SQLITE_BUSY
	}

	/**
	 * @return bool
	 */
	function wasErrorReissuable() {
		return $this->lastErrno() ==  17; // SQLITE_SCHEMA;
	}

	/**
	 * @return bool
	 */
	function wasReadOnlyError() {
		return $this->lastErrno() == 8; // SQLITE_READONLY;
	}

	/**
	 * @return string wikitext of a link to the server software's web site
	 */
	public static function getSoftwareLink() {
		return "[http://sqlite.org/ SQLite]";
	}

	/**
	 * @return string Version information from the database
	 */
	function getServerVersion() {
		$ver = $this->mConn->getAttribute( PDO::ATTR_SERVER_VERSION );
		return $ver;
	}

	/**
	 * @return string wiki_User-friendly database information
	 */
	public function getServerInfo() {
		return wfMessage( self::getFulltextSearchModule() ? 'sqlite-has-fts' : 'sqlite-no-fts', $this->getServerVersion() )->text();
	}

	/**
	 * Get information about a given field
	 * Returns false if the field does not exist.
	 *
	 * @param $table string
	 * @param $field string
	 * @return SQLiteField|bool False on failure
	 */
	function fieldInfo( $table, $field ) {
		$tableName = $this->tableName( $table );
		$sql = 'PRAGMA table_info(' . $this->addQuotes( $tableName ) . ')';
		$res = $this->query( $sql, __METHOD__ );
		foreach ( $res as $row ) {
			if ( $row->name == $field ) {
				return new SQLiteField( $row, $tableName );
			}
		}
		return false;
	}

	protected function doBegin( $fname = '' ) {
		if ( $this->mTrxLevel == 1 ) {
			$this->commit( __METHOD__ );
		}
		$this->mConn->beginTransaction();
		$this->mTrxLevel = 1;
	}

	protected function doCommit( $fname = '' ) {
		if ( $this->mTrxLevel == 0 ) {
			return;
		}
		$this->mConn->commit();
		$this->mTrxLevel = 0;
	}

	protected function doRollback( $fname = '' ) {
		if ( $this->mTrxLevel == 0 ) {
			return;
		}
		$this->mConn->rollBack();
		$this->mTrxLevel = 0;
	}

	/**
	 * @param $s string
	 * @return string
	 */
	function strencode( $s ) {
		return substr( $this->addQuotes( $s ), 1, - 1 );
	}

	/**
	 * @param $b
	 * @return Blob
	 */
	function encodeBlob( $b ) {
		return new Blob( $b );
	}

	/**
	 * @param $b Blob|string
	 * @return string
	 */
	function decodeBlob( $b ) {
		if ( $b instanceof Blob ) {
			$b = $b->fetch();
		}
		return $b;
	}

	/**
	 * @param $s Blob|string
	 * @return string
	 */
	function addQuotes( $s ) {
		if ( $s instanceof Blob ) {
			return "x'" . bin2hex( $s->fetch() ) . "'";
		} else {
			return $this->mConn->quote( $s );
		}
	}

	/**
	 * @return string
	 */
	function buildLike() {
		$params = func_get_args();
		if ( count( $params ) > 0 && is_array( $params[0] ) ) {
			$params = $params[0];
		}
		return parent::buildLike( $params ) . "ESCAPE '\' ";
	}

	/**
	 * @return string
	 */
	public function getSearchEngine() {
		return "SearchSqlite";
	}

	/**
	 * No-op version of deadlockLoop
	 * @return mixed
	 */
	public function deadlockLoop( /*...*/ ) {
		$args = func_get_args();
		$function = array_shift( $args );
		return call_user_func_array( $function, $args );
	}

	/**
	 * @param $s string
	 * @return string
	 */
	protected function replaceVars( $s ) {
		$s = parent::replaceVars( $s );
		if ( preg_match( '/^\s*(CREATE|ALTER) TABLE/i', $s ) ) {
			// CREATE TABLE hacks to allow schema file sharing with MySQL

			// binary/varbinary column type -> blob
			$s = preg_replace( '/\b(var)?binary(\(\d+\))/i', 'BLOB', $s );
			// no such thing as unsigned
			$s = preg_replace( '/\b(un)?signed\b/i', '', $s );
			// INT -> INTEGER
			$s = preg_replace( '/\b(tiny|small|medium|big|)int(\s*\(\s*\d+\s*\)|\b)/i', 'INTEGER', $s );
			// floating point types -> REAL
			$s = preg_replace( '/\b(float|double(\s+precision)?)(\s*\(\s*\d+\s*(,\s*\d+\s*)?\)|\b)/i', 'REAL', $s );
			// varchar -> TEXT
			$s = preg_replace( '/\b(var)?char\s*\(.*?\)/i', 'TEXT', $s );
			// TEXT normalization
			$s = preg_replace( '/\b(tiny|medium|long)text\b/i', 'TEXT', $s );
			// BLOB normalization
			$s = preg_replace( '/\b(tiny|small|medium|long|)blob\b/i', 'BLOB', $s );
			// BOOL -> INTEGER
			$s = preg_replace( '/\bbool(ean)?\b/i', 'INTEGER', $s );
			// DATETIME -> TEXT
			$s = preg_replace( '/\b(datetime|timestamp)\b/i', 'TEXT', $s );
			// No ENUM type
			$s = preg_replace( '/\benum\s*\([^)]*\)/i', 'TEXT', $s );
			// binary collation type -> nothing
			$s = preg_replace( '/\bbinary\b/i', '', $s );
			// auto_increment -> autoincrement
			$s = preg_replace( '/\bauto_increment\b/i', 'AUTOINCREMENT', $s );
			// No explicit options
			$s = preg_replace( '/\)[^);]*(;?)\s*$/', ')\1', $s );
			// AUTOINCREMENT should immedidately follow PRIMARY KEY
			$s = preg_replace( '/primary key (.*?) autoincrement/i', 'PRIMARY KEY AUTOINCREMENT $1', $s );
		} elseif ( preg_match( '/^\s*CREATE (\s*(?:UNIQUE|FULLTEXT)\s+)?INDEX/i', $s ) ) {
			// No truncated indexes
			$s = preg_replace( '/\(\d+\)/', '', $s );
			// No FULLTEXT
			$s = preg_replace( '/\bfulltext\b/i', '', $s );
		}
		return $s;
	}

	/**
	 * Build a concatenation list to feed into a SQL query
	 *
	 * @param $stringList array
	 *
	 * @return string
	 */
	function buildConcat( $stringList ) {
		return '(' . implode( ') || (', $stringList ) . ')';
	}

	/**
	 * @throws MWException
	 * @param $oldName
	 * @param $newName
	 * @param $temporary bool
	 * @param $fname string
	 * @return bool|ResultWrapper
	 */
	function duplicateTableStructure( $oldName, $newName, $temporary = false, $fname = 'DatabaseSqlite::duplicateTableStructure' ) {
		$res = $this->query( "SELECT sql FROM sqlite_master WHERE tbl_name=" . $this->addQuotes( $oldName ) . " AND type='table'", $fname );
		$obj = $this->fetchObject( $res );
		if ( !$obj ) {
			throw new MWException( "Couldn't retrieve structure for table $oldName" );
		}
		$sql = $obj->sql;
		$sql = preg_replace( '/(?<=\W)"?' . preg_quote( trim( $this->addIdentifierQuotes( $oldName ), '"' ) ) . '"?(?=\W)/', $this->addIdentifierQuotes( $newName ), $sql, 1 );
		if ( $temporary ) {
			if ( preg_match( '/^\\s*CREATE\\s+VIRTUAL\\s+TABLE\b/i', $sql ) ) {
				wfDebug( "Table $oldName is virtual, can't create a temporary duplicate.\n" );
			} else {
				$sql = str_replace( 'CREATE TABLE', 'CREATE TEMPORARY TABLE', $sql );
			}
		}
		return $this->query( $sql, $fname );
	}


	/**
	 * List all tables on the database
	 *
	 * @param $prefix string Only show tables with this prefix, e.g. mw_
	 * @param $fname String: calling function name
	 *
	 * @return array
	 */
	function listTables( $prefix = null, $fname = 'DatabaseSqlite::listTables' ) {
		$result = $this->select(
			'sqlite_master',
			'name',
			"type='table'"
		);

		$endArray = array();

		foreach( $result as $table ) {
			$vars = get_object_vars($table);
			$table = array_pop( $vars );

			if( !$prefix || strpos( $table, $prefix ) === 0 ) {
				if ( strpos( $table, 'sqlite_' ) !== 0 ) {
					$endArray[] = $table;
				}

			}
		}

		return $endArray;
	}

} // end DatabaseSqlite class

/**
 * This class allows simple acccess to a SQLite database independently from main database settings
 * @ingroup Database
 */
class DatabaseSqliteStandalone extends DatabaseSqlite {
	public function __construct( $fileName, $flags = 0 ) {
		$this->mFlags = $flags;
		$this->tablePrefix( null );
		$this->openFile( $fileName );
	}
}

/**
 * @ingroup Database
 */
class SQLiteField implements Field {
	private $info, $tableName;
	function __construct( $info, $tableName ) {
		$this->info = $info;
		$this->tableName = $tableName;
	}

	function name() {
		return $this->info->name;
	}

	function tableName() {
		return $this->tableName;
	}

	function defaultValue() {
		if ( is_string( $this->info->dflt_value ) ) {
			// Typically quoted
			if ( preg_match( '/^\'(.*)\'$', $this->info->dflt_value ) ) {
				return str_replace( "''", "'", $this->info->dflt_value );
			}
		}
		return $this->info->dflt_value;
	}

	/**
	 * @return bool
	 */
	function isNullable() {
		return !$this->info->notnull;
	}

	function type() {
		return $this->info->type;
	}

} // end SQLiteField
