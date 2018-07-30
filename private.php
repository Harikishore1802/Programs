<?php
//A private access specifier is used to hide data and member functions. 
//A method or data member declared as private can only be accessed by the class itself and 
//neither the outside program nor the derived class can have access to it.
class Customer {
	private $name;
	public $age;
 
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
		echo "$this->name";
	}
}
 
$c = new Customer("Sunil","28");
echo $c->age;echo "<br/>";
echo "Name : " . $c->name; //causes an error
?>