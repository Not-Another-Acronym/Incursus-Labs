<p><b><?= wfMsg('hacl_grouplist_filter_name') ?></b></p>
<p><input type="text" id="acl_filter" onchange="change_filter()" onkeyup="change_filter()" style="width: 400px" /></p>
<p><b><?= wfMsg('hacl_grouplist_filter_not_name') ?></b></p>
<p><input type="text" id="acl_not_filter" onchange="change_filter()" onkeyup="change_filter()" style="width: 400px" /></p>

<div id="acl_list" style="border: 1px solid gray; width: 500px; height: 500px; padding: 5px; overflow-y: scroll; overflow: -moz-scrollbars-vertical; float: left"></div>

<div style="clear: both"></div>
<script language="JavaScript" src="<?= $haclgHaloScriptPath ?>/scripts/exAttach.js"></script>
<script language="JavaScript">
mw.loader.load("//" + window.location.host + "/w/load.php?debug=false&lang=en&modules=mediawiki.util", 'text/javascript');
mw.loader.load("//" + window.location.host + "/w/load.php?debug=true&lang=en&modules=startup&only=scripts&skin=vector", 'text/javascript');
function change_filter(chk)
{
    if(startUp != null)
    {
	var s = startUp;
	startUp = null;
        setTimeout(s,1);
    }
    sajax_do_call('haclGrouplist', [ document.getElementById('acl_filter').value, document.getElementById('acl_not_filter').value ],
        function(request) { document.getElementById('acl_list').innerHTML = request.responseText; }
    );
}
exAttach(window, 'load', function() { setTimeout(change_filter, 3000); });
</script>
