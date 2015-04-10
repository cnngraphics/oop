<?php

$students = array(
	1 => array(
		'name' => "Theo", 
		'school' =>"ENB"),
	2=>array(
		'name' =>"Mica",
		"school"=>"UNIQUA"
		)

	);

 echo "<pre>";

print_r($students);


foreach($students as &$person){

	if ($person['school'] == "ENB"){
		$person["education level"]= "Niveau Primaire";
	}
	else{
		$person['education level']="Niveau Universitaire";
	}
}

echo "<P><br> After modification of array";
$person['age']=39;

print_r($students);






// $people = array(
// 	1=>array(
// 		"name"=>"Paul",
// 		"age"=>25),
// 	2=>array(
// 		"name"=>"Thony",
// 		"age"=>64
// 		)

// 		);

// foreach ($people as &$person) {
// 	# code...
// 	if ($person['age']>=64){
// 		$person['age group']='Old';
// 	}
// 	else{
// 		$person['age group']="Young";
// 	}

// echo "<pre>";
// 	print_r($people);
// }
