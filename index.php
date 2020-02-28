<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
<style type="text/css">
	body{
		margin-top: 150px;
	}
</style>
</head>
<body>
	<center>
		<h1>Login Page</h1>
	<form method="post" action="">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="Password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Login" name="logbtn"></td>
		</tr>
	</table>
	</form>
	</center>
</body>
</html>

<?php
if (isset($_POST['logbtn'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	if ($username=="admin" && $password=="admin") {
		header("location:read.php");
	}
}
?>