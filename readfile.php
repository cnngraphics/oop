<?php
//echo readfile("webdictionary.txt");

$handler = fopen("webdictionary.txt", "r");

//echo fread($handler, filesize('webdictionary.txt')-5);

echo filesize('webdictionary.txt');

//read line with fgets 
//after fget, the pointer moves to the second line

$line = fgets($handler);

echo "<br>";

$line = fgets($handler);
echo $line;

echo "<br>";
$line = fgets($handler);
echo $line;

if(is_file("webdictionary.txt")){
	
	echo "Its a file";
	if(!unlink("webdictionary.txt")){
	echo "Unable to delet file";
	}
}
