<?php
//function definition
//function calling

function fun1(){
	echo "Welcome to Functions<br/>";
}

fun1();

//function with single argument

function fun2($name){
	echo"$name is a Doctor<br/>";
}

fun2("Raja");

$a="Prabha";

fun2($a);

//function with multiple arguments

function fun3($a,$b){
	$res=$a+$b;
	echo $res."<br/>";
}

fun3(50,70);

$num1=100;
$num2=50;

fun3($num1,$num2);

//function with return type

function fun4($p,$q,$r){
	$intr=$p*$q*$r;
	$out=$intr/100;
	return $out;
}

$out=fun4(5000,5,2);
echo $out."<br/>";

$out1=fun4($out,$num1,$num2);

echo $out1;

//function returns more than one output

function fun5($m,$n){
	$add=$m+$n;
	$sub=$m-$n;
	$prod=$m*$n;
	$s=array("add"=>$add,"sub"=>$sub,"prod"=>$prod);
	return $s;
}

$final=fun5($out1,$out);
echo gettype($final);
echo gettype($out);

print_r($final);
echo "<br/>";
foreach($final as $var => $new){
	echo "$var is $new"."<br/>";
}


















?>