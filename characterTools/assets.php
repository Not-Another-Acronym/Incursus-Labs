<?php
        include("../config.php");
		include("../apiSync/syncPermissions.php");
?>
<html>
	<head>
	    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
		<link type="text/css" href="main.css" rel="stylesheet"/>
	</head>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
				$corpAllowed = true;
				include("toolsHeader.php");
	        ?>
			<?php
                if($currentChar != 0)
                {
					include("assetsLib.php");
					$corpseQry = null;
					if($isCorp)
						$corpseQry = $yapeal->query("
		                    SELECT a.rgt, a.lft
		                    FROM  corpAssetList as a 
		                    WHERE a.ownerID = " . $corpID . " AND a.lvl = 0"
		                );
					else
		                $corpseQry = $yapeal->query("
		                    SELECT a.rgt, a.lft
		                    FROM  charAssetList as a 
		                    WHERE a.ownerID = " . $currentChar . " AND a.lvl = 0"
		                );
					if($corpseRow = $corpseQry->fetch_object())
					{
						$result = getAssets($corpseRow->lft, $corpseRow->rgt, 1, $currentChar, $corpID, $yapeal, $isCorp);
						print("<table>");
						print("<thead><tr><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Flag</th><th>#</th><th>Name</th><th>Station</th><th>Amount Held</th></tr></thead><tbody>");
						print_rows($result, "", $phpBB);
						print("</tbody></table>");
					}
				}
			?>
			<div style='clear:both'>&nbsp;</div>
        </div>
    </body>
</html>
