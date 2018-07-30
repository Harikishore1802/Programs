<?php

class Person {
	function say_hello() {
		echo "Hello from inside the class ". get_class($this) .".<br />";
	}
	function hello() {
		$this->say_hello();
	}
}

$a = new Person();
$a->say_hello();
$a->hello();
?>