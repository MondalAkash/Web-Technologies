<!DOCTYPE HTML>
<?php 
	session_start();
	if(isset($_SESSION['auname'])){
	}
	else
	{
		header("Location: login.php");
	}	
	?>
<html>
<head>
	<title>Valid Doctor List</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="header-area">
		<img src="images/hospital-512.gif" alt="hospital_logo" />
		<a href="index.php"><h1>Online Hospital Management System</h1></a>
	</div>
	<table>
		<tr style="height:20px;">
			<td style="width:1141px;">
				<?php 
					//session_start();
					echo ("<h2>WELCOME, ".$_SESSION['auname']."</h2>");	
				?>
			</td>
			<td>
				<a href="alogout.php" style="text-decoration:none; font-size:20px; color:red; ">Logout</a>
			</td>
		</tr>
	</table>
	<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
	<tr bgcolor=red><td align=center ><font size=6 color=white >Valid Doctors
	List</font></td></tr>
	<tr><td><table width=750 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><td align=center>Id No</td><td align=center>Doctor
	Name</td><td align=center>Specialization</td><td align=center>Validity</td></tr>
	<?php 
		$conn = mysqli_connect("localhost", "root", "", "hms");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn, "SELECT * FROM doctor d WHERE d.delete='y' ORDER BY d.did");
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td align=center>".$row['did']."</td><td align=center>".$row['dname']."</td><td align=center>".$row['dspecial']."</td><td align=center>Valid</td></tr>";
		}
		
	?>
</body>
</html>