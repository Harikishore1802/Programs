<?php
class Customer {
 
	private $first_name;
	private $last_name;
	private $outstanding_amount;
 
	public function __construct() {
		$first_name = "";
		$last_name = "";
		$outstanding_amount = 0;
		echo "constructor function invoked when an object is created<br/>";
	}
 
	public function setData($first_name, $last_name, $outstanding_amount) {
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->outstanding_amount = $outstanding_amount;
	}
 
	public function printData() {
		echo "Name : " . $this->first_name. " " . $this->last_name . "\n";
		echo "Outstanding Amount : " . $this->outstanding_amount . "\n";
	}
 
}
 
class Order {
	private $order_id;
	private $customer;
 
	public function __construct($order_id) {
		$this->order_id = $order_id;
		
		echo "$this->order_id<br/>";
	}
 
	public function __destruct() {
		unset($this->order_id);
		unset($this->customer);
		echo "object destruction done";
	}
}
 
$order_id = "L0001";
$c1 = new Customer();
$c1->setData("Sunil","Bhatia",0);
$c1->printData();
$o = new Order($order_id);
?>