<?php

include 'dbconnect.php';
//in db connect.php we instatiated a $db object for the connection. That is used to query db

$statement= $db->query("select * FROM testdb");

//now lets work with $stament object using fetch

$results= $statement->fetch();

var_dump($results);