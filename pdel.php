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
		if(mysqli_query($conn, "UPDATE patient p SET p.delete='$d' WHERE p.pid='".$_GET['ddid']."'"))
		{
			header("Location:pdelsearch.php?result=success");
			//echo "Success";
		}
		else
		{
			header("Location:pdelsearch.php?result=problem");
		}
	}
	
	
?>