<!--Form Handling-->
<!--Get and Post Method-->
<form action="file1.php" method="GET">
<!--<form action="#" method="GET">-->
Name:<input type="text" name="name"/><br/><br/>
Email:<input type="text" name="email"/><br/><br/>
Location:<input type="text" name="address"/><br/><br/>
Gender:<input type="radio" name="gend" value="Male">Male
<input type="radio" name="gend" value="Female">Female
<br/><br/>
<input type="checkbox" name="city[]" value="Chennai">Chennai
<input type="checkbox" name="city[]" value="Madurai">Madurai
<input type="checkbox" name="city[]" value="Trichy">Trichy
<input type="checkbox" name="city[]" value="Kovai">Kovai
<br/><br/>
<button type="submit" name="process">Submit</button>
</form>

