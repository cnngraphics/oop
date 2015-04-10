<?php

$host="localhost";
$db="pid";
$user="root";
$pass="";
$dbconnect = NEW PDO("mysql:dbname=$db;host=$host; charset=utf8","root","");

//query and display

foreach($dbconnect->query('Select `name` FROM `jos_users`') as $row){

	var_dump($row);
}