<?php


// $data = array("name"=>"theo", "age"=>39);

// var_dump($data);

// forearch($data as &$detail){

// 	if($details['name']=="Theo"){
// 		echo $details['name']="Mica";
// 	}

// }

// var_dump($data);




$tm = array(
	"name"=>"theo", 
	"age"=>39
	);

echo "<pre>";
print_r($tm);

echo "</pre>";

	foreach ($tm as $value) {
			
			if ($value[0] === "theo") {
			$value[0] = "Mica";
			}
			echo "<BR>";

			echo $value["name"];
	}
		echo "<BR>";
	
	//print_r($tm);

	//echo $value['name'];