<?php 
	function a()
	{
		
	}
	if(strlen($_REQUEST['currentpassword'])==0 || strlen($_REQUEST['newpassword'])==0 || strlen($_REQUEST['retypepassword'])==0)
	{
		echo "Please Fill Up All The Fields";
	}
	else
	{
		if(strlen($_REQUEST['currentpassword'])< 6|| strlen($_REQUEST['newpassword'])<6 || strlen($_REQUEST['retypepassword'])<6)
		{
			echo "Please Provide 6 Digit Passwords";
		}
		else
		{
			session_start();
			//print_r($GLOBALS);
			if($_REQUEST['currentpassword'] == $_SESSION['ppass'] && $_REQUEST['newpassword'] == $_REQUEST['retypepassword'])
			{
				$np = $_REQUEST['newpassword'];
				$pid = $_SESSION['ppid'];
				$conn = mysqli_connect("localhost", "root", "","hms");
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				else
				{
					if(mysqli_query($conn,"UPDATE patient SET ppass='$np' WHERE pid='$pid'"))
					{
						
						header("Location:success.php");
					}
				}
			}
			else if($_REQUEST['currentpassword'] != $_SESSION['ppass'])
			{
				echo "Current Password Is not Matching";
			}
			else if($_REQUEST['newpassword'] != $_REQUEST['retypepassword'])
			{
				echo "New Password and Retype Password not matching";
			}
		}
	}
?>