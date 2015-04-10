<?php

// function squarex($x){
// 	return $x*$x;
// }

// $sq=squarex(5);
// echo $sq;

echo "<BR>";

// //scope
// function func ()
// {
//  return $var = 2;
// }
// $var = 1;
// echo func();
// print $var;

// echo "<BR>";

function func2 () {
	$GLOBALS["var"] = 2;
	
	}

$var2 = 1;

func2();

print $var2;