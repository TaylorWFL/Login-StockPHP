<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
	session_start();
	
	if($_SESSION['username']=="")
	{
		header("Location:index.php?error=Must be logged in..");
	}

	$username = $_SESSION['username'];

	echo "Hello, $username!<br>";
?>
<p>Choose which stock you would like to Delete.</p>
	<form action="DeleteStock_p.php" method="post">
		Stock: <input name="tick" type="text"><br>
		<input type="Submit" value="Delete stock">
	</form>


<a href='admin.php'>Cancel</a><br>
<a href='Logoff.php'>Logout</a>"
</body>
</html>