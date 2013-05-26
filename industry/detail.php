<?php
        include("../config.php");
?>
<html>
    <head>
	    <link type="text/css" href="../header.css" rel="stylesheet" />
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
	    <script src="http://code.highcharts.com/highcharts.js"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
	            include("common.php");
				$presets = $_COOKIE["presets"];
				if(empty($presets))
					exit();
				$presets = json_decode($presets);
				if($presets == null || empty($_GET["preset"]) || empty($presets->$_GET["preset"]))
					exit();
				$current = $presets->$_GET["preset"];
	            $db = new mysqli($mysql_host, $mysql_evecentral_username, $mysql_evecentral_password, $mysql_evecentral);
    			print("<div id=\"chart_div\"> </div>");
	            $qry = $db->query("
	                    SELECT c.`itemID`, g.`groupName`, c.`Profit`, c.`Date`, i.`typeName`, b.`researchTechTime`, b.`productionTime`, b.`researchCopyTime`, d.`valueInt`, d.`valueFloat`
	                    FROM  `calculatedTheory` c
	                    LEFT JOIN `naa_dbdump`.`invTypes` AS i ON c.`itemID` = i.`typeID`
	                    LEFT JOIN `naa_dbdump`.`invGroups` AS g ON i.`groupID` = g.`groupID`
	                    LEFT JOIN `naa_dbdump`.`invBlueprintTypes` as b ON b.`productTypeID` = i.`typeID`
	                    LEFT OUTER JOIN `naa_dbdump`.`dgmTypeAttributes` as d ON d.`typeID` = b.`productTypeID` AND d.`attributeID` = 422
	                    WHERE c.`itemID` IN (" . $db->escape_string(implode($current,",")) . ")
	                    ORDER BY  `c`.`itemID` DESC,
	                                  `c`.`Date` ASC
	            ");
				$script = writeTable($qry, true);
				print("<script type='text/javascript'>" . $script . "</script>");
	        ?>
        </div>
    </body>
</html>
