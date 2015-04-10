<?php

include ('dbconnect.php');

$stmt=$db->query("Select * from names");

var_dump($stmt);


while ($row=$stmt->fetch()){

	echo htmlentities($row["name"]).' '.htmlentities($row['postcode'])."<br/>";

}

