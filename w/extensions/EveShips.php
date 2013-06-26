<?php
 
// Take credit for your work.
$wgExtensionCredits['parserhook'][] = array(
 
   // The full path and filename of the file. This allows MediaWiki
   // to display the Subversion revision number on Special:Version.
   'path' => __FILE__,
 
   // The name of the extension, which will appear on Special:Version.
   'name' => 'Eve Ship Parser',
 
   // A description of the extension, which will appear on Special:Version.
   'description' => 'Parses eve ship tags',
 
   // Alternatively, you can specify a message key for the description.
   'descriptionmsg' => 'eveships-desc',
 
   // The version of the extension, which will appear on Special:Version.
   // This can be a number or a string.
   'version' => 1, 
 
   // Your name, which will appear on Special:Version.
   'author' => 'Aaron Aichlmayr',
 
   // The URL to a wiki page/web page with information about the extension,
   // which will appear on Special:Version.
   'url' => 'https://www.mediawiki.org/wiki/Manual:Parser_functions',
 
);
 
// Specify the function that will initialize the parser function.
$wgHooks['ParserFirstCallInit'][] = 'EveShipSetupParserFunction';
 
// Allow translation of the parser function name
$wgExtensionMessagesFiles['EveShipsExtension'] = dirname( __FILE__ ) . '/EveShips.i18n.php';
 
// Tell MediaWiki that the parser function exists.
function EveShipSetupParserFunction( &$parser ) {
 
   // Create a function hook associating the "example" magic word with the
   // ExampleExtensionRenderParserFunction() function. See: the section 
   // 'setFunctionHook' below for details.
   $parser->setFunctionHook( 'eveShips', 'EveShipRenderParserFunction' );
 
   // Return true so that MediaWiki continues to load extensions.
   return true;
}
 
// Render the output of the parser function.
function EveShipRenderParserFunction( $parser ) {
	static $first = true;
	$num = func_num_args();
    if($num < 1)
   		$output = "You must at least supply the ship dna";
	else {
		$randNumber = rand(0,1000);
		if($first)
		{
			$first = false;
                        $output = 
				"<script type='text/javascript' src='../ShipLib/ship.js'></script>" .
				"<style type='text/css'>/*StupidWiki 
					/**/
					.ship
					{
						float:left;
					}
					.skill
					{
						float:left;
					}
					.skills
					{
						overflow: auto;
						border-top:1px solid black;
					}
					.skillWrapper
					{
						padding-left:430px;
					}
					.skill .name
					{
						text-align:right;
						width:270px;
						display:inline-block;
						white-space:nowrap;
					}
					.skill .name:after
					{
						content: ':';	
					}
				</style>
				<form action='../ShipLib/genXml.php' method='post' target='shipInput' id='shipFrm'>
				   <input type='hidden' name='json' value='' id='shipInput' />
				   <input type='hidden' name='name' value='' id='nameInput' />
				</form>
				<iframe name='shipInput' id='shipInput' src='about:blank' style='display:none'></iframe>
			";
		}
		else
			$output = "";
		$stage = 0;
		$required = array();
		$recommended = array();
		$perfect = array();
		for($i = 2;$i < $num; $i++)
		{
			$arg = func_get_arg( $i );
			if($arg == "[Recommended]")
				$stage = 1;
			else if($arg == "[Perfect]")
				$stage = 2;
			else {
				$i++;
				$lvl = func_get_arg( $i );
				if($stage == 0)
					$required[$arg] = $lvl;
				else if($stage == 1)
					$recommended[$arg] = $lvl;
				else if($stage == 2)
					$perfect[$arg] = $lvl;
			}
		}
		$output .= "<div class='ship' id='Ship" . $randNumber . "'>&nbsp;</div><div class='skillWrapper'><a href='#' onclick='return false;' id='SkillsLnk" . $randNumber . "'>Required</a><div class='skills' id='Skills" . $randNumber . "'>&nbsp;</div><script type='text/javascript'>insertship('Ship" . $randNumber . "','" .
			func_get_arg( 1 ) . "',[";
		foreach($required as $i=>$v)
			$output .= "['" . $i . "','" . $v . "'],";
		$output .= "],'Skills" . $randNumber . "','SkillsLnk" . $randNumber . "','" . $parser->recursiveTagParse("{{FULLPAGENAME}}") . "');</script>";
		$output .= "<a href='#' onclick='" .
                                "skills=window.skillsStorage[\"SkillsLnk" . $randNumber . "\"][0];";
                foreach($recommended as $i => $v)
                {
                    if($first)
                    {
                        $output.= "skills.push([\"" . $i . "\",\"" . $v . "\",\"remap\"]);";
                        $first = false;
                    }
                    else
                        $output .= "skills.push([\"" . $i . "\",\"" . $v . "\"]);";
                }
		$output .=  "$(\"#shipInput\").val(JSON.stringify(skills));" .
                            "$(\"#nameInput\").val(window.skillsStorage[\"SkillsLnk" . $randNumber . "\"][1] + \" Recommended\");" .
                            "$(\"#shipFrm\").submit();" .
                            "return false;".
                            "'>Recommended</a><div class='skills'>";
		foreach($recommended as $i => $v)
			$output .= "<div class='skill'><span class='name'>" . $i . "</span><span class='level'>" . $v . "</span></div>";
		$output .= "</div><a href='#' onclick='" .
                                "skills=window.skillsStorage[\"SkillsLnk" . $randNumber . "\"][0];";
		$first=true;
                foreach($recommended as $i => $v)
		{
		    if($first)
                    {
                        $output.= "skills.push([\"" . $i . "\",\"" . $v . "\",\"remap\"]);";
                        $first = false;
                    }
                    else
                        $output .= "skills.push([\"" . $i . "\",\"" . $v . "\"]);";
                }
                $first=true;
		foreach($perfect as $i => $v)
                {
                    if($first)
                    {
                        $output.= "skills.push([\"" . $i . "\",\"" . $v . "\",\"remap\"]);";
                        $first = false;
                    }
                    else
                        $output .= "skills.push([\"" . $i . "\",\"" . $v . "\"]);";
                }
                $output .=  "$(\"#shipInput\").val(JSON.stringify(skills));" .
                            "$(\"#nameInput\").val(window.skillsStorage[\"SkillsLnk" . $randNumber . "\"][1] + \" Perfect\");" .
                            "$(\"#shipFrm\").submit();" .
                            "return false;".
                            "'>Perfect</a><div class='skills'>";
		foreach($perfect as $i => $v)
			$output .= "<div class='skill'><span class='name'>" . $i . "</span><span class='level'>" . $v . "</span></div>";
		$output .= "</div></div>";
	}
    return array( $output, 'noparse' => true, 'isHTML' => true );
}
