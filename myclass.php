<?php

class Person{
	
	public $name;

	function setName($name){
		$this->name=$name;
	}

	function getName(){
		return $this->name;
	}


}


//calling instance of Person class

$student = new Person();

	$student->setName("Judy");

	//display name of student
	$retrievedName = $student->getName();

	echo $retrievedName;

	echo "<BR>";

	echo $student->getName();

//second student

$student = new Person();

	$student->setName("Judy");

	//display name of student
	$retrievedName = $student->getName();

	echo $retrievedName;

	echo "<BR>";

	echo $student->getName();