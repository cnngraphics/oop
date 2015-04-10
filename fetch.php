<?php

include('dbconnect.php');

$stmt=$db->query("Select * from names");


echo "<br>";

	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){

		//echo htmlentities($row["name"]).' '.htmlentities($row['postcode'])."<br/>";

		echo "<pre>";
		var_dump($row);

	}

echo "<br>";
echo "<br>";
