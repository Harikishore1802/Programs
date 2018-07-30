<html>
	<head>
		<title>Numbers: Floating Point Numbers</title>
	</head>
	<body>
	
	<?php
	//1.round();
	//2.ceil();
	//3.floor();
	
	
			// Floats can occur when two numbers don't divide evenly
			echo 4/3;echo "<br/>";
			$myfl = 25.075636;//floating point var
		?>
		
		Floating point: <?php echo $myfl; ?><br />
		Round: <?php echo round($myfl,2); ?><br />
		Ceiling: <?php echo ceil($myfl); ?><br />
		Floor: <?php echo floor($myfl); ?><br />
		
	</body>
</html>