<?
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
require_once('db.inc.php');

function getSkills($itemID)
{
    global $skills, $skillNames, $skillLevels, $dbh;
    $sql = "
        SELECT Skills.typeID as ID, Skills.typeName AS name, coalesce(SkillLevel.valueInt, SkillLevel.valueFloat) AS level
        FROM dgmTypeAttributes AS SkillName
        INNER JOIN invTypes AS Skills ON Skills.typeID = SkillName.valueInt AND
            (
                SkillName.attributeID = 182 OR SkillName.attributeID = 183 OR SkillName.attributeID = 184 OR
                SkillName.attributeID = 1285 OR SkillName.attributeID = 1289 OR SkillName.attributeID = 1290
            )
        INNER JOIN dgmTypeAttributes AS SkillLevel ON SkillLevel.typeID = SkillName.typeID AND (SkillLevel.attributeID = 277 OR
            SkillLevel.attributeID = 278 OR SkillLevel.attributeID = 279 OR SkillLevel.attributeID = 1286 OR
            SkillLevel.attributeID = 1287 OR SkillLevel.attributeID = 1288)
        WHERE
            SkillName.typeID = ? AND
            ((SkillName.attributeID = 182 AND SkillLevel.attributeID = 277) OR
            (SkillName.attributeID = 183 AND SkillLevel.attributeID = 278) OR
            (SkillName.attributeID = 184 AND SkillLevel.attributeID = 279) OR
            (SkillName.attributeID = 1285 AND SkillLevel.attributeID = 1286) OR
            (SkillName.attributeID = 1289 AND SkillLevel.attributeID = 1287) OR
            (SkillName.attributeID = 1290 AND SkillLevel.attributeID = 1288))
    ";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($itemID));
    while ($row = $stmt->fetchObject())
    {
        $skills[]=array($row->name,$row->level);
        $skillNames[]=$row->name;
        $skillLevels[]=$row->level;
	getSkills($row->ID);
    }

}
$dna=$_GET['dna'];

$array=explode(":",$dna);


$high=array();
$med=array();
$low=array();
$subsystem=array();
$ammo=array();
$rig=array();


$innertypelist=array();
foreach ( $array as $value)
{
    $types=explode(";",$value);
    if ($types[0])
    {
        $innertypelist[]=$types[0];
    }
}


#$sql='select invTypes.typeid,typename,COALESCE(effectid,1) effectid from invTypes left join dgmTypeEffects on (dgmTypeEffects.typeid=invTypes.typeid and effectid in (11,12,13,2663,3772)) where invTypes.typeid=?';
$sql='select invTypes.typeid,typename,COALESCE(effectid,categoryID) effectid from invTypes left join dgmTypeEffects on (dgmTypeEffects.typeid=invTypes.typeid and effectid in (11,12,13,2663,3772)), invGroups where invTypes.typeid=? and invTypes.groupid=invGroups.groupid';
$stmt = $dbh->prepare($sql);

$typenames=array();
$typeslot=array();
foreach ($innertypelist as $value)
{
    $stmt->execute(array($value));

    if ($row = $stmt->fetchObject())
    {
        $typenames[$row->typeid]=$row->typename;
        $typeslot[$row->typeid]=$row->effectid;
    }
}

$shiptype='';
$shipid='';
$charges=array();
$drones=array();
$skills=array();
$skillNames=array();
$skillLevels=array();
foreach ( $array as $value)
{
    $types=explode(";",$value);
    if ($types[0])
    {
        switch($typeslot[$types[0]])
        {
	case 18:
            $drone[]=array($typenames[$types[0]].":".$types[0]=>(int)$types[1]);
            break;
        case 8:
            $charges[]=array($typenames[$types[0]].":".$types[0]=>(int)$types[1]);
            break;
        case 6:
            $shipid=$types[0];
            $shiptype= $typenames[$shipid];
            break;
        case 11:
            $low[]=array($typenames[$types[0]].":".$types[0]=>(int)$types[1]);
            break;
        case 12:
            $high[]=array($typenames[$types[0]].":".$types[0]=>(int)$types[1]);
            break;
        case 13:
            $med[]=array($typenames[$types[0]].":".$types[0]=>(int)$types[1]);
            break;
        case 2663:
            $rig[]=array($typenames[$types[0]].":".$types[0]=>(int)$types[1]);
            break;
        case 3772:
            $subsystem[]=array($typenames[$types[0]].":".$types[0]=>1);
            break;
        } 
    }
    getSkills($value);
}
array_multisort($skillNames,$skillLevels,$skills);
for($i = count($skills)-1; $i > 0; $i--)
    if($skills[$i][0] == $skills[$i-1][0])
	array_splice($skills, $i, 1);
$json=array();
$json["ship"]=array("shipname"=>$shiptype,"shipid"=>$shipid,"dna"=>$dna);
$json["high"]=$high;
$json["medium"]=$med;
$json["low"]=$low;
$json["rig"]=$rig;
$json["subsystem"]=$subsystem;
$json["skills"]=$skills;
$json["drones"]=$drone;
$json["charges"]=$charges;

echo json_encode($json);

?>
