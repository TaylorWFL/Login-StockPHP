<?php>
	
	$key = $_POST['tick'];
	$contents = '';
	$fc=file("portfolio.txt");
 	foreach($fc as $line)
  	{
    	if (!strstr($line,$key))
    	{
        	$contents .= $line; 
     	}  
  	}
  	file_put_contents("portfolio.txt",$contents);

	header("Location:admin.php");
?>