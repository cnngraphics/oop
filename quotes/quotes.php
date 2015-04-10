<?php


// $option['driver']   = 'mysql';            // Database driver name
// 		$option['host']     = '104.193.110.8';    // Database host name
// 		$option['user']     = 'bsccom';       // User for database authentication
// 		$option['password'] = 'Ix27hjPzzkOo';   // Password for database authentication
// 		$option['database'] = 'xcart465';      // Database name
// 		$option['prefix']   = 'xcart_';             // Database prefix (may be empty)
		


	$host = 'localhost';
	 $user = 'root';
	 $password = '';
	 $db = 'rand';
	 
	 $link = mysqli_connect($host,$user,$password, $db);

	 if (!$link){
	 	echo "unable to connect to DB server";
	 }
	 // else {
	 // 	echo "connection successful";
	 // }

$query ="INSERT INTO `quote`(`id`, 
	`time`, 
	`quote`, 
	`authid`) 
	VALUES ('',
		'CURRDATE()',
		'here is my third quote',
		1)";


if(!mysqli_query($link, $query)){
	echo "Unable to insert into db". mysqli_error($link);
}
else {
	Echo '<span style="padding: 10px; display: block; border: 1px 0 1px 0 solid green; background: skyblue;">success!</span>';
}

$query = "select count(*) from quote;" ;

$result = mysqli_query($link, $query);
echo "<PRE>";
echo "<br>Total Quotes: ", print_r($result);
echo "</pre>";

print $result;

