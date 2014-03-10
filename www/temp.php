<?php


$group = array($person1, $person2, $person3, $person4, $person5, $person6);
$query = $_GET['person'] ? $_GET['person'] : "Error";
$cout = "";
if($_GET['person'] < count($group)){
foreach ($group[$query] as $key => $value) {
	$cout .= $key;
	$cout .= "+++";
	$cout .= $value;
}
$cout .= "<br><br>";
foreach ($group[$query+1] as $key => $value) {
	$cout .= $key;
	$cout .= "+++";
	$cout .= $value;
}
echo $cout;
}
else echo "Херня какая-то вышла!";
		?>	