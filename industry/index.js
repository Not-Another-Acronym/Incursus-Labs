
function extraLoad(oTable){
    Presets = $.cookie("presets");
    if(Presets == undefined)
   		Presets = {};
   	
   	updatePresetsDropdown(oTable);
    
    $("#preset_save").click(function(){
    	value = $("#presets").val().trim()
    	Presets[value] = new Array();
    	$("#maintable tr.even, #maintable tr.odd").filter(":visible").each(function(){Presets[value].push(this.id)})
    	$.cookie("presets", Presets, {expires:365*10});
    	updatePresetsDropdown(oTable);
    })
    $("#preset_delete").click(function(){
    	if(Presets[$("#presets").val()] != undefined)
    		delete Presets[$("#presets").val()];
    	$.cookie("presets", Presets, {expires:365*10});
    	updatePresetsDropdown(oTable);
    })
    $("#preset_detail").click(function(){
    	if(Presets[$("#presets").val()] != undefined)
    		window.location="detail.php?preset=" + $("#presets").val();
    })
}