<?php
//In OOP(object oriented programming concept) , Variables are called as Properties & Functions are called as Methods
class student{
	var $m,$n;
	var $a=10;
	var $b=30;
	var $c=50;
	
function opr()
{
	
	$d=($this->a*$this->b)/$this->c;
	$this->opr2();
	return $d;
}
function opr2()
{
echo "Using This Object";	
}
}//end of class



$obj=new student();//creation of objects
$obj1=new student();
$obj->m=10;
$obj->n=50;
$obj1->m=100;
echo $obj->n;
echo"$obj->a";echo"<br/>";
echo"$obj->b";echo"<br/>";
echo"$obj->c";echo"<br/>";
$out=$obj->opr();
echo"$out";























?>