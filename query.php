<?php

include ('dbconnect.php');

foreach($db->query("Select * from names") as $row){

	echo htmlentities($row["name"]).' '.htmlentities($row['postcode'])."<br/>";

}

