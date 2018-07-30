<?php
class Customer {
	private $name;
 
	public function setName($name) {
		$this->name = $name;
	}
 
	public function getName() {
		return $this->name;
	}
}
 
$c1 = new Customer();
$c1->setName("Sunil");
 
 
 
//$c2 = $c1; //(Object Referencing statement)only reference or memory assigned to $c2

$c2 = clone $c1;//cloned object
$c2->setName("Vishal");

echo $c1->getName()."\n";
echo $c2->getName()."\n";
?>