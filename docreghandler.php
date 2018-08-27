<?php 
	if(strlen($_REQUEST["dname"]) == 0 || strlen($_REQUEST["dcontact"]) == 0 || strlen($_REQUEST["dadd"]) == 0 || strlen($_REQUEST["demail"]) == 0 || strlen($_REQUEST["dpass"]) == 0 || strlen($_REQUEST["dspe"]) == 0 || strlen($_REQUEST["from"]) == 0 || strlen($_REQUEST["to"]) == 0 || isset($_REQUEST["gender"]) == false)
	{
		echo "<h2>Please Fill Up All The Fields</h2>";
	}
	else
	{
		if(strpos($_REQUEST["demail"], "@") == 0)
		{
			echo "<p>Please Enter a Valid Email address</p>";
		}
		else if(strlen($_REQUEST["dcontact"]) !=  11)
		{
			echo "<p>Please Enter a Valid Mobile Number</p>";
		}
		else if(strlen($_REQUEST["dpass"]) < 6)
		{
			echo"<p>Please Enter a Valid Password</p>";
		}
		else 
		{
			//echo "<p>Everything is OK!!!...</p>";
			$conn = mysqli_connect("localhost", "root", "", "hms");
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql="INSERT INTO doctor VALUES (NULL,'".$_REQUEST['dname']."','".$_REQUEST['demail']."','".$_REQUEST['dpass']."','".$_REQUEST['dadd']."','".$_REQUEST['dspe']."', '".$_REQUEST['dcontact']."','".$_REQUEST['gender']."','".$_REQUEST['from']."', '".$_REQUEST['to']."','y',now())";
			if(mysqli_query($conn, $sql)){
					echo "New records updated successfully";
					header("Location:docreg.php?result=success");
				}
			else
			{
				echo "Invalid parameter !";
			}
		}
	}
?>