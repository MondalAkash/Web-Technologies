<?php 
	//print_r($GLOBALS);
	if(strlen($_REQUEST["username"]) == 0 || strlen($_REQUEST["password"]) == 0 || isset($_REQUEST["type"]) == false)
	{
		
			echo "<h1>Please Fill All The Field First</h1>";
		
	}
	else
	{
		if(strpos($_REQUEST["username"], "@") == 0)
		{
			echo "<p>Please Enter a Valid Email address</p>";
		}
		else
		{
			$z = strlen($_REQUEST["password"]);
			//echo "$z";
			if($z < 6)
			{
				echo"<p>Please Enter 6 Digit Password</p>";
			}
			else 
			{
				$em = $_REQUEST["username"];
				$p = $_REQUEST["password"];
				$conn = mysqli_connect("localhost", "root", "","hms");
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				if($_REQUEST['type'] == 'patient')
				{
					$result = mysqli_query($conn,"SELECT * FROM patient WHERE pemail='$em' AND ppass='$p'");
					$num_of_user = mysqli_num_rows($result);
					$user_part = mysqli_fetch_array($result);
					if($num_of_user == 1)
					{
						session_start();
						$_SESSION['puname'] = $user_part['pfname']." ".$user_part['plname'];
						$_SESSION['ppid'] = $user_part['pid'];
						$_SESSION['ppass'] = $user_part['ppass'];
						header("Location:pdashboard.php");
						
					}
					else
					{
						header("Location:login.php?result=unsuccess");
					}
				}
				else if($_REQUEST['type'] == 'admin')
				{
					$result = mysqli_query($conn,"SELECT * FROM admin WHERE aemail='$em' AND apass='$p'");
					$num_of_user = mysqli_num_rows($result);
					$user_part = mysqli_fetch_array($result);
					if($num_of_user == 1)
					{
						session_start();
						$_SESSION['auname'] = $user_part['aname'];
						$_SESSION['auemail'] = $user_part['aemail'];
						header("Location:adashboard.php");
						
					}
					else
					{
						header("Location:login.php?result=unsuccess");
					}
				}
				else if($_REQUEST['type'] == 'doctor')
				{
					$result = mysqli_query($conn,"SELECT * FROM doctor WHERE demail='$em' AND dpass='$p'");
					$num_of_user = mysqli_num_rows($result);
					$user_part = mysqli_fetch_array($result);
					if($num_of_user == 1)
					{
						session_start();
						$_SESSION['duname'] = $user_part['dname'];
						header("Location:ddashboard.php");
						
					}
					else
					{
						header("Location:login.php?result=unsuccess");
					}
				}
				
				
				
			}
		}
	}
	
	
?>