<?php

	class Person{
		private $firstName;
		private $lastName;

		function setname($firstName, $lastName){
				$this->firstName=$firstName;
				$this->lastName=$lastName;
		}

		function getname(){
			
			$fullName = $this->firstName." ".$this->lastName;
			return $fullName;
		}
	}

$personObject= new Person();

$personObject->setName("Theo","Marcellus");

Echo $personObject->getName()."\n\r";

$personObject ->setName("Mica","");

Echo $personObject->getName()."\n\r";