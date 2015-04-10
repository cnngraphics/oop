<?php
//retreiving data

include ('dbconnect3.php');

$data = $dbconnect->query('Select* from mytable', PDO::FETCH_NUM);

var_dump($data);



// //with foreach

	echo "<br>";echo "<br>";

for ($i=1; $i<=100; $i++){



	foreach ($data as $key ) {
		# code...

		//echo "<pre>";
		//var_dump($key);

 		echo $i.'- ';

		echo htmlentities($key[1]).' is at ZIP CODE: '.htmlentities($key[2]);
		echo "<br>";


		
			$i++;
			if ($i==100){
				echo "Total Count: $i";
				exit();
			}

		echo "<br>";
		echo "<br>";
		echo count($key);
	}
}






