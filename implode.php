<?php

$array_to_implode= array("name", 'email', 'address');

$imploded = implode(",", $array_to_implode);

echo $imploded;

echo "<br>";

$pieces = explode("," , $imploded);

echo "<pre>";
print_r($pieces);

echo "</pre>";

//check existence of a file//

if (!file_exists(__DIR__.'/oop.php')){
	echo "oop.php does not exists";
}
else{echo "oop.php is there in folder: ".__DIR__;}

//getting just folder name
echo "<br>";
echo "<br>";

$root = __DIR__;
echo $root;

//explode root

$parts= explode('\\', $root);

echo "<pre>";
print_r($parts);

echo "</pre>";

//getting to last element of the array


echo "<br>";
echo "<br>";
$first_element = array_slice($parts, 1, 1, true);

print_r($first_element);

echo "<br>";
echo "<br>";
$last_element = array_slice($parts, -1, 1, true);
print_r($last_element);