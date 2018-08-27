<?php 
	//print_r($GLOBALS);
	if(strlen($_REQUEST["firstname"])== 0 || strlen($_REQUEST["lastname"]) == 0 || strlen($_REQUEST["dob-day"]) == 0 || strlen($_REQUEST["dob-month"]) == 0 || strlen($_REQUEST["dob-year"]) == 0 || isset($_REQUEST["gender"]) == false || isset($_REQUEST["maritalstatus"]) == false ||strlen($_REQUEST["contact"]) == 0 || strlen($_REQUEST["email"]) == 0 || strlen($_REQUEST["pass"]) == 0)
	{
			echo "<h1>Please Fill All The Field First</h1>";
	}
	else
	{
		if(strpos($_REQUEST["email"], "@") == 0)
		{
			echo "<p>Please Enter a Valid Email address</p>";
		}
		else if(strlen($_REQUEST["contact"]) !=  11)
		{
			echo"<p>Please Enter A Valid Phone Number</p>";
		}
		/*else if(strpos($_REQUEST["bloodgrp"], "+") !=1 || strpos($_REQUEST["bloodgrp"], "-") != 1 || strpos($_REQUEST["bloodgrp"], "+") !=2 || strpos($_REQUEST["bloodgrp"], "-") != 2)
		{
			//echo strpos($_REQUEST["bloodgrp"], "+");
			echo"<p>Please Enter a Valid Blood Group</p>";
		}*/
		else if(strlen($_REQUEST["pass"]) < 6)
		{
			echo"<p>Please Enter a Valid Password</p>";
		}
		else 
		{
			$dob =  $_REQUEST["dob-year"] . $_REQUEST["dob-month"] .$_REQUEST["dob-day"];
			$conn = mysqli_connect("localhost", "root", "", "hms");
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$sql="INSERT INTO patient VALUES (NULL,'".$_REQUEST['firstname']."','".$_REQUEST['lastname']."','".$dob."','".$_REQUEST['gender']."','".$_REQUEST['maritalstatus']."','".$_REQUEST['bloodgrp']."','".$_REQUEST['address']."', '".$_REQUEST['contact']."', '".$_REQUEST['pass']."', '".$_REQUEST['email']."','y',now())";
			if(mysqli_query($conn, $sql)){
					echo "New records updated successfully";
					header("Location:userReg.php?result=success");
				}
			else
			{
				echo "Invalid parameter !";
			}
		}
	}
?>