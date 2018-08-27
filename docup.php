<?php 
	session_start();
	$id = $_SESSION['ddid'];
	//print_r($GLOBALS);
	//echo $id;
	$udn = $_REQUEST['dname'];
	$udcon = $_REQUEST['dcontact'];
	$udadd = $_REQUEST['dadd'];
	$udemail = $_REQUEST['demail'];
	$udpass = $_REQUEST['dpass'];
	$udspe = $_REQUEST['dspe'];
	$udgen = $_REQUEST['gender'];
	$udfrom = $_REQUEST['from']; 
	$udto = $_REQUEST['to'];
	$udel = "y";
	$conn = mysqli_connect("localhost", "root", "","hms");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$result = mysqli_query($conn,"SELECT time FROM doctor WHERE did='$id'");
	$num_of_user = mysqli_num_rows($result);
	$user_part = mysqli_fetch_array($result);
	if($num_of_user == 1)
	{
		session_start();
		$tt = $user_part['time'];
		
	}
	if(mysqli_query($conn,"UPDATE doctor SET dname='$udn',demail='$udemail',dpass='$udpass', dadd='$udadd', dspecial='$udspe',dcontact='$udcon',dgen='$udgen',dfrom='$udfrom',dto='$udto' WHERE did='$id'"))
	{
		header("Location:docmodsearch.php?result=success");
		//echo "Success";
	}
	else
	{
		header("Location:docmodsearch.php?result=problem");
	}
	
?>