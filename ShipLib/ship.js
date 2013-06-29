function selectText(element) {
    var doc = document;
    var text = doc.getElementById(element);    

    if (doc.body.createTextRange) { // ms
        var range = doc.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if (window.getSelection) { // moz, opera, webkit
        var selection = window.getSelection();            
        var range = doc.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    }
}

function insertship(div,dna,extraSkills,skillsDiv,skillsLnk,name)
{

highslot=["left: 75px; top: 90px", "left: 105px; top: 65px", "left: 140px; top: 47px", "left: 178px; top: 37px", "left: 212px; top: 37px", "left: 253px; top: 43px", "left: 287px; top: 63px", "left: 315px; top: 90px"];
medslot=["left: 45px; top: 142px", "left: 37px; top: 180px", "left: 38px; top: 220px", "left: 49px; top: 257px", "left: 69px; top: 290px", "left: 100px; top:315px", "left: 128px; top: 332px", "left: 165px; top: 347px"];
lowslot=["left: 228px; top: 355px", "left: 267px; top: 343px", "left: 300px; top: 320px", "left: 328px; top: 292px", "left: 345px; top: 260px", "left: 355px; top: 223px", "left: 353px; top: 185px", "left: 350px; top: 145px"]; 
rigslot=["left: 120px; top: 228px", "left: 150px; top: 263px", "left: 192px; top: 276px"];
subsystem=["left: 122px; top: 163px","left: 153px; top: 130px","left: 195px; top: 115px","left: 241px; top: 129px","left: 270px; top: 165px"];



    var Url = "../ShipLib/parsedna.php?dna="+dna;
    var ssl = true;
    function compareSkills(a,b) {
        if (a[0] < b[0])
            return -1;
        if (a[0] > b[0])
            return 1;
        if (a[0] = b[0])
        {
            if (a[1] < b[1])
                return 1;
            if (a[1] > b[1])
                return -1;
        }
        return 0;
    }

function CopyToClipboard(text) {
    Copied = text.createTextRange();
    Copied.execCommand("Copy");
}

igb=false;
if(typeof CCPEVE != 'undefined')
    igb=true;

jQuery.get(Url,function(json){
    rig=charge=drone=sub=high=mid=low=""
    shipdisplay="<div id='loadoutBg' style='background-image: url(http://www.fuzzwork.co.uk/ships/fitting.png); height: 420px; width: 420px; position: relative;' onclick=\"CCPEVE.showFitting('"+json["ship"]["dna"]+"')\">";
    shipdisplay+="<div class='shippic' style='position: absolute; height: 64px; width:64px; left: 178px; top:178px;'><img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+json["ship"]["shipid"]+"_64.png' title='"+json["ship"]["shipname"]+"'></div>";


    slot=1;
    for (var i = 0; i < json["high"].length; i++)
    {

        for (var key  in json["high"][i])
        {
            for (var num=0; num<json["high"][i][key];num++)
            {
                parts=key.split(':');
                shipdisplay+="<div class='highSlot"+slot+"' style='position: absolute; height: 32px;"+highslot[slot-1]+"'><img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'></div>";
                high+=parts[0] + "<br>";
                slot++;
            }
        }
   } 


    slot=1;
    for (var i = 0; i < json["medium"].length; i++)
    {

        for (var key  in json["medium"][i])
        {
            for (var num=0; num<json["medium"][i][key];num++)
            {
                parts=key.split(':');
                shipdisplay+="<div class='medSlot"+slot+"' style='position: absolute; height: 32px;"+medslot[slot-1]+"'><img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'></div>";
                mid+=parts[0] + "<br>";
                slot++;
            }
        }
   }



   slot=1;
    for (var i = 0; i < json["low"].length; i++)
    {

        for (var key  in json["low"][i])
        {
            for (var num=0; num<json["low"][i][key];num++)
            {
                parts=key.split(':');
                shipdisplay+="<div class='lowSlot"+slot+"' style='position: absolute; height: 32px;"+lowslot[slot-1]+"'><img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'></div>";
                low+=parts[0] + "<br>";
                slot++;
            }
        }
   }







 slot=1;
    for (var i = 0; i < json["rig"].length; i++)
    {

        for (var key  in json["rig"][i])
        {
            for (var num=0; num<json["rig"][i][key];num++)
            {
                parts=key.split(':');
                shipdisplay+="<div class='rigSlot"+slot+"' style='position: absolute; height: 32px;"+rigslot[slot-1]+"'><img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'></div>";
                rig+=parts[0] + "<br>";
                slot++;
            }
        }
   }

 slot=1;
    for (var i = 0; i < json["subsystem"].length; i++)
    {

        for (var key  in json["subsystem"][i])
        {
            for (var num=0; num<json["subsystem"][i][key];num++)
            {
                parts=key.split(':');
                shipdisplay+="<div class='subsystem"+slot+"' style='position: absolute; height: 32px;"+subsystem[slot-1]+"'><img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'></div>";
                sub+=parts[0] + "<br>";
                slot++;
            }
        }
   }
   shipdisplay+="</div><div style='overflow:auto;width:420px;background-color:#595959;color:white' onclick=\"CCPEVE.showFitting('"+json["ship"]["dna"]+"')\">"
   shipdisplay+="<div class='droneHolder' style='float:left;width:50%'>";
   for (var i = 0; i < json["drones"].length; i++)
   {
      for (var key  in json["drones"][i])
      {
         parts=key.split(':');
         shipdisplay+="<div class='drones'>"+json["drones"][i][key]+" <img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'> "+parts[0]+"</div>";
         drone+=parts[0] + " x" + json["drones"][i][key] + "<br>";
         slot++;
      }
   }
   shipdisplay+="</div>";
   shipdisplay+="<div class='chargeHolder'>";
   for (var i = 0; i < json["charges"].length; i++)
   {
      for (var key  in json["charges"][i])
      {
         parts=key.split(':');
         shipdisplay+="<div class='charges'>"+json["charges"][i][key]+" <img src='http"+(ssl?"s":"")+"://image.eveonline.com/InventoryType/"+parts[1]+"_32.png' title='"+parts[0]+"'> "+parts[0]+"</div>";
         charge+=parts[0] + " x" + json["charges"][i][key] + "<br>";
         slot++;
      }
   }
   shipdisplay+="</div>";
   shipdisplay+="<div class='eft'><a href='#' style='color:white;text-decoration:underline;clear:both;display:block;padding-left:10px;' onclick='$(\"#eftInner" + div + "\").toggle();selectText(\"eftInner" + div + "\");event.stopPropagation();return false;'>Eft Fit</a><div id='eftInner" + div + "' style='display:none'>";
   shipdisplay+="[" + json["ship"]["shipname"] + "," + (name==undefined?json["ship"]["shipname"]:name) + "]<br><br>";
   shipdisplay+=low + "<br>";
   shipdisplay+=mid + "<br>";
   shipdisplay+=high + "<br>";
   shipdisplay+=rig + "<br>";
   shipdisplay+=sub + "<br>";
   shipdisplay+=drone + "<br>";
   shipdisplay+="</div></div>";

   skills = json["skills"];
   skills.push.apply(skills, extraSkills);
   skills.sort(compareSkills);
   
   for(i = skills.length-1; i > 0; i--)
      if(skills[i][0] == skills[i - 1][0])
         skills.splice(i, 1);

   skillsDisplay="";
   for(i = 0; i < skills.length; i++)
       skillsDisplay += "<div class='skill'><span class='name'>" + skills[i][0] + "</a></span><span class='level'>" + skills[i][1] + "</span></div>";
   
   if(skillsDiv != undefined)
      document.getElementById(skillsDiv).innerHTML=skillsDisplay;
   if(skillsLnk != undefined)
      $("#" + skillsLnk).click(function(){
	  $("#shipInput").val(JSON.stringify(json["skills"]));
          $("#nameInput").val((name==undefined?json["ship"]["shipname"]:name) + " Required");
	  $("#shipFrm").submit();
      });
   if(window.skillsStorage==undefined)
      window.skillsStorage = {};
   window.skillsStorage[skillsLnk] = [
	json["skills"],
	(name==undefined?json["ship"]["shipname"]:name)
   ];
   document.getElementById(div).innerHTML=shipdisplay;
});



}



