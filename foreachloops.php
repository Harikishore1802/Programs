<html>
	<head>
		<title>Loops: foreach</title>
	</head>
	<body>
	<?php	/*	foreach loops

		foreach (array_expression as $value)
			statement;

		foreach (array_expression as $key => $value)
			statement;

		Works only on arrays!
		

	*/ ?>
<?php
	

?>
	
<?php
		$ages = array(4, 8, 15, array(10,20,30),16, 23, 42 ,"ram");
		
	?>

	<?php
		// using each value
		foreach($ages as $age) 
		{
			if(is_array($age))
			{
				foreach($age as $new)
				{
					echo $new ."**** <br/> ";
				}
			}
			else if(is_string($age))
			{
				echo "String is $age<br/>";
			}
			else if(is_int($age))
			{
				echo "Integer is ". $age . "<br/> ";
			}
			else{
				
			}
		}
	?>
	<br />
	<?php
	$array3 = array("first_name" => "ST", "last_name" => "Technologies");
		// using each key => value pair
		foreach($array3 as $abcd => $values) 
		{
			echo $abcd . ": " . $values . "<br />";
		}
	?>
	<br />
	


	</body>
</html>