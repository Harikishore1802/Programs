<?php
//session_start();
class Person {
	
	var $first_name;
	var $last_name;
	
	var $arm_count = 2;
	var $leg_count = 2;
	
	function say_hello() {
		echo "Hello from inside the class ". get_class($this) .".<br />";
	}
	function full_name() {
		echo "$this->first_name" . " " . "$this->last_name";
	}
}

$a = new Person();
echo $a->arm_count ."<br />";
$a->arm_count = 3;
$a->first_name = 'Lucy';
$a->last_name = 'Ricardo';

$new_person = new Person();
$new_person->first_name = 'Ethel';
$new_person->last_name = 'Mertz';

$a->full_name() ."<br />";
$new_person->full_name() ."<br />";

$vars = get_class_vars('Person');
foreach($vars as $var => $value) {
	echo "{$var}: {$value}<br />";
}

echo property_exists('Person', 'first_name') ? 'test' : 'hjkl';//ternary operation

?>