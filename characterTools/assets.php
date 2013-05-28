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
					function getAssets($lft, $rgt, $level, $currentChar, $yapeal)
					{
						$retval = array();
		                $assetQry = $yapeal->query("
		                    SELECT a.flag, a.lvl, a.lft, a.rgt, a.quantity, i.typeName, i.description, a.locationID, a.itemID
		                    FROM  charAssetList as a 
							JOIN `naa_dbdump`.`invTypes` as i ON i.`typeID` = a.`typeID`
		                    WHERE a.ownerID = " . $currentChar . " AND lft > " . $lft . " AND rgt < " . $rgt . " AND a.lvl = " . $level
		                );
						while($assetRow = $assetQry->fetch_object())
						{
							if(($assetRow->rgt - $assetRow->lft) > 1)
								$assetRow->contents = getAssets($assetRow->lft, $assetRow->rgt, $level + 1, $currentChar, $yapeal);
							else 
								$assetRow->contents = array();
							$retval[] = $assetRow;
						}
						return $retval;
					}
					function print_rows($result, $class)
					{
						$css = "";
						if(!empty($class))
							$css = "display:none";
						foreach($result as $v)
						{
							$lvl = "";
							for($i=1;$i<$v->lvl;$i++)
								$lvl .= ">";
							print("<tr onclick='$(\"." . $v->itemID . "\").toggle()' class='" . $class . "' style='" . $css . "'>
								<td>" . $lvl . "</td>
								<td>" . $v->flag . "</td>
								<td>" . $v->quantity . "</td>
								<td class='descr'>" . $v->typeName . "<div>" . nl2br($v->description) . "</div></td>
								<td>" . $v->locationID . "</td>
								<td>" . count($v->contents) . "</td>
							</tr>");
							if(!empty($v->contents))
								print_rows($v->contents, $v->itemID);
						}
					}
	                $corpseQry = $yapeal->query("
	                    SELECT a.rgt, a.lft
	                    FROM  charAssetList as a 
	                    WHERE a.ownerID = " . $currentChar . " AND a.lvl = 0"
	                );
					if($corpseRow = $corpseQry->fetch_object())
					{
						$result = getAssets($corpseRow->lft, $corpseRow->rgt, 1, $currentChar, $yapeal);
						print("<table>");
						print("<thead><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Flag</th><th>#</th><th>Name</th><th>Station</th><th>Amount Held</th></tr></thead><tbody>");
						print_rows($result, "");
						print("</tbody></table>");
					}
				}
			?>
        </div>
    </body>
</html>
