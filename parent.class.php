<?php

	class catFish{
		function __construct(){
			echo " I am the cat fish";
		}
	}

	class Ham extends catFish{

		function __construct(){
			echo "HAM ham Ham ";
		}

	}

	$hamObject = new Ham();



// class Parent {
// 	public $name;
// 	public $sex;
// 	public $address;
// 	public $state;
// }

?>