
<html>
	<head>
		<title>Array Functions</title>
	</head>
	<body>
	<?php
	/*
	count();
	max();
	min();
	sort();
	rsort();
	implode();
	explode();
	in_array();
	
	*/
	?>
		<?php $array1 = array(15,4,8,16,23,42); ?>
		<?php //echo $array1;?>
		Count: <?php echo count($array1); ?><br />
		Max value: <?php echo max($array1); ?><br />
		Min value: <?php echo min($array1); echo"<br/>"; print_r($array1);?><br />
		
		<br />
		Sort: <?php sort($array1); print_r($array1);?><br />
		Reverse Sort: <?php rsort($array1); print_r($array1); ?><br />
		<br />
		<?php                                                                      
			//Implode converts an array into a string using a "join string"
			// Explode converts a string into an array using a "divide string"
		?>
		Implode: <?php $string1 = implode(",", $array1); echo $string1;?><br />
		Explode: <?php $s1=explode(",", $string1); print_r($s1);?><br />
		<br />
		In array: <?php echo in_array(12, $array1); // returns T/F ?><br />
		
	</body>
</html>