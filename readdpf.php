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
		if(mysqli_query($conn, "UPDATE patient d SET d.delete='$f' WHERE d.pid='".$_GET['ddid']."'"))
		{
			header("Location:readdp.php?result=success");
			//echo "Success";
		}
		else
		{
			header("Location:readdp.php?result=problem");
		}
	}
	
	
?>