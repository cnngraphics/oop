<?php

try{
$db=new PDO('mysql:host=localhost;dbname=testdb;charset=utf8;','root','');

var_dump($db);
}

catch(Exception $e){
	echo "Error: ".$e->getMessage();
echo "<br/>";
	echo "Error: ".$e->getCode() .' '.$e->getFile();

echo "<br/>";

	//echo "Error: ".$e->getCode();
	echo "Error: ".$e->getFile();
}

