<?php

$host="localhost";
$db="pid";
$user="root";
$pass="";
$dbconnect = NEW PDO("mysql:dbname=$db;host=$host; charset=utf8","root","");

$stmt = $dbconnect->query("SELECT `name` FROM `jos_users`");

//collect and display

while ($row=$stmt->fetch()){
	echo $row['name']."<br/>";
}