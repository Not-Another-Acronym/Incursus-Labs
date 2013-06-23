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
$wgExtensionMessagesFiles['EveShipsExtension'] = dirname( __FILE__ ) . '/EveShip.i18n.php';
 
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
	$num = func_num_args();
    if($num < 1)
   		$output = "You must at least supply the ship dna";
	else {
		$randNumber = rand(0,1000);
	    $output = "<div id='Ship" . $randNumber . "'>&nbsp;</div><script type='text/javascript'>insertship('ship','" . func_get_arg( 0 ) . "');</script>";
		$stage = 0;
		$required = array();
		$recommended = array();
		$perfect = array();
		for($i = 1;$i < $num; $i++)
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
		$output .= "Required<br>";
		foreach($required as $i => $v)
			$output .= $i . ":" . $v . "<br>";
		$output .= "Recommended<br>";
		foreach($recommended as $i => $v)
			$output .= $i . ":" . $v . "<br>";
		$output .= "Perfect<br>";
		foreach($perfect as $i => $v)
			$output .= $i . ":" . $v . "<br>";
	}
 
    return $output;
}