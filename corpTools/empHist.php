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
			                        SELECT characterID, name
			                        FROM  charCharacterSheet
			                        WHERE characterID = " . $v->characterID
			                    );
			                    if($charRow = $charQry->fetch_object())
			                    {
			                    	$charRow->curHist = array();
									$histQry = $yapeal->query("SELECT * FROM  `custom_charHistory` WHERE `characterID`=" . $v->characterID);
									while($histRow = $histQry->fetch_object())
										$charRow->curHist[] = $histRow;
			                    	$rows[] = $charRow;
									$count[] = count($charRow->curHist);
								}
							}
						}
						array_multisort($count, SORT_DESC, $rows);
						foreach($rows as $v)
						{
							$utc = new DateTimeZone("UTC");
				 			$cust = get_char_from_cust($v->characterID, $utc, $yapeal);
							$width = "width:450px";
	                        print("<div style='float:left;text-align:center;padding-right:5px;padding-left:5px;border-right:1px solid black;vertical-align: top;display: inline-block;'>
	                        	<div id='pic'><div class='head'>" . $v->name . "</div><img src='http://image.eveonline.com/Character/" . $v->characterID . "_256.jpg'>");
	                        print("<div id='details' style='float:none'><table style='$width'>");
	                        foreach($v->curHist as $histRow)
							{
								$corpData = get_corp_from_cust($histRow->corpID, $utc, $yapeal);
								print("<tr><td>" . $corpData->corpName . "</td><td>" . $histRow->startDate . "</td><td></tr>");
							}
	                    	print("</table></div></div></div>");
						}
					}
		        ?>
	       		<div style='clear:both'>&nbsp;</div>
       		</div>
       	</div>
    </body>
</html>
