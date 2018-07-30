<?php

$ar=array("first",50,"Second",150,52.63);//simple array

echo $ar[0]."<br/>";
$add=$ar[1]+$ar[3]+$ar[4];
echo $add."<br/>";

$ar[3]=200;

$add1=$ar[1]+$ar[3]+$ar[4];
echo $add1."<br/>";

//echo $ar;
print_r($ar);
echo "<br/>";
?>
<ul>
<?php
foreach($ar as $new){?>
<li><?php echo $new;?></li>
<?php	
}

?>
</ul>

<?php
$arr=array(34,89,array(10,20,30));//Nested Array
$res1=$arr[2][0]+$arr[2][2];
echo $res1;

//Associative Array

$asm=array("val1"=>100,"val2"=>250,"opr"=>"Minus");

print_r($asm);
echo "<br/>";

foreach($asm as $key=>$val){
	echo $key." is ".$val."<br/>";
	
}

$res=$asm['val2']-$asm['val1'];
echo $res."<br/>";

$mn=array(50,60,"PHP",array(15,"a",50,1.5));
echo "****************";
foreach($mn as $new1){
	
	if(is_int($new1)){
		$s=$new1+50;
		echo $s."<br/>";
	}
	else if(is_string($new1)){
		$new1.="Scripting Language";
		echo $new1."<br/>";
	}
	else if(is_array($new1)){
		foreach($new1 as $oth){
			if(is_int($oth)){
				echo "$oth is an integer<br/>";
			}
			else if(is_string($oth)){
				echo "$oth is a string<br/>";
			}
			else{
				echo"It is not an integer or string";
			}
		}
	}
	else{
		
	}
}
?>