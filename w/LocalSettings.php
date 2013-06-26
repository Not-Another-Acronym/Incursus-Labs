<?php
# This file was automatically generated by the MediaWiki 1.20.3
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "Not Another Acronym";
$wgMetaNamespace = "Not_Another_Acronym";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/w";
$wgArticlePath = "/wiki/$1";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "https://naa.waterfoul.net";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "https://image.eveonline.com/Corporation/98176508_128.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnablewiki_UserEmail  = true; # UPO

$wgEmergencyContact = "waterfoul@gmail.com";
$wgPasswordSender   = "waterfoul@gmail.com";

$wgEnotifwiki_UserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "naa_wiki";
$wgDBuser           = "naa";
$wgDBpassword       = "CvVTWbwdaqUsV78L";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "ca63c00f17097540b7fee26f78130eb72cb978fc2a06b3b030cc83c243fbdf02";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "0e920b7e81092be7";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = 512;



# End of automatically generated settings.
# Add more configuration options below.

// PHPBB User Database Plugin. (Requires MySQL Database)
require_once getenv('MW_INSTALL_PATH') . 'extensions/Auth_phpBB.php';
 
$wgAuth_Config = array(); // Clean.
 
$wgAuth_Config['WikiGroupName'] = '';       // Name of your PHPBB group
                                                // users need to be a member
                                                // of to use the wiki. (i.e. wiki)
                                                // This can also be set to an array 
                                                // of group names to use more then 
                                                // one. (ie. 
                                                // $wgAuth_Config['WikiGroupName'][] = 'Wiki';
                                                // $wgAuth_Config['WikiGroupName'][] = 'Wiki2';
                                                // or
                                                // $wgAuth_Config['WikiGroupName'] = array('Wiki', 'Wiki2');
                                                // )
 
$wgAuth_Config['UseWikiGroup'] = false;          // This tells the Plugin to require
                                                // a user to be a member of the above
                                                // phpBB group. (ie. wiki) Setting
                                                // this to false will let any phpBB
                                                // user edit the wiki.
 
$wgAuth_Config['UseExtDatabase'] = true;       // This tells the plugin that the phpBB tables
                                                // are in a different database then the wiki.
                                                // The default settings is false.
 
$wgAuth_Config['MySQL_Host']        = 'localhost';      // phpBB MySQL Host Name.
$wgAuth_Config['MySQL_Username']    = 'naa';       // phpBB MySQL Username.
$wgAuth_Config['MySQL_Password']    = 'CvVTWbwdaqUsV78L';       // phpBB MySQL Password.
$wgAuth_Config['MySQL_Database']    = 'naa_phpBB';       // phpBB MySQL Database Name.
 
$wgAuth_Config['UserTB']         = 'phpbb_users';       // Name of your PHPBB user table. (i.e. phpbb_users)
$wgAuth_Config['GroupsTB']       = 'phpbb_groups';      // Name of your PHPBB groups table. (i.e. phpbb_groups)
$wgAuth_Config['User_GroupTB']   = 'phpbb_user_group';  // Name of your PHPBB user_group table. (i.e. phpbb_user_group)
$wgAuth_Config['PathToPHPBB']    = '../phpBB/';         // Path from this file to your phpBB install. Must end with '/'.
 
// Local
$wgAuth_Config['LoginMessage']   = '<b>You need a phpBB account to login.</b><br /><a href="' . $wgAuth_Config['PathToPHPBB'] .
                                   'ucp.php?mode=register">Click here to create an account.</a>'; // Localize this message.
$wgAuth_Config['NoWikiError']    = 'You are not a member of the required phpBB group.'; // Localize this message.
 
$wgAuth = new Auth_phpBB($wgAuth_Config);     // Auth_phpBB Plugin.

require_once("$IP/extensions/Realnames/Realnames.php");

require_once('extensions/IntraACL/includes/HACL_Initialize.php');
enableIntraACL();

$wgMainCacheType = CACHE_ACCEL;


// see http://www.mediawiki.org/wiki/Manual:Hooks/SpecialPage_initList
// and http://www.mediawiki.org/w/Manual:Special_pages
// and http://lists.wikimedia.org/pipermail/mediawiki-l/2009-June/031231.html
// disable login and logout functions for all users
function LessSpecialPages(&$list) {
        unset( $list['Userlogout'] );
        unset( $list['Userlogin'] );
        return true;
}
$wgHooks['SpecialPage_initList'][]='LessSpecialPages';
 
// http://www.mediawiki.org/wiki/Extension:Windows_NTLM_LDAP_Auto_Auth
// remove login and logout buttons for all users
function StripLogin(&$personal_urls, &$wgTitle) {  
        unset( $personal_urls["login"] );
        unset( $personal_urls["logout"] );
        unset( $personal_urls['anonlogin'] );
        return true;
}
$wgHooks['PersonalUrls'][] = 'StripLogin';

require_once('extensions/EveShips.php');
$wgShowExceptionDetails = true;
$wgUseAjax = true;
require_once( "$IP/extensions/CategoryTree/CategoryTree.php" );
$wgCategoryTreeCategoryPageMode = CT_MODE_ALL;
?>
