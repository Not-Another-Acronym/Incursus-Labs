<?php
        include("../config.php");
?>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	    <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css">
	    <link rel="stylesheet" type="text/css" href="jquery.multiselect.css">
	    <link rel="stylesheet" type="text/css" href="jquery.multiselect.filter.css">
	    <link rel="stylesheet" type="text/css" href="jquery.editableSelect.css">
	    <style>
	    	.dataTables_filter{display:none}
	    </style>
	    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
	    <script type="text/javascript" charset="utf8" src="jquery.multiselect.min.js"></script>
	    <script type="text/javascript" charset="utf8" src="jquery.multiselect.filter.min.js"></script>
	    <script type="text/javascript" charset="utf8" src="jquery.editableSelect.js"></script>
	    <script type="text/javascript" charset="utf8" src="jquery.cookie.js"></script>
	    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" charset="utf8" src="common.js"></script>
	    <script type="text/javascript" charset="utf8" src="detail.js"></script>
	    <script src="highcharts.js"></script>
		<script src="exporting.js"></script>
    </head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
				include("marketLib.php");
	            include("common.php");
				include("indyHeader.php");
				
				$phpBB = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_phpBB_db);
				$other = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_other_db);
				$yapeal = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_yapeal_db);
				$ind = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_ind_db);
				$dump = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_eve_dbDump);
				
				if(isset($_GET["ignore"]))
				{
					$other->query("INSERT INTO  `naa_other`.`Ignored_Transactions` (
						`UserID` ,
						`jorunalTransactionID`
						)
						VALUES (
						'" . $user->data['user_id'] . "',  '" . $other->real_escape_string($_GET["ignore"]) . "'
					);");
				}
				
				if(isset($_GET["process"]))
				{
					$other->query("INSERT INTO  `naa_other`.`Processed_Items` (
						`UserID` ,
						`itemID`
						)
						VALUES (
						'" . $user->data['user_id'] . "',  '" . $other->real_escape_string($_GET["process"]) . "'
					);");
				}
				
        		$qry = $phpBB->query("SELECT pf_api_key, pf_api_key_b, pf_api_key_c, pf_api_key_d, pf_api_key_e, pf_api_key_f, pf_api_key_g, pf_api_key_h, pf_api_key_i, pf_api_key_j FROM " . $mysql_phpBB_prefix . "profile_fields_data");
				$keys = array();
				$chars = array();
				$firstChar = 0;
				$corp = array(false);
				$corpID = array(0);
				$script = "";
				
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
						}
					}
				}
				
				$q=$yapeal->query("
		                SELECT a.price,a.quantity,a.transactionDateTime,a.transactionType,a.typeID,a.typeName,a.journalTransactionID,a.characterName,a.transactionDateTime,
	                        CONCAT(MONTH(a.transactionDateTime),'/',YEAR(a.transactionDateTime)) as M
		                FROM corpWalletTransactions as a
		                WHERE a.stationID=60003760
		                AND a.characterID=178404943
		                AND a.transactionType='sell'
		                ORDER BY a.`transactionDateTime` ASC
		        ");
		        print("<div id=\"chart_div\"> </div>");
		        $monthProfit=array();
		        $resTable = "<table><tr><th>Order</th><th>Item</th><th>Profit</th><th>Profit Each</th></tr>";
		        print("<br>Not Calculated:<table>" );
		        $head=false;
                $building=array();
                $ignore=array();
				$qry = $other->query("SELECT `jorunalTransactionID` FROM `Ignored_Transactions` WHERE `UserID` = " . $user->data['user_id']);
				while($r=$qry->fetch_object())
				{
					$ignore[] = $r->jorunalTransactionID;
				}
				$qry = $other->query("SELECT `itemID` FROM `Processed_Items` WHERE `UserID` = " . $user->data['user_id']);
				while($r=$qry->fetch_object())
				{
					$building[] = $r->itemID;
				}
		        while($r=$q->fetch_array())
		        {
		                if(!in_array($r["typeID"],$building))
		                {
	                        if(!in_array($r["journalTransactionID"],$ignore)){
                            	if(!$head)
                            	{
                                    print("<tr>");
                                    foreach($r as $i=>$v)
                                        if(!is_int($i))
                                            print("<th>".$i."</th>");
                                    print("</tr>");
                                    $head=true;
                                }
                                print("<tr>");
                                foreach($r as $i=>$v)
                                    if(!is_int($i))
                                        print("<td>".$v."</td>");
                                print("<td><a href='?ignore=" . $r["journalTransactionID"] . "'>Ignore</a></td><td><a href='?process=" . $r["typeID"] . "'>Process</a></td>");
	                        }
		                }
		                else
						{
		                        $profit=getProfit($r["typeID"],$r["transactionDateTime"],$r["price"],$r["quantity"],$r["journalTransactionID"],$r["transactionDateTime"],$chars);
		                        $resTable .= "<tr><td>".$r["journalTransactionID"]."</td><td>".$r["typeName"]."</td><td>" .
	                                number_format($profit,2) . "</td><td>" . number_format($profit/$r["quantity"],2) . "</td></tr>";
		                        if(!array_key_exists($r["M"],$monthProfit))
	                                $monthProfit[$r["M"]]=0;
		                        $monthProfit[$r["M"]]+=$profit;
    							$script .= "chartItems.push([\"" . $r["typeID"] . "\",\"" . $r["transactionDateTime"] . "\",\"" . ($r["price"]/$r["quantity"]) . "\"]);";
		                }
		        }
		        print("<br>");
		        $total = 0;
		        foreach($monthProfit as $i=>$v){
		                $sparrow=(($v-400000000)*.05)+400000000;
		                if($i=="11/2012")
		                        $sparrow = 0;
		                $dm = split("/",$i);
		                if($dm[1] > 2013 || ($dm[1] == 2013 && $dm[0] >= 3))
		                        $sparrow -= 400000000;
		                print($i . " = " . number_format($v,2) . ($user->data['loginname'] =="waterfoul"?" To Sparrow " . number_format($sparrow,2) . " True":"") . " Profit " . number_format($v-$sparrow,2) . "<br>");
		                $total += $v-$sparrow;
		        }
		        print("Total:" . number_format($total));
		        print("" . $resTable . "</table>");
				print("<script type='text/javascript'>" . $script . "</script>");

	        ?>
        </div>
    </body>
</html>
