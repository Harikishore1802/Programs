<?php

$name='Ravi';
$int='M';
$loc="Madurai";
$email="ravi@gmail.com";

$connect=mysqli_connect("localhost","root","");//establish the connection
$db=mysqli_select_db($connect,"hari");//choose database
//insertion
//$sql="INSERT INTO users (FIRST_NAME,LAST_NAME,LOCATION,EMAIL) VALUES ('$name','$int','$loc','$email')";
//$query=mysqli_query($connect,$sql);
//echo"Inserted Successfully";

//display the records

$sql1="SELECT * FROM users";
$query1=mysqli_query($connect,$sql1);
?>

<?php
while($fetch=mysqli_fetch_array($query1)){
?>
<UL>
<li><?php echo $fetch['FIRST_NAME']."<BR/>";?></li>
<li><?php echo $fetch['LAST_NAME']."<BR/>";?></li>
<li><?php echo $fetch['EMAIL']."<BR/>";?></li>
</UL>
<?php
}
?>
