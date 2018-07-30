<?php
include ("class.php");
//Create array.
$browsers=array(
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other" 
  );
 

 ?>
 
<h2>User Registration - Browser<br /></h2>
 
<?php
//If form not submitted, display form.
  if(!isset($_POST['submit'])){
?>
 
<form method="post" action="#">
<p>Name:<br />
<input type="text" name="name" size="60" />  </p>
<p>Username:<br />
<input type="text" name="username" size="60" /></p>
<p>Email:<br />
<input type="text" name="email" size="60" /></p>
<p>Browser:
 
 
<?php
//Instantiate object.
$browser = new Select();
//Set properties.
$browser->setName('browser');
$browser->setValue($browsers);
//The object has the data it needs from the preceding commands.
//Tell it to make the select field.
$browser->makeSelect();
?>
</p>
<input type="submit" name="submit" value="Go" />
 
</form>
 
<?php
 
  }else{
    
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    
    $selBrowser=$_POST['browser'];
    
    echo "The following data has been saved for $name: <br />";
    echo "Username: $username<br />";
    echo "Email: $email<br />";
    echo "Browser: $selBrowser<br />";
 
}
?>
 
</body>
</html>