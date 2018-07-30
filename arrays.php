<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<? /*
			Think of an array like an expandable file folder where you can put items in each of the pockets
			There are no limits to how many pockets it can have (not that you'll need to worry about at least)
			Then you can reference those items by the pocket number (or "index")
			(This is the "value" of that "position" in the array)
			Be careful! Pockets are numbered starting at 0 (0,1,2,3...) so the index of the 2nd pocket is 1
		*/?>
		
		<?php 
			// defining a simple array
			$a1 = array(4,8,15,16,23,42);
			
			// referencing an array value by its index
			echo "$a1[0]"."$a1[2]"."<br/>";
		
			// arrays can contain a mix of strings, numbers, even other arrays
			$array_s = array(6,"fox", "dog", array(array(1,2), "y", "z")); //Nested Array
			print_r($array_s);echo "<br/>";
			// referencing an array value that is inside another array
			echo $array_s[3][1];
			//echo $array_s;
		?>
		<br />
		<?php
			// Changing values in an array that has already been defined
			// It's just like variables but you use the index to reference the array position
			$array_s[3] = "cat";
			echo $array_s[3]."<br/>";
			print_r($array_s);
		?>
		<br />
		<?php
		//Associative Array 
			// You can also assign labels to each pocket (called "keys"),
			$array3 = array("first_name" => "Shurakhsharaa", "last_name" => "Technologies");//Associative Array.
		print_r($array3);
			// which will allow you to use the key to reference the value in that array position.
			echo $array3["first_name"] . " " . $array3["last_name"] . "<br />";
			$array3["first_name"] = "ST";
			echo $array3["first_name"] . " " . $array3["last_name"] . "<br />";
			//print_r($array3);
		?>
		<br />
		
		<?php print_r($array3); ?>
	</body>
</html>