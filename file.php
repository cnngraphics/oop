<?php
$filename= "text.txt";

// echo __DIR__."\\".$filename;

// //echo __DIR__;

$str=file_get_contents($filename);
echo $str;

echo "<br>";
echo "<br>";

echo "<PRE>";
//print_r (trim(implode(file($filename))));//implode converts array to string

print_r (file($filename));

echo "</PRE>";

echo "<br>";
echo "<br>";

echo "With Implode:";
echo "<br>";
print_r (trim(implode(file($filename))));//implode converts array to string

echo "<br>";
echo "<br>";

echo "With Join using separator:";
echo "<br>";

$joined= (join('---',file($filename)));//implode converts array to string
echo $joined;


echo "<br>";echo "<br>";
//converted back to array
$delimiter="---";
$converted= explode($delimiter, $joined);

echo "<PRE>";
print_r($converted);
echo "</PRE>";

echo "<br>";echo "<br>";
foreach ($converted as $key=>$value){
	echo $key.' in array exploded is '.$value.'<br>';
}

