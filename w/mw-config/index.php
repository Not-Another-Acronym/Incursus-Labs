<?php
/**
 * New version of MediaWiki web-based config/installation
 *
 * @file
 */

define( 'MW_CONFIG_CALLBACK', 'Installer::overrideConfig' );
define( 'MEDIAWIKI_INSTALL', true );

chdir( dirname( __DIR__ ) );
if ( isset( $_SERVER['MW_COMPILED'] ) ) {
	require ( 'core/includes/WebStart.php' );
} else {
	require( dirname( __DIR__ ) . '/includes/WebStart.php' );
}

wfInstallerMain();

function wfInstallerMain() {
	global $wgRequest, $wgLang, $wgMetaNamespace, $wgCanonicalNamespaceNames;

	$installer = InstallerOverrides::getWebInstaller( $wgRequest );

	if ( !$installer->startSession() ) {
		$installer->finish();
		exit;
	}

	$fingerprint = $installer->getFingerprint();
	if ( isset( $_SESSION['installData'][$fingerprint] ) ) {
		$session = $_SESSION['installData'][$fingerprint];
	} else {
		$session = array();
	}

	if ( !is_null( $wgRequest->getVal( 'uselang' ) ) ) {
		$langCode = $wgRequest->getVal( 'uselang' );
	} elseif ( isset( $session['settings']['_wiki_UserLang'] ) ) {
		$langCode = $session['settings']['_wiki_UserLang'];
	} else {
		$langCode = 'en';
	}
	$wgLang = Language::factory( $langCode );

	$installer->setParserLanguage( $wgLang );

	$wgMetaNamespace = $wgCanonicalNamespaceNames[NS_PROJECT];

	$session = $installer->execute( $session );

	$_SESSION['installData'][$fingerprint] = $session;

}
