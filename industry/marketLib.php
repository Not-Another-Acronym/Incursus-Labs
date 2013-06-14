<?php
	function getWaste($itemID)
	{
	    global $dump;
	    $q2=$dump->query("
            SELECT b.wasteFactor
            FROM invBlueprintTypes AS b
            WHERE b.productTypeID = ". $itemID);
        $r=$q2->fetch_object();
        if($r==null)
            return 0;
        else
            return $r->wasteFactor;
	}
	function getBaseMaterials($itemID,$ME,$waste)
	{
	    global $dump;
	    $mats=array();
	    $q2=$dump->query("
            SELECT m.materialTypeID, m.quantity
		    FROM invTypeMaterials AS m
	        WHERE m.typeID = ".$itemID
        );
        while($r2=$q2->fetch_object())
            $mats[$r2->materialTypeID]=$r2->quantity;

    	$q2=$dump->query("SELECT valueInt FROM `dgmTypeAttributes` WHERE  `typeID` =" . $itemID . " AND  `attributeID` =422");
        while($r2=$q2->fetch_object())
            if($r2->valueInt==2){
                $q3=$dump->query("SELECT parentTypeID FROM  `invMetaTypes` WHERE  `typeID` = " . $itemID);
                if($r3=$q3->fetch_object()){
                	$q4=$dump->query("SELECT m.materialTypeID, m.quantity
                                        FROM invTypeMaterials AS m
                                        WHERE m.typeID = ".$r3->parentTypeID);
                    while($r4=$q4->fetch_object())
                        if(array_key_exists($r4->materialTypeID, $mats))
                            $mats[$r4->materialTypeID]-=$r4->quantity;
                }
            }
            if($ME<0)
                foreach($mats as $i=>$v)
                    $mats[$i]=round($v+($v*(($waste/100)*(1-$ME))));
            else
                foreach($mats as $i=>$v)
                    $mats[$i]=round($v+($v*(($waste/$ME+1)/100)));
        return($mats);
    }
    function getExtraMaterials($itemID)
    {
        global $dump;
        $mats=array();
        $q2=$dump->query("
            SELECT r.requiredTypeID, r.quantity, r.damagePerJob, b.wasteFactor
	        FROM ramTypeRequirements AS r
	        INNER JOIN invBlueprintTypes AS b
	            ON r.typeID = b.blueprintTypeID
	        INNER JOIN invTypes AS t
	            ON r.requiredTypeID = t.typeID
	        INNER JOIN invGroups AS g
	            ON t.groupID = g.groupID
	        WHERE b.productTypeID = ". $itemID ."
	                    AND r.activityID = 1
	        AND g.categoryID != 16
        ");
        while($r2=$q2->fetch_object())
            $mats[$r2->requiredTypeID]=$r2->quantity*$r2->damagePerJob;
        return($mats);
    }
	function getInventMaterials($itemID,$bpRuns,$chance)
	{
	    global $dump;
	    $mats=array();
	    $q2=$dump->query("SELECT valueInt FROM `dgmTypeAttributes` WHERE  `typeID` =" . $itemID . " AND  `attributeID` =422");
	    while($r2=$q2->fetch_object())
	        if($r2->valueInt==2){
	            $q3=$dump->query("
                    SELECT a.requiredTypeID, a.quantity
                    FROM ramTypeRequirements as a
                    LEFT JOIN invBlueprintTypes b ON a.typeID = b.blueprintTypeID
                    LEFT JOIN `invMetaTypes` as c ON c.parentTypeID = b.productTypeID
                    LEFT JOIN `invTypes` as d ON a.requiredTypeID = d.typeID
                    WHERE c.`typeID` = 1422
                    AND a.activityID = 8
                    AND d.marketGroupID = 966
	            ");
	            while($r3=$q3->fetch_object()){
                    $mats[$r3->requiredTypeID]=$r3->quantity*(1/$bpRuns)*(1/$chance);
	            }
	        }
	    return $mats;
    }
	function getCentralPrice($type, $col, $itemID, $time, $db)
	{
		$qry = "SELECT `" . $col . "` as a FROM `marketStat` WHERE `Type` = '" . $type . "' and `itemID` = '" . $itemID . "' and grabbedAt < '" . $time . "' ORDER BY `grabbedAt` DESC LIMIT 1";
		$qry = $db->query($qry);
		if($row = $qry->fetch_object())
       		return $row->a;
        else
       		return 10^10;
	}
	function getActualPrice($itemID,$transDT,$amount,$buildQuantity,$charIds)
	{
                global $ind;
                global $error;
                global $errorMsg;
                global $mysql_yapeal_db;
                global $mysql_ind_db;
                $cost=0;
                $quantity=$amount * $buildQuantity;
                $q=$ind->query("
                        SELECT a.price,a.quantity,a.typeID,a.journalTransactionID,b.amountUsed
                        FROM " . $mysql_yapeal_db . ".corpWalletTransactions as a
                        LEFT OUTER JOIN " . $mysql_ind_db . ".UsedItems as b ON a.journalTransactionID=b.journalTransactionID
                        WHERE a.typeID=" . $itemID . "
                        AND (a.characterID=" . implode(" OR a.characterID=", $charIds) . ")
                        AND a.transactionType='buy'
                        AND a.transactionDateTime<='" . $transDT . "'
                        ORDER BY a.`transactionDateTime` ASC
                ");
                $lastCost=10^100;
                while(($r=$q->fetch_object()) && $quantity > 0){
                        $lastCost = $r->price;
                        if(is_null($r->amountUsed))
                                $used=0;
                        else
                                $used=$r->amountUsed;
                        $left=$r->quantity - $used;
                        if($left <= 0)
                                continue;
                        //print($itemID . " " . $left . " " . $quantity . " " . $used . "/" . $r->quantity . " " . $r->price . "<br>");
                        if($left<$quantity){
                                $used+=$left;
                                $quantity-=$left;
                                $cost+=$left*$r->price;
                        }else{
                                $used+=$quantity;
                                $cost+=$quantity*$r->price;
                                $quantity=0;
                        }
                        if(is_null($r->amountUsed))
                                $ind->query("INSERT INTO  `UsedItems` (`journalTransactionID` ,`amountUsed`) VALUES ('" . $r->journalTransactionID . "', '" . $used . "');");
                        else
                                $ind->query("UPDATE  `UsedItems` SET  `amountUsed` =  '" . $used . "' WHERE  `UsedItems`.`journalTransactionID` =" . $r->journalTransactionID);
                }
                //print("next<br>");
                //flush();
                if($quantity>0){
                        $error=true;
                        $errorMsg.="<br>NOT ENOUGH " . $itemID . " Missing " . $quantity . " ASSUMING LAST PRICE [" . $lastCost . "]";
                        $cost+=$quantity*$lastCost;
                        $quantity=0;
                }
                return $cost;
        }
		function getProfit($itemID,$transDT,$price,$quantity,$journalTransactionID,$date,$charIds)
		{
                global $ind;
                global $error;
                global $errorMsg;
                $row=$ind->query("SELECT `profitMade` FROM  `ProfitMade` WHERE `journalTransactionID`='" . $journalTransactionID . "'")->fetch_object();
                if($row)
                        return $row->profitMade;
                else
                {
                        $ind->autocommit(FALSE);
                        $profit=getActualPrice($itemID,$transDT,$price,$quantity,$charIds);
                        $error = false;
                        if($error){
                                print($errorMsg."<br>When building " . $itemID . " Sold on " . $date);
                                $errorMsg="";
                        }//else{
                                $ind->query("INSERT INTO  `ProfitMade` (`journalTransactionID`,`profitMade`) VALUES ('" . $journalTransactionID . "', '" . $profit . "');");
                                if(!$ind->commit()){
                                        print("COMMIT FAIL!");
                                        exit();
                                }
                        //}
                        $ind->autocommit(TRUE);
                        return $profit;
                }
        }
		function calcProfit($itemID,$transDT,$price,$quantity,$charIds){
                $waste=getWaste($itemID);
                $mats=getBaseMaterials($itemID,-4,$waste);
                $mats=$mats + getExtraMaterials($itemID);
                $mats=$mats + getInventMaterials($itemID,10,0.4779);
                $profit=$price*$quantity;
                foreach($mats as $i=>$v){
                        $profit-=getActualPrice($i,$transDT,$v,$quantity,$charIds);
                }
                //print("--------------------------------------<br>");
                return $profit;
        }
?>
