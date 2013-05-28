<?php
        include("../config.php");
		include("../apiSync/syncPermissions.php");
?>
<html>
	<head>
		<link type="text/css" href="main.css" />
	</head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
				include("toolsHeader.php")
	        ?>
	        <div class="forumbg">
			    <div class="inner"><span class="corners-top"><span></span></span>
			    <div class="solidblockmenu">
			        <ul>
			        	<?php
							$phpBB = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_phpBB_db);
							$yapeal = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_yapeal_db);
			        		$qry = $phpBB->query("SELECT pf_api_key, pf_api_key_b, pf_api_key_c, pf_api_key_d, pf_api_key_e, pf_api_key_f, pf_api_key_g, pf_api_key_h, pf_api_key_i, pf_api_key_j FROM " . $mysql_phpBB_prefix . "profile_fields_data");
							$keys = array();
							$chars = array();
							$firstChar = 0;
							
							while($row = $qry->fetch_object())
							{
								foreach(array($row->pf_api_key, $row->pf_api_key_b, $row->pf_api_key_c, $row->pf_api_key_d, $row->pf_api_key_e, $row->pf_api_key_f, $row->pf_api_key_g, $row->pf_api_key_h, $row->pf_api_key_i, $row->pf_api_key_j) as $v)
								{
									$key = explode(":",$v);
									if((string)((int)$key[0]) != $key[0])
										continue;
									$keys[] = $key[0];
									$qry2 = $yapeal->query("
										SELECT c.characterID, c.characterName
										FROM accountKeyBridge as b
										JOIN accountCharacters as c ON b.characterID = c.characterID
										WHERE b.keyID = " . $key[0]
									);
									while($row2 = $qry2->fetch_object())
									{
										if($firstChar == 0)
											$firstChar = $row2->characterID;
										$chars[] = $row2->characterID;
										print('<li><a href="?charID='.$row2->characterID.'">' . $row2->characterName . '</a></li>');
									}
								}
							}
			        	?>
			        </ul>
			    </div>
			    <span class="corners-bottom"><span></span></span></div>
			</div>
			<?php
				$currentChar = 0;
                if(!empty($_GET["charID"]))
                        $currentChar = $_GET["charID"];
                if($currentChar == 0 || !in_array($currentChar, $chars))
                        $currentChar = $firstChar;
                if($currentChar != 0)
                {
                    $charQry = $yapeal->query("
                        SELECT c.corporationName, c.allianceName, c.DoB, c.cloneSkillPoints, c.name, c.balance,
                        	a.charisma, a.intelligence, a.perception, a.willpower, a.memory, SUM( s.skillpoints ) as sp,
                        	f1.standing as caldStand, f2.standing as minniStand, f3.standing as amarrStand,
                        	f4.standing as galStand, f5.standing as amatarStand
                        FROM  charCharacterSheet AS c
                        JOIN charAttributes as a ON c.characterID = a.ownerID
						JOIN charSkills as s ON s.`ownerID` = a.ownerID
						LEFT OUTER JOIN `charStandingsFromFactions` as f1 ON f1.`ownerID` = a.ownerID AND f1.fromID = 500001
						LEFT OUTER JOIN `charStandingsFromFactions` as f2 ON f2.`ownerID` = a.ownerID AND f2.fromID = 500002
						LEFT OUTER JOIN `charStandingsFromFactions` as f3 ON f3.`ownerID` = a.ownerID AND f3.fromID = 500003
						LEFT OUTER JOIN `charStandingsFromFactions` as f4 ON f4.`ownerID` = a.ownerID AND f4.fromID = 500005
						LEFT OUTER JOIN `charStandingsFromFactions` as f5 ON f5.`ownerID` = a.ownerID AND f5.fromID = 500007
                        WHERE c.characterID = " . $currentChar
                    );
                    if($charRow = $charQry->fetch_object())
                    {
						$utc = new DateTimeZone("UTC");
			 			$cust = get_char_from_cust($currentChar, $utc, $yapeal);
	                    if(empty($cust->securityStatus))
	                        $cust->securityStatus = 0;
	                    if(empty($charRow->amarrStand))
	                        $charRow->amarrStand = 0;
	                    if(empty($charRow->amatarStand))
	                        $charRow->amatarStand = 0;
	                    if(empty($charRow->caldStand))
	                        $charRow->caldStand = 0;
	                    if(empty($charRow->minniStand))
	                        $charRow->minniStand = 0;
	                    if(empty($charRow->galStand))
	                        $charRow->galStand = 0;
	                    if(empty($charRow->allianceName))
	                        $charRow->allianceName = "----------";
                        print("<div id='pic'><img src='http://image.eveonline.com/Character/" . $currentChar . "_256.jpg'></div>");
                        print("<div id='details'><div class='head'>" . $charRow->name . "</div><table>");
                            print("<tr><td>Corporation</td><td>" . $charRow->corporationName . "</td>");
                            print("<tr><td>Alliance</td><td>" . $charRow->allianceName . "</td>");
                            print("<tr><td>Date of Birth</td><td>" . $charRow->DoB . "</td>");
                            print("<tr><td>Isk</td><td>" . number_format($charRow->balance, 2) . "</td>");
                            print("<tr><td>Clone Skill Points</td><td>" . number_format($charRow->cloneSkillPoints, 0) . "</td>");
                            print("<tr><td>Skill Points</td><td>" . number_format($charRow->sp, 0) . "</td>");
                            print("<tr><td>Security Status</td><td>" . $cust->securityStatus . "</td>");
                            print("<tr><td>Amarr Standings</td><td>" . $charRow->amarrStand . "</td>");
                            print("<tr><td>Amatar Standings</td><td>" . $charRow->amatarStand . "</td>");
                            print("<tr><td>Caldari Standings</td><td>" . $charRow->caldStand . "</td>");
                            print("<tr><td>Minmatar Standings</td><td>" . $charRow->minniStand . "</td>");
                            print("<tr><td>Galente Standings</td><td>" . $charRow->galStand . "</td>");
                            print("<tr><td>Intelligence</td><td>" . $charRow->intelligence . "</td>");
                            print("<tr><td>Perception</td><td>" . $charRow->perception . "</td>");
                            print("<tr><td>Charisma</td><td>" . $charRow->charisma . "</td>");
                            print("<tr><td>Willpower</td><td>" . $charRow->willpower . "</td>");
                            print("<tr><td>Memory</td><td>" . $charRow->memory . "</td>");
                        print("</table></div>");
						print("<div id='skills'><table>");
						$skillQry = $yapeal->query("
	                        SELECT s.skillpoints, s.level, i.typeName, i.description
	                        FROM  charSkills as s
							JOIN `naa_dbdump`.`invTypes` as i ON i.`typeID` = s.`typeID`
	                        WHERE s.ownerID = " . $currentChar
	                    );
	                    while($skillRow = $skillQry->fetch_object())
	                    	print("<tr><td class='descr'>" . $skillRow->typeName . "<div>" . $skillRow->description . "</div></td><td class='descr'>" . $skillRow->level . "<div>" . $skillRow->skillpoints . "</div></td></tr>");
						print("</table></div>");
                    }
                }
			?>
        </div>
    </body>
</html>
