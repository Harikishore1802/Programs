<?php

if(isset($_GET['process'])){
	$name=$_GET['name'];
	$email=$_GET['email'];
	$loc=$_GET['address'];
	$gend=$_GET['gend'];
	$city=$_GET['city'];
	echo $name."<br/>";
	echo $email."<br/>";
	echo $loc."<br/>";
	echo $gend."<br/>";
	foreach($city as $new){
			echo $new."<br/>";
	}
}

?>