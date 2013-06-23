<?php
	define( 'MW_API', true );
    if ( isset( $_SERVER['MW_COMPILED'] ) ) {
        require ( 'core/includes/WebStart.php' );
	} else {
        require ( 'includes/WebStart.php' );
	}
	wfSetupSession();
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
        	'wpName' => $user,
            'wpPassword' => $pass,
            'wpDomain' => '',
            'wpLoginToken' => $token,
            'wpRemember' => ''
        ) );
        // Authenticate user data will automatically create new users.
        $loginForm = new LoginForm( $params );
        $result = $loginForm->authenticateUserData();
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
   		}
       	$trycount++;
   } while ( $tryagain );
?>
