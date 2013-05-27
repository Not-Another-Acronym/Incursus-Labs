<?php
        include("../config.php");
?>
<html>
    <body>
    	<div id="wrap">
	        <?php
	            define('IN_PHPBB', true);
	            include("../header.php");
				include("toolsHeader.php")
	        ?>
	        <div class="forumbg">
			    <div class="inner"><span class="corners-top"><span></span></span>
			    <div class="solidblockmenu">
			        <ul>
			        	<?php
			        		var_dump($user)
			        	?>
			        </ul>
			    </div>
			    <span class="corners-bottom"><span></span></span></div>
			</div>
        </div>
    </body>
</html>
