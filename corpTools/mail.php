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
