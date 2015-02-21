<?php
	$tick = $_POST['tick'];
	$shares = $_POST['shares'];
	$today = date("Y-m-d H:i:s");
	$stocks = array();
	

 	$open = fopen("http://finance.yahoo.com/d/quotes.csv?s=$tick&f=sl1d1t1c1ohgv&e=.csv", "r");
 	$stocks = explode(",", fgets($open));
 	$value = $stocks[1];
	fclose($open);
	if($value != 0)
	{
		$subtotal = $shares * $value;
		$open = "portfolio.txt";
		$fp = fopen($open, "a");
		fwrite($fp, "$tick|$value|$shares|$subtotal|$today\n");
		header("Location:admin.php");
	}
	else{
		header("Location:AddStock.php?error=Stock is not valid");
	}
?>