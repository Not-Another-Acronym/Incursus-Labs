<?php

/**
 * @group Database
 */
class TitlePermissionTest extends MediaWikiLangTestCase {
	protected $title;

	/**
	 * @var wiki_User
	 */
	protected $user, $anonwiki_User, $userwiki_User, $altwiki_User;

	/**
	 * @var string
	 */
	protected $userName, $altwiki_UserName;

	function setUp() {
		global $wgLocaltimezone, $wgLocalTZoffset, $wgMemc, $wgContLang, $wgLang;
		parent::setUp();

		if(!$wgMemc) {
			$wgMemc = new EmptyBagOStuff;
		}
		$wgContLang = $wgLang = Language::factory( 'en' );

		$this->userName = "wiki_Useruser";
		$this->altwiki_UserName = "Altuseruser";
		date_default_timezone_set( $wgLocaltimezone );
		$wgLocalTZoffset = date( "Z" ) / 60;

		$this->title = Title::makeTitle( NS_MAIN, "Main Page" );
		if ( !isset( $this->userwiki_User ) || !( $this->userwiki_User instanceOf wiki_User ) ) {
			$this->userwiki_User = wiki_User::newFromName( $this->userName );

			if ( !$this->userwiki_User->getID() ) {
				$this->userwiki_User = wiki_User::createNew( $this->userName, array(
					"email" => "test@example.com",
					"real_name" => "Test wiki_User" ) );
				$this->userwiki_User->load();
			}

			$this->altwiki_User = wiki_User::newFromName( $this->altwiki_UserName );
			if ( !$this->altwiki_User->getID() ) {
				$this->altwiki_User = wiki_User::createNew( $this->altwiki_UserName, array(
					"email" => "alttest@example.com",
					"real_name" => "Test wiki_User Alt" ) );
				$this->altwiki_User->load();
			}

			$this->anonwiki_User = wiki_User::newFromId( 0 );

			$this->user = $this->userwiki_User;
		}
	}

	function tearDown() {
		parent::tearDown();
	}

	function setwiki_UserPerm( $perm ) {
		// Setting member variables is evil!!!

		if ( is_array( $perm ) ) {
			$this->user->mRights = $perm;
		} else {
			$this->user->mRights = array( $perm );
		}
	}

	function setTitle( $ns, $title = "Main_Page" ) {
		$this->title = Title::makeTitle( $ns, $title );
	}

	function setwiki_User( $userName = null ) {
		if ( $userName === 'anon' ) {
			$this->user = $this->anonwiki_User;
		} elseif ( $userName === null || $userName === $this->userName ) {
			$this->user = $this->userwiki_User;
		} else {
			$this->user = $this->altwiki_User;
		}

		global $wgwiki_User;
		$wgwiki_User = $this->user;
	}

	function testQuickPermissions() {
		global $wgContLang;
		$prefix = $wgContLang->getFormattedNsText( NS_PROJECT );

		$this->setwiki_User( 'anon' );
		$this->setTitle( NS_TALK );
		$this->setwiki_UserPerm( "createtalk" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array(), $res );

		$this->setTitle( NS_TALK );
		$this->setwiki_UserPerm( "createpage" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( "nocreatetext" ) ), $res );

		$this->setTitle( NS_TALK );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( 'nocreatetext' ) ), $res );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( "createpage" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( "createtalk" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( 'nocreatetext' ) ), $res );

		$this->setwiki_User( $this->userName );
		$this->setTitle( NS_TALK );
		$this->setwiki_UserPerm( "createtalk" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setTitle( NS_TALK );
		$this->setwiki_UserPerm( "createpage" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( 'nocreate-loggedin' ) ), $res );

		$this->setTitle( NS_TALK );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( 'nocreate-loggedin' ) ), $res );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( "createpage" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( "createtalk" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( 'nocreate-loggedin' ) ), $res );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'create', $this->user );
		$this->assertEquals( array( array( 'nocreate-loggedin' ) ), $res );

		$this->setwiki_User( 'anon' );
		$this->setTitle( NS_USER, $this->userName . '' );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'cant-move-user-page' ), array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '/subpage' );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '' );
		$this->setwiki_UserPerm( "move-rootuserpages" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '/subpage' );
		$this->setwiki_UserPerm( "move-rootuserpages" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '' );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'cant-move-user-page' ), array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '/subpage' );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '' );
		$this->setwiki_UserPerm( "move-rootuserpages" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_USER, $this->userName . '/subpage' );
		$this->setwiki_UserPerm( "move-rootuserpages" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setwiki_User( $this->userName );
		$this->setTitle( NS_FILE, "img.png" );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenotallowedfile' ), array( 'movenotallowed' ) ), $res );

		$this->setTitle( NS_FILE, "img.png" );
		$this->setwiki_UserPerm( "movefile" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenotallowed' ) ), $res );

		$this->setwiki_User( 'anon' );
		$this->setTitle( NS_FILE, "img.png" );
		$this->setwiki_UserPerm( "" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenotallowedfile' ), array( 'movenologintext' ) ), $res );

		$this->setTitle( NS_FILE, "img.png" );
		$this->setwiki_UserPerm( "movefile" );
		$res = $this->title->getUserPermissionsErrors( 'move', $this->user );
		$this->assertEquals( array( array( 'movenologintext' ) ), $res );

		$this->setwiki_User( $this->userName );
		$this->setwiki_UserPerm( "move" );
		$this->runGroupPermissions( 'move', array( array( 'movenotallowedfile' ) ) );

		$this->setwiki_UserPerm( "" );
		$this->runGroupPermissions( 'move', array( array( 'movenotallowedfile' ), array( 'movenotallowed' ) ) );

		$this->setwiki_User( 'anon' );
		$this->setwiki_UserPerm( "move" );
		$this->runGroupPermissions( 'move', array( array( 'movenotallowedfile' ) ) );

		$this->setwiki_UserPerm( "" );
		$this->runGroupPermissions( 'move', array( array( 'movenotallowedfile' ), array( 'movenotallowed' ) ),
			array( array( 'movenotallowedfile' ), array( 'movenologintext' ) ) );

		$this->setTitle( NS_MAIN );
		$this->setwiki_User( 'anon' );
		$this->setwiki_UserPerm( "move" );
		$this->runGroupPermissions( 'move', array(  ) );

		$this->setwiki_UserPerm( "" );
		$this->runGroupPermissions( 'move', array( array( 'movenotallowed' ) ),
			array( array( 'movenologintext' ) ) );

		$this->setwiki_User( $this->userName );
		$this->setwiki_UserPerm( "" );
		$this->runGroupPermissions( 'move', array( array( 'movenotallowed' ) ) );

		$this->setwiki_UserPerm( "move" );
		$this->runGroupPermissions( 'move', array( ) );

		$this->setwiki_User( 'anon' );
		$this->setwiki_UserPerm( 'move' );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setwiki_UserPerm( '' );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( array( 'movenotallowed' ) ), $res );

		$this->setTitle( NS_USER );
		$this->setwiki_User( $this->userName );
		$this->setwiki_UserPerm( array( "move", "move-rootuserpages" ) );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setwiki_UserPerm( "move" );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( array( 'cant-move-to-user-page' ) ), $res );

		$this->setwiki_User( 'anon' );
		$this->setwiki_UserPerm( array( "move", "move-rootuserpages" ) );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setTitle( NS_USER, "wiki_User/subpage" );
		$this->setwiki_UserPerm( array( "move", "move-rootuserpages" ) );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setwiki_UserPerm( "move" );
		$res = $this->title->getUserPermissionsErrors( 'move-target', $this->user );
		$this->assertEquals( array( ), $res );

		$this->setwiki_User( 'anon' );
		$check = array( 'edit' => array( array( array( 'badaccess-groups', "*, [[$prefix:wiki_Users|wiki_Users]]", 2 ) ),
										 array( array( 'badaccess-group0' ) ),
										 array( ), true ),
						'protect' => array( array( array( 'badaccess-groups', "[[$prefix:Administrators|Administrators]]", 1 ), array( 'protect-cantedit' ) ),
											array( array( 'badaccess-group0' ), array( 'protect-cantedit' ) ),
											array( array( 'protect-cantedit' ) ), false ),
						'' => array( array( ), array( ), array( ), true ) );
		global $wgwiki_User;
		$wgwiki_User = $this->user;
		foreach ( array( "edit", "protect", "" ) as $action ) {
			$this->setwiki_UserPerm( null );
			$this->assertEquals( $check[$action][0],
				$this->title->getUserPermissionsErrors( $action, $this->user, true ) );

			global $wgGroupPermissions;
			$old = $wgGroupPermissions;
			$wgGroupPermissions = array();

			$this->assertEquals( $check[$action][1],
				$this->title->getUserPermissionsErrors( $action, $this->user, true ) );
			$wgGroupPermissions = $old;

			$this->setwiki_UserPerm( $action );
			$this->assertEquals( $check[$action][2],
				$this->title->getUserPermissionsErrors( $action, $this->user, true ) );

			$this->setwiki_UserPerm( $action );
			$this->assertEquals( $check[$action][3],
				$this->title->userCan( $action, true ) );
			$this->assertEquals( $check[$action][3],
				$this->title->quickwiki_UserCan( $action ) );

			# count( wiki_User::getGroupsWithPermissions( $action ) ) < 1
		}
	}

	function runGroupPermissions( $action, $result, $result2 = null ) {
		global $wgGroupPermissions;

		if ( $result2 === null ) $result2 = $result;

		$wgGroupPermissions['autoconfirmed']['move'] = false;
		$wgGroupPermissions['user']['move'] = false;
		$res = $this->title->getUserPermissionsErrors( $action, $this->user );
		$this->assertEquals( $result, $res );

		$wgGroupPermissions['autoconfirmed']['move'] = true;
		$wgGroupPermissions['user']['move'] = false;
		$res = $this->title->getUserPermissionsErrors( $action, $this->user );
		$this->assertEquals( $result2, $res );

		$wgGroupPermissions['autoconfirmed']['move'] = true;
		$wgGroupPermissions['user']['move'] = true;
		$res = $this->title->getUserPermissionsErrors( $action, $this->user );
		$this->assertEquals( $result2, $res );

		$wgGroupPermissions['autoconfirmed']['move'] = false;
		$wgGroupPermissions['user']['move'] = true;
		$res = $this->title->getUserPermissionsErrors( $action, $this->user );
		$this->assertEquals( $result2, $res );
	}

	function testSpecialsAndNSPermissions() {
		$this->setwiki_User( $this->userName );
		global $wgwiki_User;
		$wgwiki_User = $this->user;

		$this->setTitle( NS_SPECIAL );

		$this->assertEquals( array( array( 'badaccess-group0' ), array( 'ns-specialprotected' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );
		$this->assertEquals( array( array( 'badaccess-group0' ) ),
							 $this->title->getUserPermissionsErrors( 'execute', $this->user ) );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( 'bogus' );
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );

		$this->setTitle( NS_MAIN );
		$this->setwiki_UserPerm( '' );
		$this->assertEquals( array( array( 'badaccess-group0' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );

		global $wgNamespaceProtection;
		$wgNamespaceProtection[NS_USER] = array ( 'bogus' );
		$this->setTitle( NS_USER );
		$this->setwiki_UserPerm( '' );
		$this->assertEquals( array( array( 'badaccess-group0' ), array( 'namespaceprotected', 'wiki_User' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );

		$this->setTitle( NS_MEDIAWIKI );
		$this->setwiki_UserPerm( 'bogus' );
		$this->assertEquals( array( array( 'protectedinterface' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );

		$this->setTitle( NS_MEDIAWIKI );
		$this->setwiki_UserPerm( 'bogus' );
		$this->assertEquals( array( array( 'protectedinterface' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );

		$wgNamespaceProtection = null;
		$this->setwiki_UserPerm( 'bogus' );
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );
		$this->assertEquals( true,
							 $this->title->userCan( 'bogus' ) );

		$this->setwiki_UserPerm( '' );
		$this->assertEquals( array( array( 'badaccess-group0' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );
		$this->assertEquals( false,
							 $this->title->userCan( 'bogus' ) );
	}

	function testCssAndJavascriptPermissions() {
		$this->setwiki_User( $this->userName );
		global $wgwiki_User;
		$wgwiki_User = $this->user;

		$this->setTitle( NS_USER, $this->altwiki_UserName . '/test.js' );
		$this->runCSSandJSPermissions(
			array( array( 'badaccess-group0' ), array( 'customjsprotected' ) ),
			array( array( 'badaccess-group0' ), array( 'customjsprotected' ) ),
			array( array( 'badaccess-group0' ) ) );

		$this->setTitle( NS_USER, $this->altwiki_UserName . '/test.css' );
		$this->runCSSandJSPermissions(
			array( array( 'badaccess-group0' ), array( 'customcssprotected' ) ),
			array( array( 'badaccess-group0' ) ),
			array( array( 'badaccess-group0' ),  array( 'customcssprotected' ) ) );

		$this->setTitle( NS_USER, $this->altwiki_UserName . '/tempo' );
		$this->runCSSandJSPermissions(
			array( array( 'badaccess-group0' ) ),
			array( array( 'badaccess-group0' ) ),
			array( array( 'badaccess-group0' ) ) );
	}

	function runCSSandJSPermissions( $result0, $result1, $result2 ) {
		$this->setwiki_UserPerm( '' );
		$this->assertEquals( $result0,
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );

		$this->setwiki_UserPerm( 'editusercss' );
		$this->assertEquals( $result1,
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );

		$this->setwiki_UserPerm( 'edituserjs' );
		$this->assertEquals( $result2,
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );

		$this->setwiki_UserPerm( 'editusercssjs' );
		$this->assertEquals( array( array( 'badaccess-group0' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );

		$this->setwiki_UserPerm( array( 'edituserjs', 'editusercss' ) );
		$this->assertEquals( array( array( 'badaccess-group0' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );
	}

	function testPageRestrictions() {
		global $wgwiki_User, $wgContLang;

		$prefix = $wgContLang->getFormattedNsText( NS_PROJECT );

		$wgwiki_User = $this->user;
		$this->setTitle( NS_MAIN );
		$this->title->mRestrictionsLoaded = true;
		$this->setwiki_UserPerm( "edit" );
		$this->title->mRestrictions = array( "bogus" => array( 'bogus', "sysop", "protect", "" ) );

		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'edit',
																	 $this->user ) );

		$this->assertEquals( true,
							 $this->title->quickwiki_UserCan( 'edit' ) );
		$this->title->mRestrictions = array( "edit" => array( 'bogus', "sysop", "protect", "" ),
										   "bogus" => array( 'bogus', "sysop", "protect", "" ) );

		$this->assertEquals( array( array( 'badaccess-group0' ),
									array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );
		$this->assertEquals( array( array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'edit',
																	 $this->user ) );
		$this->setwiki_UserPerm( "" );
		$this->assertEquals( array( array( 'badaccess-group0' ),
									array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );
		$this->assertEquals( array( array( 'badaccess-groups', "*, [[$prefix:wiki_Users|wiki_Users]]", 2 ),
									array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'edit',
																	 $this->user ) );
		$this->setwiki_UserPerm( array( "edit", "editprotected" ) );
		$this->assertEquals( array( array( 'badaccess-group0' ),
									array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );
		$this->assertEquals( array(  ),
							 $this->title->getUserPermissionsErrors( 'edit',
																	 $this->user ) );
		$this->title->mCascadeRestriction = true;
		$this->assertEquals( false,
							 $this->title->quickwiki_UserCan( 'bogus' ) );
		$this->assertEquals( false,
							 $this->title->quickwiki_UserCan( 'edit' ) );
		$this->assertEquals( array( array( 'badaccess-group0' ),
									array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'bogus',
																	 $this->user ) );
		$this->assertEquals( array( array( 'protectedpagetext', 'bogus' ),
									array( 'protectedpagetext', 'protect' ),
									array( 'protectedpagetext', 'protect' ) ),
							 $this->title->getUserPermissionsErrors( 'edit',
																	 $this->user ) );
	}

	function testCascadingSourcesRestrictions() {
		global $wgwiki_User;
		$wgwiki_User = $this->user;
		$this->setTitle( NS_MAIN, "test page" );
		$this->setwiki_UserPerm( array( "edit", "bogus" ) );

		$this->title->mCascadeSources = array( Title::makeTitle( NS_MAIN, "Bogus" ), Title::makeTitle( NS_MAIN, "UnBogus" ) );
		$this->title->mCascadingRestrictions = array( "bogus" => array( 'bogus', "sysop", "protect", "" ) );

		$this->assertEquals( false,
							 $this->title->userCan( 'bogus' ) );
		$this->assertEquals( array( array( "cascadeprotected", 2, "* [[:Bogus]]\n* [[:UnBogus]]\n" ),
									array( "cascadeprotected", 2, "* [[:Bogus]]\n* [[:UnBogus]]\n" ) ),
							 $this->title->getUserPermissionsErrors( 'bogus', $this->user ) );

		$this->assertEquals( true,
							 $this->title->userCan( 'edit' ) );
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'edit', $this->user ) );

	}

	function testActionPermissions() {
		global $wgwiki_User;
		$wgwiki_User = $this->user;

		$this->setwiki_UserPerm( array( "createpage" ) );
		$this->setTitle( NS_MAIN, "test page" );
		$this->title->mTitleProtection['pt_create_perm'] = '';
		$this->title->mTitleProtection['pt_user'] = $this->user->getID();
		$this->title->mTitleProtection['pt_expiry'] = wfGetDB( DB_SLAVE )->getInfinity();
		$this->title->mTitleProtection['pt_reason'] = 'test';
		$this->title->mCascadeRestriction = false;

		$this->assertEquals( array( array( 'titleprotected', 'wiki_Useruser', 'test' ) ),
							 $this->title->getUserPermissionsErrors( 'create', $this->user ) );
		$this->assertEquals( false,
							 $this->title->userCan( 'create' ) );

		$this->title->mTitleProtection['pt_create_perm'] = 'sysop';
		$this->setwiki_UserPerm( array( 'createpage', 'protect' ) );
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'create', $this->user ) );
		$this->assertEquals( true,
							 $this->title->userCan( 'create' ) );


		$this->setwiki_UserPerm( array( 'createpage' ) );
		$this->assertEquals( array( array( 'titleprotected', 'wiki_Useruser', 'test' ) ),
							 $this->title->getUserPermissionsErrors( 'create', $this->user ) );
		$this->assertEquals( false,
							 $this->title->userCan( 'create' ) );

		$this->setTitle( NS_MEDIA, "test page" );
		$this->setwiki_UserPerm( array( "move" ) );
		$this->assertEquals( false,
							 $this->title->userCan( 'move' ) );
		$this->assertEquals( array( array( 'immobile-source-namespace', 'Media' ) ),
							 $this->title->getUserPermissionsErrors( 'move', $this->user ) );

		$this->setTitle( NS_MAIN, "test page" );
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'move', $this->user ) );
		$this->assertEquals( true,
							 $this->title->userCan( 'move' ) );

		$this->title->mInterwiki = "no";
		$this->assertEquals( array( array( 'immobile-source-page' ) ),
							 $this->title->getUserPermissionsErrors( 'move', $this->user ) );
		$this->assertEquals( false,
							 $this->title->userCan( 'move' ) );

		$this->setTitle( NS_MEDIA, "test page" );
		$this->assertEquals( false,
							 $this->title->userCan( 'move-target' ) );
		$this->assertEquals( array( array( 'immobile-target-namespace', 'Media' ) ),
							 $this->title->getUserPermissionsErrors( 'move-target', $this->user ) );

		$this->setTitle( NS_MAIN, "test page" );
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'move-target', $this->user ) );
		$this->assertEquals( true,
							 $this->title->userCan( 'move-target' ) );

		$this->title->mInterwiki = "no";
		$this->assertEquals( array( array( 'immobile-target-page' ) ),
							 $this->title->getUserPermissionsErrors( 'move-target', $this->user ) );
		$this->assertEquals( false,
							 $this->title->userCan( 'move-target' ) );

	}

	function testwiki_UserBlock() {
		global $wgwiki_User, $wgEmailConfirmToEdit, $wgEmailAuthentication;
		$wgEmailConfirmToEdit = true;
		$wgEmailAuthentication = true;
		$wgwiki_User = $this->user;

		$this->setwiki_UserPerm( array( "createpage", "move" ) );
		$this->setTitle( NS_MAIN, "test page" );

		# $short
		$this->assertEquals( array( array( 'confirmedittext' ) ),
							 $this->title->getUserPermissionsErrors( 'move-target', $this->user ) );
		$wgEmailConfirmToEdit = false;
		$this->assertEquals( true, $this->title->userCan( 'move-target' ) );

		# $wgEmailConfirmToEdit && !$user->isEmailConfirmed() && $action != 'createaccount'
		$this->assertEquals( array( ),
							 $this->title->getUserPermissionsErrors( 'move-target',
			$this->user ) );

		global $wgLang;
		$prev = time();
		$now = time() + 120;
		$this->user->mBlockedby = $this->user->getId();
		$this->user->mBlock = new Block( '127.0.8.1', 0, $this->user->getId(),
										'no reason given', $prev + 3600, 1, 0 );
		$this->user->mBlock->mTimestamp = 0;
		$this->assertEquals( array( array( 'autoblockedtext',
			'[[wiki_User:wiki_Useruser|wiki_Useruser]]', 'no reason given', '127.0.0.1',
			'wiki_Useruser', null, 'infinite', '127.0.8.1',
			$wgLang->timeanddate( wfTimestamp( TS_MW, $prev ), true ) ) ),
			$this->title->getUserPermissionsErrors( 'move-target',
			$this->user ) );

		$this->assertEquals( false, $this->title->userCan( 'move-target' ) );
		// quickwiki_UserCan should ignore user blocks
		$this->assertEquals( true, $this->title->quickwiki_UserCan( 'move-target' ) );

		global $wgLocalTZoffset;
		$wgLocalTZoffset = -60;
		$this->user->mBlockedby = $this->user->getName();
		$this->user->mBlock = new Block( '127.0.8.1', 0, 1, 'no reason given', $now, 0, 10 );
		$this->assertEquals( array( array( 'blockedtext',
			'[[wiki_User:wiki_Useruser|wiki_Useruser]]', 'no reason given', '127.0.0.1',
			'wiki_Useruser', null, '23:00, 31 December 1969', '127.0.8.1',
			$wgLang->timeanddate( wfTimestamp( TS_MW, $now ), true ) ) ),
			$this->title->getUserPermissionsErrors( 'move-target', $this->user ) );

		# $action != 'read' && $action != 'createaccount' && $user->isBlockedFrom( $this )
		#   $user->blockedFor() == ''
		#   $user->mBlock->mExpiry == 'infinity'
	}
}
