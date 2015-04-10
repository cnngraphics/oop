<?php

$host="localhost";
$db="oop";
$user="root";
$pass="";

	if (!$link=mysqli_connect($host,$user,$pass,$db)){
		echo 'Could Not Connect to Mysql';
	}

//	$link= mysqli_select_db($link, $db);
	
	if(!$link){
		echo "Could not select Database, Mysqli Error #". mysqli_error(),"Erro: ".mysqli_error();
	}
	else{
		echo "DB Connection Successful";
	}

//if(){;}