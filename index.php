<html>
<head>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<h1 align="Center">Welcome</h1>
<p><b>Please sign in to access stock services.</b></p>
<form action="login_p.php" method="post">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	<input type="Submit" value="Login">
</form>
<?php
	error_reporting(0);
	$error = $_GET['error'];
	echo "$error";
?>
</body>
</html>