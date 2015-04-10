<?php

try{

	$db= new PDO('mysql:host=localhost;dbname=testdb;charset=utf8','root','');

	//var_dump($db);
	}

catch (Exception $e){  
	//$e could be anything be $e is common. $e is now and object with methods that can be accessed
	echo "Error occured: ".$e->getMessage();
}








?>