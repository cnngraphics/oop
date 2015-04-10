<?php

$db ="pid";
$host="localhost";
$user="root";
$pass="";

try{
$db = new PDO("mysql:host=$host;dbname=$db; charset=utf8","$user","$pass");
echo "Connection Success<br/>";
	}

catch(EXCEPTION $e){
	echo "could not connect to DB";
}
echo "<br/>";
echo "Users are: <br/>";
echo "<br/>";

$stmt= $db->query("SELECT `name` from `jos_users` LIMIT 105");

while ($row = $stmt->FETCH()) {
	//echo "- ".$user['name']."<br/>";
	print_r($row);

	//var_dump($row)."<br/>";
}


echo "<br/>";