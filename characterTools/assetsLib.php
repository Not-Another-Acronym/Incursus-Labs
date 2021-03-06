<?php
	function getAssets($lft, $rgt, $level, $currentChar, $corpID, $yapeal, $isCorp)
	{
		$retval = array();
		$assetQry = null;
		if($isCorp)
			$assetQry = $yapeal->query("
                SELECT a.flag, a.lvl, a.lft, a.rgt, a.quantity, i.typeName, i.description, a.locationID, a.itemID
                FROM  corpAssetList as a 
				JOIN `" . $mysql_eve_dbDump . "`.`invTypes` as i ON i.`typeID` = a.`typeID`
                WHERE a.ownerID = " . $corpID . " AND lft > " . $lft . " AND rgt < " . $rgt . " AND a.lvl = " . $level . "
                ORDER BY a.locationID"
            );
		else
            $assetQry = $yapeal->query("
                SELECT a.flag, a.lvl, a.lft, a.rgt, a.quantity, i.typeName, i.description, a.locationID, a.itemID
                FROM  charAssetList as a 
				JOIN `" . $mysql_eve_dbDump . "`.`invTypes` as i ON i.`typeID` = a.`typeID`
                WHERE a.ownerID = " . $currentChar . " AND lft > " . $lft . " AND rgt < " . $rgt . " AND a.lvl = " . $level . "
                ORDER BY a.locationID"
            );
		while($assetRow = $assetQry->fetch_object())
		{
			if(($assetRow->rgt - $assetRow->lft) > 1)
				$assetRow->contents = getAssets($assetRow->lft, $assetRow->rgt, $level + 1, $currentChar, $corpID, $yapeal, $isCorp);
			else 
				$assetRow->contents = array();
			$retval[] = $assetRow;
		}
		return $retval;
	}
	function print_rows($result, $class, $phpBB)
	{
		$css = "";
		if(!empty($class))
			$css = "display:none";
		foreach($result as $v)
		{
			$lvl = "";
			for($i=1;$i<$v->lvl;$i++)
				$lvl .= ">";
			$flag = get_flag($v->flag, $phpBB);
			print("<tr onclick='$(\"." . $v->itemID . "\").toggle()' class='" . $class . "' style='" . $css . "'>
				<td>" . $lvl . "</td>
				<td class='descr'>" . $flag[0] . "<div>" . $flag[1] . "</div></td>
				<td>" . $v->quantity . "</td>
				<td class='descr'>" . $v->typeName . "<div>" . nl2br($v->description) . "</div></td>
				<td>" . get_station($v->locationID, $phpBB) . "</td>
				<td>" . count($v->contents) . "</td>
			</tr>");
			if(!empty($v->contents))
				print_rows($v->contents, $v->itemID, $phpBB);
		}
	}
	function get_flag($id, $phpBB)
	{
		static $flags = array();
		if(empty($flags[$id]))
		{
			$qry = $phpBB->query("SELECT s.flagName, s.flagText FROM " . $mysql_eve_dbDump . ".invFlags AS s WHERE s.flagID=" . $id);
			if($row=$qry->fetch_object())
				$flags[$id] = Array($row->flagName, $row->flagText);
			else
				$flags[$id] = Array("Unknown", $id);
		}
		return $flags[$id];
	}
	function get_station($id, $phpBB)
	{
		static $stations = array();
		if(empty($stations[$id]))
		{
			if(66000000 < $id && $id > 66014933)
			{
				$qry = $phpBB->query("SELECT s.stationName FROM " . $mysql_eve_dbDump . ".staStations AS s WHERE s.stationID=" . ($id-6000001));
				if($row=$qry->fetch_object())
					$stations[$id] = $row->stationName;
				else
					$stations[$id] = "Unknown " . $id;
			}
			else if(66014934 < $id && $id > 67999999)
			{
				$qry = $phpBB->query("SELECT c.stationName FROM " . $mysql_yapeal_db . ".eveConquerableStationList AS c WHERE c.stationID=" . ($id-6000000));
				if($row=$qry->fetch_object())
					$stations[$id] = $row->stationName;
				else
					$stations[$id] = "Unknown " . $id;
			}
			else if(60014861 < $id && $id > 60014928)
			{
				$qry = $phpBB->query("SELECT c.stationName FROM " . $mysql_yapeal_db . ".eveConquerableStationList AS c WHERE c.stationID=" . ($id));
				if($row=$qry->fetch_object())
					$stations[$id] = $row->stationName;
				else
					$stations[$id] = "Unknown " . $id;
			}
			else if(60000000 < $id && $id > 61000000)
			{
				$qry = $phpBB->query("SELECT s.stationName FROM " . $mysql_eve_dbDump . ".staStations AS s WHERE s.stationID=" . ($id));
				if($row=$qry->fetch_object())
					$stations[$id] = $row->stationName;
				else
					$stations[$id] = "Unknown " . $id;
			}
			else if($id >= 61000000)
			{
				$qry = $phpBB->query("SELECT c.stationName FROM " . $mysql_yapeal_db . ".eveConquerableStationList AS c WHERE c.stationID=" . ($id));
				if($row=$qry->fetch_object())
					$stations[$id] = $row->stationName;
				else
					$stations[$id] = "Unknown " . $id;
			}
			else
			{
				$qry = $phpBB->query("SELECT m.itemName FROM " . $mysql_eve_dbDump . ".mapDenormalize AS m WHERE m.itemID=" . ($id));
				if($row=$qry->fetch_object())
					$stations[$id] = $row->itemName;
				else
					$stations[$id] = "Unknown " . $id;
			}
		}
		return $stations[$id];
	}
?>
