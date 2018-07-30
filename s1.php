
<?php
session_start();
if((isset($_SESSION['login_name'])=="admin")&&(isset($_SESSION['login_pwd'])=="admin"))
{
?>
<html>
<head>
	<title>
		Welcome to PHP
	</title>
</head>
<body bgcolor="#F6f6f6" valign="middle">
<form method="GET" action="products.php">
<table border="0" cellpadding="0" cellspacing="0" width="800"  align="center" >
	<tr>
		<td>
			<table border="0" cellpadding="0" cellspacing="0" width="800" bgcolor="#0096d6" height="50">
			<tr>
				<td align="center">
				<font style="font-family:Arial;font-size:20px;font-weight:bold;color:#FFFFFF"> Hi &nbsp;<?php echo $_SESSION['login_name'] ?>!</font>
				</td>
				<td align="right">
				<a href="logout.php" style="text-decoration:none;color:#FFFFFF">Logout&nbsp;&nbsp;</a>				
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td>
			
				</td>
				
				
			</table>
		</td>
	</tr>
	<tr>
		<td bgcolor="#178c86" height="100"  valign="bottom">
			<table border="0" cellpadding="0" cellspacing="0" width="800">
				<tr>
					<td align="right">
					<a href="#" style="text-decoration:none;Color:#FFFFFF">Contact US</a> | <a href="home.php" style="text-decoration:none;Color:#FFFFFF">Home </a>
					</td>
				</tr>
				<tr>
				<td height="20">
				&nbsp;
				</td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</form>
</body>
</html>
<?php
}
else{
	header("location:login1.php");
	exit;
}

?>