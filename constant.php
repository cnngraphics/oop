<?php

 echo $_SERVER['DOCUMENT_ROOT']; echo "<br>";


 echo $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']; echo "<br>";


 echo $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME']; echo "<br>";

 echo "<br>";

echo $_SERVER['REMOTE_ADDR'];



echo "<pre>";
 print_r($_SERVER);



 echo "<br>";

define('MY_ERROR', 1);

if("MY_ERROR"==1){
	echo "an error occurred";
}

$name = "juddy";
$alias = &$name;
$alias = "Theo";

print $name;

$name = "Mike";
print $alias;

$var = 2;

print "<br>";

print $var++;
print "<br>";

print $var;
print "<br>";


$inc= $var++;
print $inc;

print "<br>";
print $var;

print "<br>";
print ++$var;

print "<br>";

for($i=0; $i<5;++$i){
	echo "hello \n";
}

print "<br>";
print "<br>";


$t= "a2";
//print $t++;

$check = $t ? "a" : "whats?";

print $check;