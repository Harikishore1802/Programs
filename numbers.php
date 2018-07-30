<html>
	<head>
		<title>Numbers With Overwriting Capability</title>
	</head>
	<body>
		<?php
			$var1 = 3;
			$var2 = 4;
		?>
		
		
		<br />
		
		<?php //You can perform math operations directly on values
//Another comment
//third comment		?>
		+=: <?php 
				$var2 += 4;  //$var2 = $var2 + 4;
				echo $var2; 
				
				//$var2=4;
				//echo $var2;
			?>
			<br />
		-=: <?php 
				$var2 -= 4; // $var2 = $var2 - 4;
				echo $var2; 
			?>
		<br />
		*=: <?php 
				$var2 *= 3; 
				echo $var2; 
			?>
		<br />
		/=: <?php 
				$var2 /= 4; 
				echo $var2; 
			?>
		<br />
		<br />
		
		Increment: <?php 
						$var2++; // $var2 = $var2 + 1
						echo $var2; 
					?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />
		
	</body>
</html>