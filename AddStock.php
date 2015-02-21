<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	session_start();
	$error;
	
	if($_SESSION['username']=="")
	{
		header("Location:index.php?error=Must be logged in.");
	}

	$username = $_SESSION['username'];

	echo "Hello, $username!<br>";
?>	
	<form action="AddStock_p.php" method="post">
		Stock: <input name="tick" type="text"><br>
		Number of shares: <input name="shares" type="text"><br>
		<input type="Submit" value="Add stocks">
	</form>
<?php
	error_reporting(0);
	$error = $_GET['error'];
	echo "$error<br>";
?>
	<a href='admin.php'>Cancel</a><br>
	<a href='Logoff.php'>Logout</a>

</body>
</html>