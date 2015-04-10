<?php
$filename= "text.txt";

//reading a web page

$url="http://www.printitdown.com/";
$pageread= file($url);

// foreach ($pageread as $key=>$value){
// 	echo $key.' is '.$key;
// }
//print_r($pageread);
var_dump($pageread);


