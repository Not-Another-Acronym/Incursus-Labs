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
	    <script type="text/javascript">
	    	var ops = {
	    		lt:0,
	    		gt:1,
	    		eq:2,
	    		ne:3,
	    		le:4,
	    		ge:5
	    	}
	    	var types = {
	    		t_int:0
	    	}
	    	var asInitVals = new Array();
	    	Presets = {};
	    	$.cookie.json = true;
	    	filters = {};
	    	if (typeof String.prototype.startsWith != 'function') {
			  // see below for better implementation!
			  String.prototype.startsWith = function (str){
			    return this.indexOf(str) == 0;
			  };
			}
			function updatePresetsDropdown()
			{
				$(".esTextBox").remove();
				$("#presets").css("display","");
				$.each(Presets, function(i){
           			$("#presets").html($("#presets").html() + "<option>" + i + "</option>")
           		});
           		$("#presets").editableSelect().change(function(){
			    	if(Presets[this.value] != undefined)
			    	{
			    		oTable.fnFilter( "(" + Presets[this.value].join(")|(") + ")", 9, true, false );
			    	}
			    	else
			    		oTable.fnFilter( ".*", 9, true, false );
			    })
			}
			function filterTableInner(td, value, index, type, oTable)
	    	{
	    		if(value.startsWith("<"))
	    			filters[index] = [ops.lt, value.substring(1), type];
	    		else if(value.startsWith(">"))
	    			filters[index] = [ops.gt, value.substring(1), type];
	    		else if(value.startsWith("="))
	    			filters[index] = [ops.eq, value.substring(1), type];
	    		else if(value.startsWith("!="))
	    			filters[index] = [ops.ne, value.substring(2), type];
	    		else if(value.startsWith("<="))
	    			filters[index] = [ops.le, value.substring(2), type];
	    		else if(value.startsWith(">="))
	    			filters[index] = [ops.ge, value.substring(2), type];
	    		else
	    		{
	    			filters[index] = undefined;
	    			checked = $("#use_regex").val() == "on";
                	oTable.fnFilter( value, index, checked, !checked );
                	return;
                }
                if(filters[index][1] != "")
                	oTable.fnDraw();
	    	}
	    	function filterTable(td, value, index, oTable)
	    	{
	    		if($($(td).parent()).hasClass("int"))
	    			filterTableInner(td, value, index, types.t_int, oTable)
	    		else
	    		{
	    			checked = $("#use_regex").val() == "on";
                	oTable.fnFilter( value, index,  checked, !checked );
                }
	    	}
	    	
            $.fn.dataTableExt.afnFiltering.push(
    			function( oSettings, aData, iDataIndex ) {
    				for(var i = 0; i < aData.length; i++)
    				{
    					if(filters[i] != undefined)
    					{
    						var a = aData[i]
    						var b = filters[i][1]
    						
    						if(filters[i][2] == types.t_int)
    						{
    							a = parseInt(a.replace(',',''))
    							b = parseInt(b.replace(',',''))
    						}
    						
    						if(filters[i][0] == ops.lt && !(a < b))
    							return false;
    						if(filters[i][0] == ops.gt && !(a > b))
    							return false;
    						if(filters[i][0] == ops.eq && !(a = b))
    							return false;
    						if(filters[i][0] == ops.ne && !(a != b))
    							return false;
    						if(filters[i][0] == ops.le && !(a <= b))
    							return false;
    						if(filters[i][0] == ops.ge && !(a >= b))
    							return false;
    					}
    				}
    				return true;
    			}
			);
			
			(function($) {
                /*
                 * Function: fnGetColumnData
                 * Purpose:  Return an array of table values from a particular column.
                 * Returns:  array string: 1d data array
                 * Inputs:   object:oSettings - dataTable settings object. This is always the last argument past to the function
                 *           int:iColumn - the id of the column to extract the data from
                 *           bool:bUnique - optional - if set to false duplicated values are not filtered out
                 *           bool:bFiltered - optional - if set to false all the table data is used (not only the filtered)
                 *           bool:bIgnoreEmpty - optional - if set to false empty values are not filtered from the result array
                 * Author:   Benedikt Forchhammer <b.forchhammer /AT\ mind2.de>
                 */
                $.fn.dataTableExt.oApi.fnGetColumnData = function ( oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty ) {
                    // check that we have a column id
                    if ( typeof iColumn == "undefined" ) return new Array();

                    // by default we only want unique data
                    if ( typeof bUnique == "undefined" ) bUnique = true;

                    // by default we do want to only look at filtered data
                    if ( typeof bFiltered == "undefined" ) bFiltered = true;

                    // by default we do not want to include empty values
                    if ( typeof bIgnoreEmpty == "undefined" ) bIgnoreEmpty = true;

                    // list of rows which we're going to loop through
                    var aiRows;

                    // use only filtered rows
                    if (bFiltered == true) aiRows = oSettings.aiDisplay;
                    // use all rows
                    else aiRows = oSettings.aiDisplayMaster; // all row numbers

                    // set up data array
                    var asResultData = new Array();

                    for (var i=0,c=aiRows.length; i<c; i++) {
                        iRow = aiRows[i];
                        var aData = this.fnGetData(iRow);
                        var sValue = aData[iColumn];

                        // ignore empty values?
                        if (bIgnoreEmpty == true && sValue.length == 0) continue;

                        // ignore unique values?
                        else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1) continue;

                        // else push the value onto the result data array
                        else asResultData.push(sValue);
                    }

                    return asResultData;
                }
            }(jQuery));


            function fnCreateSelect( aData )
            {
                var r='<select><option value=""></option>', i, iLen=aData.length;
                for ( i=0 ; i<iLen ; i++ )
                {
                    r += '<option value="'+aData[i]+'">'+aData[i]+'</option>';
                }
                return r+'</select>';
            }


            $(document).ready(function() {
                /* Initialise the DataTable */
                var oTable = $('#maintable').dataTable({
                	"bPaginate": false,
			        "bLengthChange": true,
			        "bFilter": true,
			        "bSort": true,
			        "bInfo": true,
			        "bAutoWidth": true,
			        "aoColumnDefs": [
                        { "bSearchable": false, "bVisible": false, "aTargets": [ 9 ] },
                    ]
                });

                /* Add a select menu for each TH element in the table footer */
                $("#maintable #filter .select").each( function () {
                    $td = $(this)
                    this.innerHTML = fnCreateSelect( oTable.fnGetColumnData($td.index()));
                    $('select', this).multiselect({
					   selectedText: "# of # selected"
					}).multiselectfilter().change( function () {
                        oTable.fnFilter( $(this).val(), $td.index() );
                    } );
                } );
                
                $("#maintable #filter .text").each( function () {
                        this.innerHTML = "<input type='text' style='width:100%'>";
                });
                
                $("#maintable #filter .text input").keyup( function () {
			        /* Filter on the column (the index) of this element */
			       filterTable(this, this.value, $($(this).parent()).index(), oTable );
			    } );
			    
			    Presets = $.cookie("presets");
			    if(Presets == undefined)
               		Presets = {};
               	
               	updatePresetsDropdown();
			    
			    $("#preset_save").click(function(){
			    	value = $("#presets").val().trim()
			    	Presets[value] = new Array();
			    	$("#maintable tr.even, #maintable tr.odd").each(function(){value].push(this.id)})
			    	$.cookie("presets", Presets, {expires:365*10});
			    	updatePresetsDropdown();
			    })
			    $("#presets_delete").click(function(){
			    	if(Presets[$("#presets").value] != undefined)
			    		delete Presets[$("#presets").value];
			    	$.cookie("presets", Presets, {expires:365*10});
			    	updatePresetsDropdown();
			    })
            } );
	    </script>
    </head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
	            if($user->data['loginname'] != "waterfoul" && $user->data['loginname'] != "MrWacko" && $user->data['loginname'] != "themastercheif92")
	                    exit();
	            $db = new mysqli($mysql_host, $mysql_evecentral_username, $mysql_evecentral_password, $mysql_evecentral);
	            $qry = $db->query("
	                    SELECT c.`itemID`, g.`groupName`, c.`Profit`, c.`Date`, i.`typeName`, b.`researchTechTime`, b.`productionTime`, b.`researchCopyTime`, d.`valueInt`, d.`valueFloat`
	                    FROM  `calculatedTheory` c
	                    LEFT JOIN `naa_dbdump`.`invTypes` AS i ON c.`itemID` = i.`typeID`
	                    LEFT JOIN `naa_dbdump`.`invGroups` AS g ON i.`groupID` = g.`groupID`
	                    LEFT JOIN `naa_dbdump`.`invBlueprintTypes` as b ON b.`productTypeID` = i.`typeID`
	                    LEFT OUTER JOIN `naa_dbdump`.`dgmTypeAttributes` as d ON d.`typeID` = b.`productTypeID` AND d.`attributeID` = 422
	                    GROUP BY c.`itemID`
	                    ORDER BY  `c`.`Profit` DESC,
	                                  `c`.`Date` ASC
	            ");
				print("Presets: <span><select id='presets' style='width: 300px;'><option>&nbsp;</option></select></span><button id='preset_save'>Save</button><button id='preset_delete'>Delete</button> Use Regex: <input type='checkbox' id='use_regex'>");
				print("<table id='maintable'>
				        <thead><tr>            <th>Item Name</th>    <th>Group</th>        <th>Profit Margin</th>    <th>Profit/Min</th>       <th>Build Time</th>       <th>Invent Time</th>      <th>Copy Time</th>        <th>Total Time/Unit</th>  <th>Date</th>             <th>Item ID</th></tr></thead>
				        <thead><tr id='filter'><th class='text'></th><th class='text'></th><th class='text int'></th><th class='text int'></th><th class='text int'></th><th class='text int'></th><th class='text int'></th><th class='text int'></th><th class='text int'></th><th></th></tr></thead>");
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
	            $totaltime = $copytime/10 + $buildtime + $inventtime/10;
	            $ppm = 0;
	            if($totaltime > 0)
	                $ppm = $row->Profit/$totaltime;
	                        print("<tr id='" . $row->itemID . "'><td>" . $row->typeName . "</td><td>" . $row->groupName . "</td><td>" . number_format($row->Profit,2) . "</td><td>" . number_format($ppm,2) . "</td><td>" . number_format($buildtime,2) . "</td><td>" . number_format($inventtime,2) . "</td><td>" . number_format($copytime,2) . "</td><td>" . number_format($totaltime,2) . "</td><td>" . $row->Date . "</td><td>" . $row->itemID . "</td></tr>");
	                }
	                print("</table>")
	        ?>
        </div>
    </body>
</html>
