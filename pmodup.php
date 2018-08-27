<?php 
	session_start();
	$id = $_SESSION['ppid'];
	//print_r($GLOBALS);
	//echo $id;
	$upfname = $_REQUEST['fname'];
	$uplname = $_REQUEST['lname'];
	$updob = $_REQUEST['pdob'];
	$upgen = $_REQUEST['gender'];
	$upms = $_REQUEST['ms'];
	$upbg = $_REQUEST['pbg'];
	$upadd = $_REQUEST['padd'];
	$upmob = $_REQUEST['pmob'];
	$uppass = $_REQUEST['ppass']; 
	$upemail = $_REQUEST['pemail'];
	$udel = "y";
	$conn = mysqli_connect("localhost", "root", "","hms");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$result = mysqli_query($conn,"SELECT time FROM patient WHERE pid='$id'");
	$num_of_user = mysqli_num_rows($result);
	$user_part = mysqli_fetch_array($result);
	if($num_of_user == 1)
	{
		session_start();
		$tt = $user_part['time'];
		
	}
	if(mysqli_query($conn,"UPDATE patient SET pfname='$upfname',plname='$uplname',pdob='$updob', pgender='$upgen', pms='$upms',pbg='$upbg',padd='$upadd',pmob='$upmob',ppass='$uppass', pemail='$upemail' WHERE pid='$id'"))
	{
		header("Location:pmodsearch.php?result=success");
		//echo "Success";
	}
	else
	{
		header("Location:pmodsearch.php?result=problem");
	}
	
?>