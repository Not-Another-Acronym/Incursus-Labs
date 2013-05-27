<?php
    if($user->data['loginname'] != "waterfoul" && $user->data['loginname'] != "MrWacko" && $user->data['loginname'] != "themastercheif92")
        exit();
	function writeTable($qry)
	{
		$script = "chartItems = new Array();";
		print("<table id='maintable'>
		        <thead><tr>            <th>Item Name</th>    <th>Group</th>        <th>Profit Margin</th>      <th>Profit/Hr</th>         <th>Build Time</th>         <th>Invent Time</th>        <th>Copy Time</th>          <th>Total Time/Unit</th>    <th>Date</th>               <th>Item ID</th></tr></thead>
		        <thead><tr id='filter'><th class='text'></th><th class='text'></th><th class='text float'></th><th class='text float'></th><th class='text float'></th><th class='text float'></th><th class='text float'></th><th class='text float'></th><th class='text float'></th><th></th></tr></thead>");
        while($row = $qry->fetch_object())
        {
            $buildtime = $row->productionTime/60/60;
	        $inventtime = 0;
	        $copytime = 0;
	        if($row->valueInt == 2 || $row->valueFloat == 2)
	        {
	            $copytime = ($row->researchCopyTime * 2)/60/60;
	            $inventtime = $row->researchTechTime/60/60;
            }
		$modifier = 1;
		if($row->maxProductionLimit != null)
		    $modifier = CEIL($row->maxProductionLimit/10);
	        $totaltime = $copytime/$modifier + $buildtime + $inventtime/$modifier;
	        $ppm = 0;
	        if($totaltime > 0)
	        	$ppm = $row->Profit/$totaltime;
    		$script .= "chartItems.push([\"" . $row->typeName . "\",\"" . $row->Date . "\",\"" . $ppm . "\"]);";
            print("<tr id='" . $row->itemID . "'><td>" . $row->typeName . "</td><td>" . $row->groupName . "</td><td>" . number_format($row->Profit,2) . "</td><td>" . number_format($ppm,2) . "</td><td>" . number_format($buildtime,2) . "</td><td>" . number_format($inventtime,2) . "</td><td>" . number_format($copytime,2) . "</td><td>" . number_format($totaltime,2) . "</td><td>" . $row->Date . "</td><td>" . $row->itemID . "</td></tr>");
    	}
        print("</table>");
		return $script;
	}
?>
