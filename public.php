<?php
//A public access specifier allows the data members and 
//methods to be access from anywhere in the script.
class Customer {
	private $name;
	public $age;
 
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
		echo $this->name;
		echo $this->age;
	}
	
}
 
$c = new Customer("Sunil",28);
echo "Age : " . $c->age; //prints 28
?>