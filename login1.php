<html>
<head><title>Login Form</title>
<style>
.form1{
	border:2px groove pink;
	margin-left:30px;
	margin-top:30px;
	margin-right:660px;
	padding:50px;
	background-color:pink;
}
.form1 input{
	background-color:yellow;
	
	
} 
h1{
	border:6px groove blue;
	background-color:yellow;
	text-align:center;
}
</style>
</head>
<body>
<div class="form1">

<form action="process.php" method="POST">
<h1>Login</h1>
<table>
<tr><td>Username:&nbsp;<input type="username" name="u_name"/></td></tr>
<tr><td>Password:&nbsp;<input type="password" name="u_pwd"/></td></tr>
<tr><td><center><button type="submit" name="u_login">Login</button></center></td></tr>
</table>
</form>
</div>
</body>
</html>
<?php
session_start();
if((isset($_SESSION['login_name']))&&(isset($_SESSION['login_pwd'])))
{
	header("Location:home.php");
          exit;
}
?>
