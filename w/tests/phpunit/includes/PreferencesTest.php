<?php

class PreferencesTest extends MediaWikiTestCase {
	/** Array of wiki_User objects */
	private $prefwiki_Users;
	private $context;

	function __construct() {
		parent::__construct();
		global $wgEnableEmail;

		$this->prefwiki_Users['noemail'] = new wiki_User;

		$this->prefwiki_Users['notauth'] = new wiki_User;
		$this->prefwiki_Users['notauth']
			->setEmail( 'noauth@example.org' );

		$this->prefwiki_Users['auth']    = new wiki_User;
		$this->prefwiki_Users['auth']
			->setEmail( 'noauth@example.org' );
		$this->prefwiki_Users['auth']
			->setEmailAuthenticationTimestamp( 1330946623 );

		$this->context = new RequestContext;
		$this->context->setTitle( Title::newFromText('PreferencesTest') );

		//some tests depends on email setting
		$wgEnableEmail = true;
	}

	/**
	 * Placeholder to verify bug 34302
	 * @covers Preferences::profilePreferences
	 */
	function testEmailFieldsWhenwiki_UserHasNoEmail() {
		$prefs = $this->prefsFor( 'noemail' );
		$this->assertArrayHasKey( 'cssclass',
			$prefs['emailaddress']
		);
		$this->assertEquals( 'mw-email-none', $prefs['emailaddress']['cssclass'] );
	}
	/**
	 * Placeholder to verify bug 34302
	 * @covers Preferences::profilePreferences
	 */
	function testEmailFieldsWhenwiki_UserEmailNotAuthenticated() {
		$prefs = $this->prefsFor( 'notauth' );
		$this->assertArrayHasKey( 'cssclass',
			$prefs['emailaddress']
		);
		$this->assertEquals( 'mw-email-not-authenticated', $prefs['emailaddress']['cssclass'] );
	}
	/**
	 * Placeholder to verify bug 34302
	 * @covers Preferences::profilePreferences
	 */
	function testEmailFieldsWhenwiki_UserEmailIsAuthenticated() {
		$prefs = $this->prefsFor( 'auth' );
		$this->assertArrayHasKey( 'cssclass',
			$prefs['emailaddress']
		);
		$this->assertEquals( 'mw-email-authenticated', $prefs['emailaddress']['cssclass'] );
	}

	/** Helper */
	function prefsFor( $user_key ) {
		$preferences = array();
		Preferences::profilePreferences(
			$this->prefwiki_Users[$user_key]
			, $this->context
			, $preferences
		);
		return $preferences;
	}
}
