<?php

$password = 'Mathhaiti1975***';
$salt= 19753056239299;
  $encrypted=crypt($password, $salt);

$blowfish_encrypted = crypt($password, $salt);

  echo "Encrypted is: ".$encrypted;
echo "</br>";

echo "With Blowfish: ".$blowfish_encrypted;

  
  	if(hash_equals($password, $encrypted)==true){
  		echo "hash_equals verified the values of expected and known to be equals";
  	}