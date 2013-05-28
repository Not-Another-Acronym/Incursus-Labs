<div class="forumbg">
    <div class="inner"><span class="corners-top"><span></span></span>
    <div class="solidblockmenu">
        <ul>
        	<li><a href="/characterTools/index.php" title="Character Sheet">Character Sheet</a></li>
        	<li><a href="/characterTools/assets.php" title="Assets">Assets</a></li>
        </ul>
    </div>
    <span class="corners-bottom"><span></span></span></div>
</div>
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
				$corp = array(false);
				$corpID = array(0);
				
				while($row = $qry->fetch_object())
				{
					foreach(array($row->pf_api_key, $row->pf_api_key_b, $row->pf_api_key_c, $row->pf_api_key_d, $row->pf_api_key_e, $row->pf_api_key_f, $row->pf_api_key_g, $row->pf_api_key_h, $row->pf_api_key_i, $row->pf_api_key_j) as $v)
					{
						$key = explode(":",$v);
						if((string)((int)$key[0]) != $key[0])
							continue;
						$keys[] = $key[0];
						$isCorp = false;
						$infoQry = $yapeal->query("
							SELECT i.type
							FROM accountAPIKeyInfo as i
							WHERE i.keyID = " . $key[0]
						);
						$infoRow = $infoQry->fetch_object();
						if($infoRow && $infoRow->type == "Corporation")
							$isCorp = true;
						$qry2 = $yapeal->query("
							SELECT c.characterID, c.characterName, c.corporationID, c.corporationName
							FROM accountKeyBridge as b
							JOIN accountCharacters as c ON b.characterID = c.characterID
							WHERE b.keyID = " . $key[0]
						);
						while($row2 = $qry2->fetch_object())
						{
							if($firstChar == 0)
								$firstChar = $row2->characterID;
							$corp[$row2->characterID] = $isCorp;
							$chars[] = $row2->characterID;
							$corpID[$row2->characterID] = $row2->corporationID;
							if($isCorp)
							{
								if($corpAllowed)
									print('<li><a href="?charID='.$row2->characterID.'">' . $row2->corporationName . ' (Corp)</a></li>');
								break;
							}
							else 	
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
	$isCorp = false;
	$currentChar = 0;
    if(!empty($_GET["charID"]))
            $currentChar = $_GET["charID"];
    if($currentChar == 0 || !in_array($currentChar, $chars))
            $currentChar = $firstChar;
	$isCorp = $corp[$currentChar];
	$corpID = $corpID[$currentChar];
?>