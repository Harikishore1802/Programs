<?php

if(isset($_POST['process'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$loc=$_POST['address'];
	echo $name."<br/>";
	echo $email."<br/>";
	echo $loc;
}

?>