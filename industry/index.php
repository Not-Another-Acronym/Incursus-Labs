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
	    <script type="text/javascript" charset="utf8" src="index.js"></script>
    </head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
	            include("common.php");
				include("indyHeader.php");
	            $db = new mysqli($mysql_host, $mysql_evecentral_username, $mysql_evecentral_password, $mysql_evecentral);
	            $qry = $db->query("
	                    SELECT c.`itemID`, g.`groupName`, c.`Profit`, c.`Date`, i.`typeName`, b.`researchTechTime`, b.`productionTime`, b.`researchCopyTime`, d.`valueInt`, d.`valueFloat`, b2.`maxProductionLimit`
	                    FROM  `calculatedTheory` c
	                    LEFT JOIN `' . $mysql_eve_dbDump . '`.`invTypes` AS i ON c.`itemID` = i.`typeID`
	                    LEFT JOIN `' . $mysql_eve_dbDump . '`.`invGroups` AS g ON i.`groupID` = g.`groupID`
	                    LEFT JOIN `' . $mysql_eve_dbDump . '`.`invBlueprintTypes` as b ON b.`productTypeID` = i.`typeID`
                            LEFT OUTER JOIN `' . $mysql_eve_dbDump . '`.`dgmTypeAttributes` as d ON d.`typeID` = i.`typeID` AND d.`attributeID` = 422
			    LEFT OUTER JOIN `' . $mysql_eve_dbDump . '`.`invMetaTypes` as m ON m.`typeID` = i.`typeID`
                            LEFT OUTER JOIN `' . $mysql_eve_dbDump . '`.`invBlueprintTypes` as b2 ON b2.`productTypeID` = m.`parentTypeID`
	                    GROUP BY c.`itemID`
	                    ORDER BY  `c`.`Profit` DESC,
	                                  `c`.`Date` ASC
	            ");
				print("Presets: <span><select id='presets' style='width: 300px;'><option>&nbsp;</option></select></span><button id='preset_save'>Save</button><button id='preset_delete'>Delete</button><button id='preset_detail'>Show Detail View</button> Use Regex: <input type='checkbox' id='use_regex'><br>
Item filter to remove some faction stuff: ^(?!((Serpentis)|(Civilian)|(InterBus)|(Aliastra)|(Guristas)|(Imperial Navy)|(Inner Zone)|(Blood)|(Sansha)|(Dread)|(Domination)|(Angel)|(Quafe)|(True Sansha)|(Shadow)|(Dark Blood)|(Intaki)|(Caldari Navy))).*$");
				writeTable($qry, false)
	        ?>
        </div>
    </body></html>
