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

foreach( $db->query("SELECT * from `jos_users`") as $user){

	echo "- ".$user['name']."<br/>";
}



echo "<br/>";








