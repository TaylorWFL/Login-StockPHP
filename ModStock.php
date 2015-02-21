<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	session_start();
	
	if($_SESSION['username']=="")
	{
		header("Location:index.php?error=Must be logged in.");
	}
	$username = $_SESSION['username'];
	echo "Hello, $username!<br>";
?>
	<p>Choose which stock you would like to modify.</p>
	<form action="ModStock_p.php" method="post">
		Stock: <input name="tick" type="text"><br>
		Increase: <input name="increase" type="radio"><br>
		Decrease: <input name="decrease" type="radio"><br>
		Number of shares: <input name="shares" type="text"><br>
		<input type="Submit" value="Modify stocks">
	</form>
	<a href='admin.php'>Cancel</a><br>
	<a href='Logoff.php'>Logout</a>
</body>
</html>