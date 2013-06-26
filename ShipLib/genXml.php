<?php
    // We'll be outputting a PDF
    header('Content-type: text/xml');

    // It will be called downloaded.pdf
    header('Content-Disposition: attachment; filename="' . $_POST["name"] . '.xml"');
?>
<?php include("db.inc.php"); ?>
<?php print('<?xml version="1.0"?>'); ?>
<plan xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" name="<?php print($_POST["name"]); ?>" owner="7d6eab7f-8b18-4113-898d-a0322b224818" revision="4081">
  <sorting criteria="None" order="None" groupByPriority="false" />
  <?php
    $skills = json_decode($_POST["json"]);
    $stmt = $dbh->prepare("SELECT typeID, typeName FROM invTypes WHERE invTypes.typename LIKE ?;");
    foreach($skills as $v)
    {
	$stmt->execute(array(trim($v[0])));
	if($row = $stmt->fetchObject())
	{
            print('<entry skillID="' . $row->typeID . '" skill="' . $row->typeName . '" level="' . $v[1] . '" priority="3" type="Planned">');
            if(!empty($v[2]) && $v[2] == 'remap')
                print('<remapping description="" cha="0" wil="0" mem="0" int="0" per="0" status="NotComputed"/>');
	    print('</entry>');
	}
    }
  ?>
</plan>
