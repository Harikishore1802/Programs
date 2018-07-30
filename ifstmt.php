<html>
	<head>
		<title>IF Statement</title>
	</head>
	<body>
<?php
$var = 1;
if ($var === 1) 
{
echo "The variable equals one.<br/>";
}
else{
	echo "It is not equal to 1";
}

$var = 2;
if ($var === 1) 
{
echo "The variable equals one.<br/>";
}
else if($var==2){
	echo "The variable equals two<br/>";
}
else if($var==3)
{
	echo "The variable equals three<br/>";
}
else{
	echo "Incorrect<br/>";
}
$month = 11;
if (($month < 1) || ($month > 12))//Logical OR Operator-Any one Condition must be true
	{
echo 'That is an excellent choice for a month<br/>';
} else {
echo "Invalid<br/>";
}

if ($month < 1 && $month > 12 && $month==12)//Logical AND Operator - Two Conditions must be true
	{
echo 'That is an invalid month';
} 
else 
{
echo "That is an excellent choice for a month";
}
?>
</body> 
</html>