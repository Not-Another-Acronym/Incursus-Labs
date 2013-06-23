<?php

class LanguageConverterTest extends MediaWikiLangTestCase {
	protected $lang = null;
	protected $lc = null;

	function setUp() {
		parent::setUp();
		global $wgMemc, $wgRequest, $wgwiki_User, $wgContLang;

		$wgwiki_User = new wiki_User;
		$wgRequest = new FauxRequest( array() );
		$wgMemc = new EmptyBagOStuff;
		$wgContLang = Language::factory( 'tg' );
		$this->lang = new LanguageToTest();
		$this->lc = new TestConverter( $this->lang, 'tg',
									   array( 'tg', 'tg-latn' ) );
	}

	function tearDown() {
		global $wgMemc;
		unset( $wgMemc );
		unset( $this->lc );
		unset( $this->lang );
		parent::tearDown();
	}

	function testGetPreferredVariantDefaults() {
		$this->assertEquals( 'tg', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantHeaders() {
		global $wgRequest;
		$wgRequest->setHeader( 'Accept-Language', 'tg-latn' );

		$this->assertEquals( 'tg-latn', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantHeaderWeight() {
		global $wgRequest;
		$wgRequest->setHeader( 'Accept-Language', 'tg;q=1' );

		$this->assertEquals( 'tg', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantHeaderWeight2() {
		global $wgRequest;
		$wgRequest->setHeader( 'Accept-Language', 'tg-latn;q=1' );

		$this->assertEquals( 'tg-latn', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantHeaderMulti() {
		global $wgRequest;
		$wgRequest->setHeader( 'Accept-Language', 'en, tg-latn;q=1' );

		$this->assertEquals( 'tg-latn', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantwiki_UserOption() {
		global $wgwiki_User;

		$wgwiki_User = new wiki_User;
		$wgwiki_User->load(); // from 'defaults'
		$wgwiki_User->mId = 1;
		$wgwiki_User->mDataLoaded = true;
		$wgwiki_User->mOptionsLoaded = true;
		$wgwiki_User->setOption( 'variant', 'tg-latn' );

		$this->assertEquals( 'tg-latn', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantHeaderwiki_UserVsUrl() {
		global $wgRequest, $wgwiki_User, $wgContLang;

		$wgContLang = Language::factory( 'tg-latn' );
		$wgRequest->setVal( 'variant', 'tg' );
		$wgwiki_User = wiki_User::newFromId( "admin" );
		$wgwiki_User->setId( 1 );
		$wgwiki_User->mFrom = 'defaults';
		$wgwiki_User->mOptionsLoaded = true;
		$wgwiki_User->setOption( 'variant', 'tg-latn' ); // The user's data is ignored
												  // because the variant is set in the URL.
		$this->assertEquals( 'tg', $this->lc->getPreferredVariant() );
	}


	function testGetPreferredVariantDefaultLanguageVariant() {
		global $wgDefaultLanguageVariant;

		$wgDefaultLanguageVariant = 'tg-latn';
		$this->assertEquals( 'tg-latn', $this->lc->getPreferredVariant() );
	}

	function testGetPreferredVariantDefaultLanguageVsUrlVariant() {
		global $wgDefaultLanguageVariant, $wgRequest, $wgContLang;

		$wgContLang = Language::factory( 'tg-latn' );
		$wgDefaultLanguageVariant = 'tg';
		$wgRequest->setVal( 'variant', null );
		$this->assertEquals( 'tg', $this->lc->getPreferredVariant() );
	}
}

/**
 * Test converter (from Tajiki to latin orthography)
 */
class TestConverter extends LanguageConverter {
	private $table = array(
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
	);

	function loadDefaultTables() {
		$this->mTables = array(
			'tg-latn' => new ReplacementArray( $this->table ),
			'tg'      => new ReplacementArray()
		);
	}

}

class LanguageToTest extends Language {
	function __construct() {
		parent::__construct();
		$variants = array( 'tg', 'tg-latn' );
		$this->mConverter = new TestConverter( $this, 'tg', $variants );
	}
}
