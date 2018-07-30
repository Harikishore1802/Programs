<?php
session_start();
if((isset($_SESSION['login_name']))&&(isset($_SESSION['login_pwd'])))
{
	header("Location:s1.php");
          exit;
}
else if(($_POST['u_name']=="admin")&&($_POST['u_pwd']=="admin"))
{
$_SESSION['login_name']=$_POST['u_name'];
$_SESSION['login_pwd']=$_POST['u_pwd'];

header("Location:home.php");//for redirection
exit;
	  
}

  else
  {
  header("Location:login1.php");
  exit;
          }  
	

?>


