<?php

class Person {
	function say_hello() {
		echo "Hello from inside a class.<br />";
	}
}
$a = new Person();
$person2 = new Person();

echo get_class($a) . "<br />";

if(is_a($a, 'Person')) {
	echo "Yup, it's a Person.<br />";
} else {
	echo "Not a Person.<br />";
}
$a->say_hello();
$person2->say_hello();
?>