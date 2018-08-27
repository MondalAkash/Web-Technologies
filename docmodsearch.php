<!doctype html>
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
	<title>Search </title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<style>

	h1 {
		color: blue;
		font-family: verdana;
		font-size: 200%;
	}
	body {
		  background-color: powderblue;
		 }
</style>
<body>
	
	<div class="header-area">
		<img src="images/hospital-512.gif" alt="hospital_logo" />
		<a href="index.php"><h1>Online Hospital Management System</h1></a>
	</div>
	<h1 style="text-align:center; background:#99FFFF; margin-top:-8px; margin-left:-8px; margin-right:-8px;; font-size:25px; height:40px;">Search Here To Edit Doctor's Information</h1> <hr style="margin:-16px;"/>
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
	<tr><td><table style="margin-top:23px;" align=center width=750 cellspacing=0 cellpadding=5>
	<tr bgcolor=red><td ><font size=4 color=white>Doctors
	List</font></td></tr>
	<tr><td><table width=750 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><td align=center>Id No</td><td align=center>Doctor
	Name</td><td align=center>Specialization</td><td align=center>Validity</td></tr>
	<?php 
		$conn = mysqli_connect("localhost", "root", "", "hms");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn, "SELECT * FROM doctor d WHERE d.delete='y' ORDER BY did");
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td align=center>".$row['did']."</td><td align=center>".$row['dname']."</td><td align=center>".$row['dspecial']."</td><td align=center>Valid</td><td align=center><a href='docmodf.php?ddid=$row[did]' target='_blank'>Modify</a></td></tr>";
		}
		
	?>
	<?php 
			if(isset($_GET["result"]))
			{
				if($_GET["result"] == "success")
				{
					echo '<h2 style="background:red;margin-top: 0px;padding: 5px;text-align: center;">Information Changed Successfully</h2>';
				}
				else
				{
					echo '<h2 style="background:red;margin-top: 0px;padding: 5px;text-align: center;">Something Wrong</h2>';
				}
				
			}	
		?>
	
		
	
		
</body>
</html>
		 
	 
	 