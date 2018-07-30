<html>
	<head>
		<title>Loops: for</title>
	</head>
	<body>
	<?php /* for loops
	
		for (initialization; condition; increment/decrement)
			statement;
		
		semicolons separate three expressions:
			expr1 executed at start (initialize)
			expr2 evaluated at the start of each loop, continues as long as it is TRUE
			expr3 executed at the end of each loop
		
		{} around multi-line statements (like if-else)
		watch out for infinite loops
	*/ ?>
	
	<?php
	$a=5;
	$b=2;
		// Outputs 1-10
		for ($count=0; $count <= 10; $count+=2) 
		{
			$a+=5;
			$b+=3;
			if($count==6){
				echo"NUM1: $a NUM2: $b<br/>";
			}
			else{
			echo"A: $a B: $b<br/>";
			//echo $count . ", ";
			}
		}
		
		echo"<br/>";
		echo "$count";
		
	?>
	</body>
</html>