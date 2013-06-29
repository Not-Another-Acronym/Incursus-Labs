<?php
if( !group_memberships( 14, $user->data['user_id'] ) )
   exit();
$getVars = "?";
foreach($_GET as $i=>$v)
{
	$getVars .= $i . "=" . urlencode($v);
}
?>
<div class="forumbg">
    <div class="inner"><span class="corners-top"><span></span></span>
    <div class="solidblockmenu">
        <ul>
        	<li><a href="empHist.php<?php print($getVars); ?>">Employment History</a></li>
        	<li><a href="contracts.php<?php print($getVars); ?>">Contracts Viewer</a></li>
        	<li><a href="contacts.php<?php print($getVars); ?>">Contacts Viewer</a></li>
        	<li><a href="mail.php<?php print($getVars); ?>">Mail Viewer</a></li>
        	<li><a href="wallet.php<?php print($getVars); ?>">Wallet Transaction Viewer</a></li>
        	<li><a href="character.php<?php print($getVars); ?>">Character Viewer</a></li>
        	<li><a href="assets.php<?php print($getVars); ?>">Assets Viewer</a></li>
		<li><a href="addApiKey.php<?php print($getVars); ?>">Add Api Keys</a></li>
        </ul>
    </div>
    <span class="corners-bottom"><span></span></span></div>
</div>
<?php
	$users = array();
	$users_options = "<option></option>";
	$users_qry_ary = array(
		'SELECT' => 'u.user_id, u.username',
		
		'FROM' => array(
			USERS_TABLE => 'u',
		),
		
		'WHERE' => "user_avatar != ''" //This will catch all users which are completely setup
	);

	$users_qry = $db->sql_build_query('SELECT', $users_qry_ary);
	
	$users_qry_result = $db->sql_query($users_qry);
	
	while ($users_row = $db->sql_fetchrow($users_qry_result))
	{
		$users[$users_row['user_id']] = $users_row['username'];
		$users_options .= "<option value='" . $users_row['user_id'] . "'" .
			((!empty($_GET['user_id']) && $_GET['user_id'] == $users_row['user_id'])?" selected":"")
		. ">" . $users_row['username'] . "</option>";
	}
	
	$keys = array();
	$chars = array();
		
	if(!empty($_GET['user_id']))
	{
		$phpBB = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_phpBB_db);
		$yapeal = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_yapeal_db);
		$qry = $phpBB->query("SELECT pf_api_key, pf_api_key_b, pf_api_key_c, pf_api_key_d, pf_api_key_e, pf_api_key_f, pf_api_key_g, pf_api_key_h, pf_api_key_i, pf_api_key_j FROM " . $mysql_phpBB_prefix . "profile_fields_data where user_id = " . (int)($_GET['user_id']));
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
					$chars[] = $row2;
					$corpID[$row2->characterID] = $row2->corporationID;
				}
			}
		}
	}
?>
<?php 
if(empty($nouser)) 
	print('User: <select onchange="top.location=\'?user_id=\' + this.value">' . $users_options . '</select>');
?>
