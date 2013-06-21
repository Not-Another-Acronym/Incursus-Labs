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
	            include("../header.php");
				$corpAllowed = false;
				include("toolsHeader.php");
	        ?>
	        <div>
		        <?php
		        	if(isset($_GET["user_id"]))
					{
						foreach($chars as $v)
						{
							if(!$corp[$v->characterID])
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
			                        WHERE c.characterID = " . $v->characterID
			                    );
			                    if($charRow = $charQry->fetch_object())
			                    {
									$utc = new DateTimeZone("UTC");
						 			$cust = get_char_from_cust($v->characterID, $utc, $yapeal);
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
			                        print("<div id='pic'><img src='http://image.eveonline.com/Character/" . $v->characterID . "_256.jpg'></div>");
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
			                        $skillQry = $yapeal->query("
				                        SELECT s.skillpoints, s.level, i.typeName, i.description
				                        FROM  charSkills as s
										JOIN `naa_dbdump`.`invTypes` as i ON i.`typeID` = s.`typeID`
				                        WHERE s.ownerID = " . $v->characterID
				                    );
				                    while($skillRow = $skillQry->fetch_object())
				                    	print("<div class='skills'>
				                    		<div class='descr'>" . $skillRow->typeName . "<div>" . nl2br($skillRow->description) . "</div></div>
				                    		<div class='descr'>" . $skillRow->level . "<div>" . $skillRow->skillpoints . "</div></div>
			                    		</div>");
									print("<div style='clear:both'>&nbsp;</div>");
			                    }
							}
						}
					}
		        ?>
	        </div>
       	</div>
    </body>
</html>
