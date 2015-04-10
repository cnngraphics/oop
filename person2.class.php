<?php

class Person{

	private $name;

	function setName($name){
		$this->name = $name;

	}


	function getName(){
		
		return $this->name;
	}

};

//instantiate object from the class

$judy = new Person();

//$judy is now an object that can call the class's functions like setName or getName
$judy->setName("Judy");

$joe = new Person();
$joe->setName("Joe");

print $judy->getName()."\n";
print $joe->getName()."\n";

//Class Animal

class Animal{
	private $name;
	private $age;


	function setName($name){
		$this->name=$name;
	}

	function setAge($age){
		$this->age=$age;
	}

	//setters*************
	function getName(){
		return $this->name;
	}

	function getAge(){
		return $this->age;
	}
}

$animal1 = new Animal();

	$animal1->setName("Dog");

	$animal1->setAge(3);

//output the value

echo "<BR><BR><BR>Animal class<br>";
print $animal1->getName();
print $animal1->getAge();

$animal2 = new Animal();

	$animal2name = $animal2->setAge(6);
	$animal2age = $animal2->setName("Pigeon");

print "\n";
print $animal2name.' is '.$animal2age;


