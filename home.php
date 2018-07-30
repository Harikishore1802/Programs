<?php
session_start();
if((isset($_SESSION['login_name']))&&(isset($_SESSION['login_pwd'])))
{
?>
<html>
<head>
<title>Home</title>
</head>
<body>
<h1> Welcome <?php echo "{$_SESSION['login_name']}" ?></h1>
<a href="logout.php">Click here</a> to Logout.<br/><br/><br/><br/>
</body>
</html>
<?php
}
else
{
	header("Location:login1.php");
exit;
}
?>



