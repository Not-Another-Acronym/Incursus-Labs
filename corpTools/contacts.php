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
						$rows = array();
						$count = array();
						foreach($chars as $v)
						{
							if(!$corp[$v->characterID])
							{
								$charQry = $yapeal->query("
			                        SELECT c.characterID, c.name, count(l.contactName) as count
	                                FROM  charCharacterSheet AS c
	                                LEFT JOIN charContactList AS l
	                                    ON l.ownerID = c.characterID
			                        WHERE c.characterID = " . $v->characterID
			                    );
			                    if($charRow = $charQry->fetch_object())
			                    {
			                    	$rows[] = $charRow;
									$count[] = $charRow->count;
								}
							}
						}
						array_multisort($count, SORT_DESC, $rows);
						foreach($rows as $charRow)
	                	{
							$utc = new DateTimeZone("UTC");
				 			$cust = get_char_from_cust($charRow->characterID, $utc, $yapeal);
		                    print("<div style='vertical-align: top;display: inline-block;'><div id='pic'><div class='head'>" . $charRow->name . "</div><img src='http://image.eveonline.com/Character/" . $charRow->characterID . "_256.jpg'></div>");
		                    print("<div id='details' style='float:none'><table>");
		                        $walletQry = $yapeal->query("
			                        SELECT contactName, standing
			                        FROM charContactList
			                        WHERE ownerID = " . $charRow->characterID
			                    );
								while($walletRow = $walletQry->fetch_object())
								{
									print("<td>" . $walletRow->contactName . "</td><td>" . $walletRow->standing . "</td></tr>");
								}
		                	print("</table></div></div>");
						}
					}
		        ?>
	        	<div style='clear:both'> </div>
        	</div>
       	</div>
    </body>
</html>
