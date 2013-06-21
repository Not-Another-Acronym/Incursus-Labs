<?php
        include("../config.php");
		include("../apiSync/syncPermissions.php");
?>
<html>
	<head>
	    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
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
						include("../characterTools/assetsLib.php");
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
										$corpseQry = null;
										if($corp[$v->characterID])
											$corpseQry = $yapeal->query("
							                    SELECT a.rgt, a.lft
							                    FROM  corpAssetList as a 
							                    WHERE a.ownerID = " . $cust->corporationID . " AND a.lvl = 0"
							                );
										else
							                $corpseQry = $yapeal->query("
							                    SELECT a.rgt, a.lft
							                    FROM  charAssetList as a 
							                    WHERE a.ownerID = " . $v->characterID . " AND a.lvl = 0"
							                );
										if($corpseRow = $corpseQry->fetch_object())
										{
											$result = getAssets($corpseRow->lft, $corpseRow->rgt, 1, $v->characterID, $cust->corporationID, $yapeal, $corp[$v->characterID]);
											print("<table>");
											print("<thead><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Flag</th><th>#</th><th>Name</th><th>Station</th><th>Amount Held</th></tr></thead><tbody>");
											print_rows($result, "", $phpBB);
											print("</tbody></table>");
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
