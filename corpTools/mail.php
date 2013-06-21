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
			                        SELECT name
			                        FROM  charCharacterSheet
			                        WHERE characterID = " . $v->characterID
			                    );
			                    if($charRow = $charQry->fetch_object())
			                    {
									$utc = new DateTimeZone("UTC");
						 			$cust = get_char_from_cust($v->characterID, $utc, $yapeal);
			                        print("<div id='pic'><div class='head'>" . $charRow->name . "</div><img src='http://image.eveonline.com/Character/" . $v->characterID . "_256.jpg'></div>");
			                        print("<div id='details'><table>");
			                            $mailQry = $yapeal->query("
					                        SELECT * FROM  `charMailMessages` WHERE `ownerID` = " . $v->characterID
										);
										while($mailRow = $mailQry->fetch_object())
										{
											print("<tr>");
											$to = array();
											if($v->characterID == $mailRow->senderID)
											{
												if($mailRow->toCharacterIDs != "")
												{
													$chars = explode(",",$mailRow->toCharacterIDs);
													foreach($chars as $id)
													{
					 									$cust = get_char_from_cust($id, $utc, $yapeal);
														$to[] = $cust->characterName;
													}
												}
												if($mailRow->toCorpOrAllianceID != "" && $mailRow->toCorpOrAllianceID != "0")
												{
				 									$cust = get_corp_from_cust($mailRow->toCorpOrAllianceID, $utc, $yapeal);
													if( $cust != null )
														$to[] = "(Corp)" . $cust->corpName;
													else {
														$allianceQry = $yapeal->query("
									                        SELECT name FROM  `eveAllianceList` WHERE `allianceID` = " . $mailRow->toCorpOrAllianceID
														);
														if($allianceRow = $allianceQry->fetch_object())
															$to[] = "(Alliance)" . $allianceRow->name;
													}
												}
												if($mailRow->toListID != "" && $mailRow->toListID != "0")
													$to[] = "(Mailing List)" . $mailRow->toListID;
											}
											if(!empty($to))
												print("<td>Sent to</td><td>" . implode(", ",$to) . "</td>");
											else 
											{
												$from = "<td>Recieved from</td>";
												if($cust = get_char_from_cust($mailRow->senderID, $utc, $yapeal))
													$from .= "<td>" . $cust->characterName . "</td>";
												else if($cust = get_corp_from_cust($mailRow->senderID, $utc, $yapeal))
													$from .= "<td>(Corp) " . $cust->corpName . "</td>";
												else
												{
													$allianceQry = $yapeal->query("
								                        SELECT name FROM  `eveAllianceList` WHERE `allianceID` = " . $mailRow->senderID
													);
													if($allianceRow = $allianceQry->fetch_object())
														$from .= "<td>(Alliance)" . $allianceRow->name . "</td>";
													else
														$from = "";
												}
												if($from != "")
													print($from);
												else
													print("<td>Recieved from</td><td>Corp</td>"); 
											}
											print("<td>" . $mailRow->sentDate . "</td><td>" . $mailRow->title . "</td></tr>");
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
