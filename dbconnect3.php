<?php

try{
$dbconnect= new PDO('mysql:host=localhost;dbname=testdb;charset=utf8','root','');
//echo "Good Connection to DB";
}

catch (Exception $e){
	echo "A db connection error occured: " . $e->getMessage();
}

