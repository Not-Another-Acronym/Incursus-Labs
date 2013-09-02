<?php
	if(!defined("ROOT_PATH"))
        {
                $location = explode("/", dirname($_SERVER['PHP_SELF']));
                $path = "";
                foreach($location as $loc)
                {
                        if($loc == "index.php")
                                break;
                        if($loc != "" && $loc != "_")
                                $path .= "../";
                }
                define('ROOT_PATH', $path . "phpBB");
                $new = true;
                global $db, $user, $cache, $SID, $_SID, $config, $phpbb_root_path, $phpEx, $auth, $template;
        }
	require_once("$path/w/wikiDB.php");
?>
<script type="text/javascript" src="<?php print($wgServer); ?>/w/load.php?debug=false&amp;lang=en&amp;modules=jquery%2Cmediawiki&amp;only=scripts&amp;skin=vector&amp;version=20130623T185045Z"></script>
<script type="text/javascript">
	$(document).scroll(function(){
		scrollTop = $(window).scrollTop();
		if(scrollTop < 12)
			$("#firstHeader").css("top", (12 - scrollTop) + "px");
		else
			$("#firstHeader").css("top","0"); 
	});
</script>
<?php
	global $user, $auth;
	include("config.php");
	//define('IN_PHPBB', true);
	$new = false;
   	$phpEx = "php";
	$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : ROOT_PATH . '/';
	
	require_once($phpbb_root_path . 'common.' . $phpEx);
        require_once($phpbb_root_path . 'includes/functions_user.' . $phpEx);

	$loggedIn = false;
	if(empty($user->session_id))
		$user->session_begin();
	
	$auth->acl($user->data);
	$bbuserses = $user->session_id;
	$bbusercok = $user->cookie_data;
	$exit = false;
	if(!empty($_POST['naa_loginname']))
	{
	    print("here");
	    $res=$auth->login($_POST["naa_loginname"], $_POST["naa_password"], true, 1, 1);print("here");
	    if($res["error_msg"] == "LOGIN_ERROR_ATTEMPTS") {print("TOO MANY ATTEMPTS");exit();}
	    $bbuserses = $user->session_id;
	    $bbusercok = $user->cookie_data;
            include("../loginWikiUser.php");
	    print("<script type='text/javascript'>window.location = window.location.href;</script>");
	    $exit = true;
	}
	else
	{
	    $user->setup();
	}
	if(!$exit)
	{
		if ($user->data['user_id'] != ANONYMOUS)
		{
		    $loggedIn = true;
		}
		$uri = (explode("?", $_SERVER['REQUEST_URI']));
		if($uri[0] == "/phpBB/ucp.php" && !empty($_GET["mode"]) && $_GET["mode"] == "logout")
		{
		    $user->session_kill();
		    $user->session_begin();
		    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
		    foreach($cookies as $cookie)
			{
	        	$parts = explode('=', $cookie);
		        $name = trim($parts[0]);
	        	setcookie($name, '', time()-1000);
		        setcookie($name, '', time()-1000, '/');
		    }
		    print("<script type='text/javascript'>window.location='/';</script>");
	    	$exit = true;
		}
		if(!$exit)
		{
			?>
			<link rel="stylesheet" tyle="text/css" href="<?php print($path); ?>/header.css" />
			<div id="firstHeader"><div class="wrap"><div class="forumbg">
			    <div class="inner"><span class="corners-top"><span></span></span>
			    <div class="solidblockmenu">
			        <ul>
			            <li><a href="<?php print($path); ?>phpBB" title="Forums">Forums</a></li>
			            <li><a href="<?php print($path); ?>wiki" title="Wiki">Wiki</a></li>
			            <?php
			                if($loggedIn)
							{
								if($user->data['loginname'] =="waterfoul" || $user->data['loginname'] == "MrWacko" || $user->data['loginname'] == "themastercheif92")
									print('<li><a href="' . $path . 'industry/index.php">Industry Calc</a></li>');
								if( group_memberships( 14, $user->data['user_id'] ) )
									print('<li><a href="' . $path . 'corpTools/index.php">Corporation Tools</a></li>');
							}
						?>
			            <li><a href="<?php print($path); ?>characterTools" title="Character Tools">Character Tools</a></li>
				    	<?php global $extra; print($extra); ?>
				    <li><a href="<?php print($path); ?>phpBB/memberlist.php" title="View complete list of members">Members</a></li>
				    <li><a href="<?php print($path); ?>phpBB/faq.php" title="Frequently Asked Questions">FAQ</a></li>
			            <?php
			                if($loggedIn)
			                {
			                        print('<li class="right first"><a href="' . $path . 'phpBB/ucp.php?mode=logout" title="Logoff">Logoff</a></li>'); 
						print('<li class="right"><a href="' . $path . 'phpBB/ucp.php">' . $user->data['username'] . '</a></li>');
						print('<li class="right"><a href="' . $path . 'phpBB/search.php?search_id=egosearch">View your posts</a></li>');
						print('<li class="right last"><a href="' . $path . 'phpBB/ucp.php?i=pm&folder=inbox">' . $user->data['user_new_privmsg'] . ' new messages</a></li>');
			                }
			                else
			                {
			                    print('<li class="right first"><form method="post" action="">
			                        <fieldset class="quick-login">
			                            <div><label for="naa_loginname">Username:</label>&nbsp;<input type="text" name="naa_loginname" id="naa_loginname" size="10" class="inputbox" title="Username"></div>
			                            <div><label for="naa_password">Password:</label>&nbsp;<input type="password" name="naa_password" id="naa_password" size="10" class="inputbox" title="Password"></div>
			                            <input type="submit" name="login" value="Login" class="button2">
			                            <input type="hidden" name="redirect" value="./index.php?">
			                        </fieldset>
			                    </form></li>');
					    print('<li class="right last"><a href="' . $path . 'phpBB/ucp.php?mode=register">Register</a></li>');
			                }
			            ?>
			        </ul>
			    </div>
			    <span class="corners-bottom"><span></span></span></div>
			</div></div></div>
			<?php
		}
	}
	if($exit && empty($noexit))
		exit();
?>
