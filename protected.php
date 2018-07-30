<?php
//A protected access specifier allows the derived class to access the data member or member functions of the base class, 
//whereas disallows global access to other objects and functions.
class Person {
	protected $name;
	
}
 
class Customer extends Person {
	
	function setName($name) {
		//this works as $name is protected in Person
		$this->name=$name;
		echo $this->name;
	}
}
 
$c1 = new Customer();
//$c1->name;
$c1->setName("Sunil");
$c1->name = "Sun"; //this causes error as $name is protected and not public
?>