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

	echo "Good Bye, $username!<br>";

	session_destroy();
	echo "<a href='index.php'>Go to Login page</a>";
?>
</body>
</html>