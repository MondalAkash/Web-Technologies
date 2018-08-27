<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="ahandler.php" method="post">
	
		<?php 
		
	$dname = $_REQUEST['docname'];
	 session_start();
	 $_SESSION['appdate'] = $_REQUEST['appdate'];
	 $_SESSION['docname'] = $dname; 
	 
		$conn = mysqli_connect("localhost", "root", "", "hms");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn, "SELECT dfrom, dto FROM doctor d WHERE d.dname='$dname'");
		$row = mysqli_fetch_assoc($result);
		/*while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td align=center>".$row['did']."</td><td align=center>".$row['dname']."</td><td align=center>".$row['dspecial']."</td><td align=center>Valid</td><td align=center><a href='docmodf.php?ddid=$row[did]' target='_blank'>Modify</a></td></tr>";
		}*/
	
	$starttime = $row['dfrom'];  // your start time
	$endtime = $row['dto'];  // End time
	$duration = '15';  // split by 30 mins
	 
	$array_of_time = array ();
	$start_time    = strtotime ($starttime); //change to strtotime
	$end_time      = strtotime ($endtime); //change to strtotime
	 
	$add_mins  = $duration * 60;
	 
	while ($start_time <= $end_time) // loop between time
	{
	   $array_of_time[] = date ("h:i", $start_time);
	   $start_time += $add_mins; // to check endtie=me
	}
	for($i = 0; $i < sizeof($array_of_time)-1; $i++)
	{
		
			echo "<input type='radio' name='apptime' value='$array_of_time[$i]')'/>";
			echo $array_of_time[$i] ."to" .$array_of_time[$i+1]."<br />" ; 
		
		
	}
	
	/*echo '<pre>';
print_r($array_of_time);
echo '</pre>';*/
//print_r($GLOBALS);
?>
		
	<input type="submit" />	
	</form>
	<?php print_r($GLOBALS)?>
</body>
</html>
DK0654753L00006