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
	$total = 0;
	
	

	echo "Hello, $username!<br>";
	echo "Choose a service you would like to do.<br>";
	echo "<a href='AddStock.php'>Add Stock</a><br>";
	echo "<a href='ModStock.php'>Modify Stock</a><br>";
	echo "<a href='DeleteStock.php'>Delete Stock</a><br>";

	$file_name="portfolio.txt";
	$fp = fopen($file_name, "r"); 

	echo "<ul>";
	while($line = fgets($fp))
	{	
		$tick = strtok($line, "|");	
		$value = strtok("|");
		$shares = strtok("|");
		$subtotal = strtok("|");
		$today = strtok("|");
		$total += $subtotal;
		echo "<li>$shares shares of $tick at $$value were added on $today for a value of $$subtotal";
		
	}
	echo "</ul>";
	fclose($fp);
	echo "Porfolio Total is $" . $total . "<br>";
	echo "<a href='Logoff.php'>Logout</a>";
?>
</body>
</html>