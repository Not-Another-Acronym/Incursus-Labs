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
		                        print("<div id='pic'><div class='head'>" . $charRow->name . "</div><img src='http://image.eveonline.com/Character/" . $v->characterID . "_256.jpg'></div>");
		                        print("<div id='details'><table>");
		                            $walletQry = $yapeal->query("
				                        SELECT ownerID1, ownerID2, ownerName1, ownerName2, reason, amount, date
				                        FROM charWalletJournal
				                        WHERE (amount > 1 OR amount < -1) AND refTypeID in (1,10,37,38,45,63,64,65,66,67,68,69,70,71,74,76,77,78,79,80,81,82,83,84) AND ownerID = " . $v->characterID
				                    );
									while($walletRow = $walletQry->fetch_object())
									{
										print("<tr>");
										if($walletRow->ownerID1 == $v->characterID)
											print("<td>" . number_format(-$walletRow->amount,2) . "</td><td>Sent to</td><td>" . $walletRow->ownerName2 . "</td>");
										if($walletRow->ownerID2 == $v->characterID)
											print("<td>" . number_format($walletRow->amount,2) . "</td><td>Recieved from</td><td>" . $walletRow->ownerName1 . "</td>");
										print("<td>" . $walletRow->date . "</td><td>" . $walletRow->reason . "</td></tr>");
									}
		                    	print("</table></div>");
								print("<div style='clear:both'>&nbsp;</div>");
		                    }
						}
					}
				}
	        ?>
       	</div>
    </body>
</html>
