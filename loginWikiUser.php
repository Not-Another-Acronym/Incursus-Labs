<?php
	$old_cwd = getcwd();
	chdir("../w/");
	include("wikiGlobals.php");
	$wgCanonicalNamespaceNames = array();
	$haclgIP = "../w/";
	$IP = "../w/";
	if(!defined('MEDIAWIKI'))
		define('MEDIAWIKI', true);	
	set_include_path(get_include_path() . PATH_SEPARATOR . "/var/www/html/w" . PATH_SEPARATOR . "/var/www/html/phpBB");
	/*require_once("includes/AutoLoader.php");
	require_once("includes/Defines.php");
	require_once("includes/DefaultSettings.php");*/
    	if ( isset( $_SERVER['MW_COMPILED'] ) ) {
       		require_once ( 'core/includes/WebStart.php' );
		require_once ( 'core/includes/GlobalFunctions.php' );
	} else {
	        require_once ( 'includes/WebStart.php' );
		require_once ( 'includes/GlobalFunctions.php' );
	}
	$wgMemc = wfGetMainCache();
	$wgRequest = new WebRequest;
	$wgContLang = Language::factory( $wgLanguageCode );
	$wgContLang->initEncoding();
	$wgContLang->initContLang();
	$user = wiki_User::newFromSession();
   	if ( !$user->isAnon() ) {
    		$user->doLogout(); // Logout mismatched user.
   	}	
    	// If the login form returns NEED_TOKEN try once more with the right token
	$trycount = 0;
   	 $token = '';
    	$errormessage = '';
    	do {
    		$tryagain = false;
        	// Submit a fake login form to authenticate the user.
        	$params = new FauxRequest( array(
        	'wpName' => $_POST["naa_loginname"],
        	'wpPassword' => $_POST["naa_password"],
		'wpDomain' => '',
            	'wpLoginToken' => $token,
            	'wpRemember' => ''
        ) );
        // Authenticate user data will automatically create new users.
        $loginForm = new LoginForm( $params );
        $result = $loginForm->authenticateUserData();
        $session = RequestContext::getMain();
        $wgwiki_User = $session->getUser();
        switch ( $result ) {
            case LoginForm :: SUCCESS :
            	$wgwiki_User->setOption( 'rememberpassword', 1 );
                $wgwiki_User->setCookies();
                break;
            case LoginForm :: NEED_TOKEN:
                $token = $loginForm->getLoginToken();
                $tryagain = ( $trycount == 0 );
               break;
            case LoginForm :: WRONG_TOKEN:
                $errormessage = 'WrongToken';
                break;
            case LoginForm :: NO_NAME :
                $errormessage = 'NoName';
                break;
            case LoginForm :: ILLEGAL :
                $errormessage = 'Illegal';
                break;
            case LoginForm :: WRONG_PLUGIN_PASS :
                $errormessage = 'WrongPluginPass';
                break;
            case LoginForm :: NOT_EXISTS :
                $errormessage = 'NotExists';
                break;
            case LoginForm :: WRONG_PASS :
                $errormessage = 'WrongPass';
                break;
            case LoginForm :: EMPTY_PASS :
                $errormessage = 'EmptyPass';
                break;
            default:
                $errormessage = 'Unknown';
                break;
        }
		if ( $result != LoginForm::SUCCESS && $result != LoginForm::NEED_TOKEN ) {
        	error_log( 'Unexpected REMOTE_USER authentication failure. Login Error was:' . $errormessage );
			$tryagain = false;
   		}
       	$trycount++;
   } while ( $tryagain );
   $cookieToken = $wgwiki_User->mToken;
   $cookieUserID = $wgwiki_User->mId;
   $cookieUserName = $wgwiki_User->mName;
        chdir($old_cwd);
?>
