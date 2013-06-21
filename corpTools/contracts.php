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
					$utc = new DateTimeZone("UTC");
		        	if(isset($_GET["user_id"]))
					{
						foreach($chars as $v)
						{
							if(!$corp[$v->characterID])
							{
								$charQry = $yapeal->query("
			                        SELECT c.name
			                        FROM  charCharacterSheet AS c
			                        WHERE c.characterID = " . $v->characterID
			                    );
			                    if($charRow = $charQry->fetch_object())
			                    {
									$utc = new DateTimeZone("UTC");
						 			$cust = get_char_from_cust($v->characterID, $utc, $yapeal);
			                        print("<div id='pic'><div class='head'>" . $charRow->name . "</div><img src='http://image.eveonline.com/Character/" . $v->characterID . "_256.jpg'></div>");
			                        print("<div id='details'><table>");
			                            $walletQry = $yapeal->query("
					                        SELECT issuerID, issuerCorpID, acceptorID, type, status, availability, dateAccepted
					                        FROM charContracts
					                        WHERE ownerID = " . $v->characterID
					                    );
										while($walletRow = $walletQry->fetch_object())
										{
											print("<tr>");
											if($walletRow->acceptorID == $v->characterID)
											{
												$char = get_char_from_cust($walletRow->issuerID, $utc, $yapeal);
												$corpObj = get_corp_from_cust($walletRow->issuerCorpID, $utc, $yapeal);
												print("<td>Created By</td><td>" .  $char->characterName . "</td><td>" . ($corpObj!= null?$corpObj->corpName:" ") . "</td>");
											}
											else if($walletRow->issuerID == $v->characterID)
											{
												$char = get_char_from_cust($walletRow->acceptorID, $utc, $yapeal);
												$name = "";
												if($char != Null)
													$name = $char->characterName;
												else
												{
													$corpObj = get_corp_from_cust($walletRow->acceptorID, $utc, $yapeal);
													if($corpObj != Null)
														$name = $corpObj->corpName;
												}
												print("<td>Accepted By</td><td>" . $name . "</td> <td></td>");
											}
											else print("<td>Unknown</td><td>Unknown</td>");
											
											print("<td>" . $walletRow->type . "</td><td>" . $walletRow->status . "</td><td>" . $walletRow->availability . "</td><td>" . $walletRow->dateAccepted . "</td></tr>");
										}
			                    	print("</table></div>");
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
