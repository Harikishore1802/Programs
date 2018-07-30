<?php
class Customer {
	private $first_name;
	private $last_name;
	private $outstanding_amount;
 
	public function __construct() {
		$first_name = "";
		$last_name = "";
		$outstanding_amount = 0;
		echo "Constructor Invoked<br/>";
	}
 
	public function setData($first_name, $last_name, $outstanding_amount) {
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->outstanding_amount = $outstanding_amount;
	}
 
	public function printData() {
		
		echo "Name : " . $this->first_name . " " . $this->last_name . "<br/>";
		echo "Outstanding Amount : " . $this->outstanding_amount . "<br/>";
	}
 
}
 
$c1 = new Customer();

$c1->setData("Sunil","Bhatia",10000);
$c1->printData();
?>