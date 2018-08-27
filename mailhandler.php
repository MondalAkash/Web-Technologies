<?php 
	$conn = mysqli_connect("localhost", "root", "", "hms");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql="INSERT INTO admail VALUES (NULL,'".$_REQUEST['aid']."','".$_REQUEST['did']."','".$_REQUEST['content']."')";
	if(mysqli_query($conn, $sql)){
			echo "New records updated successfully";
			//header("Location:userReg.html");
		}
	else
	{
		echo "Invalid parameter !";
	}
	
?>