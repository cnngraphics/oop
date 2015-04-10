<?php

try{

$dbconnect= new PDO("mysql:dbhost=localhost;dbname=testdb;charset=utf8","root","");
//echo "db connection successful";

var_dump($dbconnect);

}
catch(Exception $e){
	echo $e->getMessage();
}

//retrive data

$data = $dbconnect->query("Select * from `name`", PDO::FETCH_NUM);
$results= $row->fetch();
var_dump($results);


foreach ($row as $key => $value) {
	# code...
	echo $value."<br>";
}


?>