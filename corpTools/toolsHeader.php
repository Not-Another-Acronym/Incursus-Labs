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
        	<li><a href="empHist.php<?php print($getVars); ?>">Employment History</a></li>
        	<li><a href="contracts.php<?php print($getVars); ?>">Contracts Viewer</a></li>
        	<li><a href="contacts.php<?php print($getVars); ?>">Contacts Viewer</a></li>
        	<li><a href="mail.php<?php print($getVars); ?>">Mail Viewer</a></li>
        	<li><a href="wallet.php<?php print($getVars); ?>">Wallet Transaction Viewer</a></li>
        	<li><a href="character.php<?php print($getVars); ?>">Character Viewer</a></li>
        	<li><a href="assets.php<?php print($getVars); ?>">Assets Viewer</a></li>
        </ul>
    </div>
    <span class="corners-bottom"><span></span></span></div>
</div>