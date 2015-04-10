<?php

include('dbconnect.php');

$stmt=$db->query("Select * from names");

$results=$stmt->fetchall();

echo "<br>";

		foreach ($results as $row) {
			$name= htmlentities($row[1]);
			$postcode= htmlentities($row[2]);
			echo $name.' '.$postcode.'<br>';
		}

		
echo "<br>";
echo "<br>";
