<?php 
	$id = $_REQUEST["id"];
	$d = "n";
	$f = "y";
	$conn = mysqli_connect("localhost", "root", "","hms");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else
	{
		if(mysqli_query($conn, "UPDATE doctor d SET d.delete='$d' WHERE d.did='".$_GET['ddid']."'"))
		{
			header("Location:docdelsearch.php?result=success");
			//echo "Success";
		}
		else
		{
			header("Location:docdelsearch.php?result=problem");
		}
	}
	
	
?>