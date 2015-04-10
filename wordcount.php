<?php

$str= 'We make our own 100% products from (T.B.O) WHICH STAND FROM body oil . tbo shampoo, tbo body cream. this product helps';

if (str_word_count($str)>= 3 ) echo"More than three words";

//display first three words:

$exploded= explode(" ", $str);
	
	echo "<Pre>";
	//print_r($exploded);

foreach ($exploded as $wordkey=>$wordvalue){
	
	if ($wordkey<=2){
		
		$threewords = array();
		//print_r($threewords);
		
		$threewords[]=$wordvalue;
		
		print_r($threewords);
		
		
		echo $wordvalue." ";
		// funtion user_login($userName, $password){
		// 	if(!$user_has_logged_in){
		// 		//show the login form in pop-up

		// 		loginform();
		// 		hide_main_menu();
		// 	}
		// }
		
		//arrange three words;
// 		$threewords = implode(" ", $wordvalue);
// 		echo $threewords;
		
	}
	
}
echo "...<BR><BR>";

print_r(str_word_count("Hello world & good morning!",1));
print "<br></pre>"; 
print_r(str_word_count("Hello world & good morning!",1,"&"));

