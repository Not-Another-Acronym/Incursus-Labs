var ops = {
	lt:0,
	gt:1,
	eq:2,
	ne:3,
	le:4,
	ge:5
}
var types = {
	t_int:0,
	t_float:1
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
function updatePresetsDropdown(oTable)
{
	$(".esTextBox").remove();
	$("#presets").css("display","");
	$("#presets").html("<option>&nbsp;</option>")
	$.each(Presets, function(i){
		$("#presets").html($("#presets").html() + "<option>" + i + "</option>")
	});
	$("#presets").editableSelect().change(function(){
    	if(Presets[this.value] != undefined)
    	{
    		oTable.fnFilter( "^((" + Presets[this.value].join(")|(") + "))$", 9, true, false );
    	}
    	else
    		oTable.fnFilter( ".*", 9, true, false );
    })
}
function filterTableInner(td, value, index, type, oTable)
{
	if(value.startsWith("<") || value.startsWith(">") || value.startsWith("=") || value.startsWith("!="))
	{
		value = value.split("&");
		for(var i = 0; i < value.length; i++)
		{
			filters[index] = [];
			if(value[i].startsWith("<"))
				filters[index].push([ops.lt, value[i].substring(1), type]);
			else if(value[i].startsWith(">"))
				filters[index].push([ops.gt, value[i].substring(1), type]);
			else if(value[i].startsWith("="))
				filters[index].push([ops.eq, value[i].substring(1), type]);
			else if(value[i].startsWith("!="))
				filters[index].push([ops.ne, value[i].substring(2), type]);
			else if(value[i].startsWith("<="))
				filters[index].push([ops.le, value[i].substring(2), type]);
			else if(value[i].startsWith(">="))
				filters[index].push([ops.ge, value[i].substring(2), type]);
		}
	}
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
	else if($($(td).parent()).hasClass("float"))
		filterTableInner(td, value, index, types.t_float, oTable)
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
				else if(filters[i][2] == types.t_float)
				{
					a = parseFloat(a.replace(',',''))
					b = parseFloat(b.replace(',',''))
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
    
    if (typeof extraLoad == 'function')
    	extraLoad(oTable)
} );