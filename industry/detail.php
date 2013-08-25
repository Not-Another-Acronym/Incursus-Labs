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
	            include("common.php");
				include("indyHeader.php");
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
	                    SELECT c.`itemID`, g.`groupName`, c.`Profit`, c.`Date`, i.`typeName`, b.`researchTechTime`, b.`productionTime`, b.`researchCopyTime`, d.`valueInt`, d.`valueFloat`, b2.`maxProductionLimit`
	                    FROM  `calculatedTheory` c
	                    LEFT JOIN `" . $mysql_eve_dbDump . "`.`invTypes` AS i ON c.`itemID` = i.`typeID`
	                    LEFT JOIN `" . $mysql_eve_dbDump . "`.`invGroups` AS g ON i.`groupID` = g.`groupID`
	                    LEFT JOIN `" . $mysql_eve_dbDump . "`.`invBlueprintTypes` as b ON b.`productTypeID` = i.`typeID`
	                    LEFT OUTER JOIN `" . $mysql_eve_dbDump . "`.`dgmTypeAttributes` as d ON d.`typeID` = b.`productTypeID` AND d.`attributeID` = 422
			    LEFT OUTER JOIN `" . $mysql_eve_dbDump . "`.`invMetaTypes` as m ON m.`typeID` = i.`typeID`
                            LEFT OUTER JOIN `" . $mysql_eve_dbDump . "`.`invBlueprintTypes` as b2 ON b2.`productTypeID` = m.`parentTypeID`
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
