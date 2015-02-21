<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	$_SESSION['username'] = $username;

	if($username == "guest" && $password == "Pass1234")
	{
		header("Location:admin.php");
	}else{
		header("Location:index.php?error=Login credentials do not match.");
	}
?>