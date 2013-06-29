<?php
        include("../config.php");
		include("../apiSync/syncPermissions.php");
?>
<html>
	<head>
		<link type="text/css" href="main.css" rel="stylesheet"/>
	</head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
		    $nouser = true;
	            include("../header.php");
		    include("../apiSync/APIkey.php");
		    $corpAllowed = false;
		    include("toolsHeader.php");
	        ?>
	        <div style="font-size:medium">
			<?php
				if(!empty($_GET["key"]))
				{
					$mask = null;
					$status = explode(",",getAPIStatus($_GET["key"], $_GET["vCode"]), $mask);
					if($status[0] == "BAD KEY OR VCODE")
						print("Bad API Credentials, please retry");
			    		else
				    	{
			    			if(in_array("DEFCON 3",$status))
			    				print("Incursion Community Verified Capable");
    						if(in_array("DEFCON 2",$status))
    							print("Lowsec Community Capable");
		    				if(in_array("DEFCON 1",$status))
    							print("Corporation Capable");
			    			if(in_array("SKILLS",$status))
    							print(", Skill Features Enabled");
			    			if(in_array("STANDINGS",$status))
    							print(", Standings Features Enabled");
						
						set_include_path(get_include_path() . PATH_SEPARATOR . "../yapeal");
				                // Define short name for directory separator which always uses unix '/'.
				                if (!defined('DS')) {
				                  define('DS', '/');
				                }
				                // Get the base dir of Yapeal.
				                $dir = str_replace('\\', DS, dirname(__FILE__)) . DS . ".." . DS . "yapeal" . DS;
				        	// Load basic files for utils to run.
					        require_once $dir . 'inc' . DS . 'common_paths.php';
					        // Only needed if your existing custom autoload doesn't work for Yapeal.
				                // See note below.
				                require_once YAPEAL_CLASS . 'YapealAutoLoad.php';
				                require_once YAPEAL_INC   . 'getSettingsFromIniFile.php';
				                // Activate Yapeal auto loader to load classes automatic.
				                // Note this is optional if you have an existing autoloader that will
				                // also handle the classes and interfaces for Yapeal.
				                YapealAutoLoad::activateAutoLoad();
				                // Get settings from yapeal.ini
				                $iniVars = getSettingsFromIniFile();
				                // Define from Yapeal settings if Yapeal trace is enabled.
				                if (!defined('YAPEAL_TRACE_ENABLED')){
				                  define('YAPEAL_TRACE_ENABLED', $iniVars['Logging']['trace_enabled']);
				                }
				                // Let Yapeal know what settings to use to connect to the database.
				                YapealDBConnection::setDatabaseSectionConstants($iniVars['Database']);
				                // Clean up settings that we don't need any more.
				                unset($iniVars);

						$regKey = new RegisteredKey($_GET["key"]);
	  		                        if ($regKey->recordExists() && $regKey->isActive)
							print("<div>Already Active in DB</div>");
			                        else {
                                        		$regKey->vCode = $_GET["vCode"];
                                        		$regKey->activeAPIMask = $mask;
                                        		$regKey->isActive = 1;
                                        		$regKey->store();
							print("<div>Added</div>");
						}
					}
				}
			?>
			<form method="GET">
				<label for="key">Key: </label><input type="text" name="key" id="key" />
				<label for="vCode">vCode: </label><input type="text" name="vCode" id="vCode" />
				<input type="submit" value="Submit" />
			</form>
			<table><tr><th>Key Id</th><th>Type</th><th>Mask</th><th>Display Name</th></tr>
		        <?php
				$yapeal = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_yapeal_db);
				$qry = $yapeal->query("
                                        SELECT i.type, i.keyID, k.activeAPIMask, u.username
                                        FROM accountAPIKeyInfo as i
					JOIN utilRegisteredKey AS k ON i.keyID = k.keyID
					LEFT OUTER JOIN " . $mysql_phpBB_db . ".phpbb_profile_fields_data as f ON i.keyID in (
						f.pf_api_key, f.pf_api_key_b, f.pf_api_key_c, f.pf_api_key_d, f.pf_api_key_e, f.pf_api_key_f, f.pf_api_key_g, f.pf_api_key_h, f.pf_api_key_i, f.pf_api_key_j
					)
					LEFT OUTER JOIN " . $mysql_phpBB_db . ".phpbb_users AS u ON f.user_id = u.user_id
					WHERE k.isActive = 1
					ORDER BY u.username
				");
				while($row=$qry->fetch_object())
				{
					if(!empty($row->username))
						$displayName = "(forums) " . str_replace('&#01;','',$row->username);
					print("<tr><td>" . $row->keyID . "</td><td>" . $row->type . "</td><td>" . $row->activeAPIMask . "</td><td>" . $displayName . "</td></tr>");
				}
		        ?>
			</table>
	        </div>
       	</div>
    </body>
</html>
