<?php
	define( 'MW_NO_SETUP', true );
	putenv("MW_INSTALL_PATH=../w/");
	define( 'MW_API', true );
    if ( isset( $_SERVER['MW_COMPILED'] ) ) {
        require ( 'core/includes/WebStart.php' );
		require ( 'core/includes/GlobalFunctions.php' );
	} else {
        require ( '../w/includes/WebStart.php' );
		require ( '../w/includes/GlobalFunctions.php' );
	}
	$wgRequest = new WebRequest;
	$wgMemc = wfGetMainCache();
	$messageMemc = wfGetMessageCacheStorage();
	$parserMemc = wfGetParserCacheStorage();
	$wgLangConvMemc = wfGetLangConverterCacheStorage();
	$wgContLang = Language::factory( $wgLanguageCode );
	$wgContLang->initEncoding();
	$wgContLang->initContLang();
	$wgCanonicalNamespaceNames = array(
		NS_MEDIA            => 'Media',
		NS_SPECIAL          => 'Special',
		NS_TALK             => 'Talk',
		NS_USER             => 'User',
		NS_USER_TALK        => 'User_talk',
		NS_PROJECT          => 'Project',
		NS_PROJECT_TALK     => 'Project_talk',
		NS_FILE             => 'File',
		NS_FILE_TALK        => 'File_talk',
		NS_MEDIAWIKI        => 'MediaWiki',
		NS_MEDIAWIKI_TALK   => 'MediaWiki_talk',
		NS_TEMPLATE         => 'Template',
		NS_TEMPLATE_TALK    => 'Template_talk',
		NS_HELP             => 'Help',
		NS_HELP_TALK        => 'Help_talk',
		NS_CATEGORY         => 'Category',
		NS_CATEGORY_TALK    => 'Category_talk',
	);
	$user = User::newFromSession();
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
        $wgUser = $session->getUser();
        switch ( $result ) {
        	case LoginForm :: SUCCESS :
            	$wgUser->setOption( 'rememberpassword', 1 );
                $wgUser->setCookies();
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
   $cookieToken = $wgUser->mToken;
   $cookieUserID = $wgUser->mId;
   $cookieUserName = $wgUser->mName;

?>
