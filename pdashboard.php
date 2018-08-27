<!DOCTYPE HTML>
<?php 
	session_start();
	if(isset($_SESSION['puname'])){
	}
	else
	{
		header("Location: login.php");
	}	
	?>
<html>
<head>
	<title><?php echo $_SESSION['puname'];?></title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>
<body>
	<div class="header-area">
		<img src="images/hospital-512.gif" alt="hospital_logo" />
		<a href="index.php"><h1>Online Hospital Management System</h1></a>
	</div>
	<table>
		<tr>
			<td style="width:1141px;">
				<?php 
		
					echo ("<h2>WELCOME, ".$_SESSION['puname']."</h2>");	
				?>
			</td>
			<td>
				<a href="plogout.php" style="text-decoration:none; font-size:20px; color:red; ">Logout</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="appointment.php" target="_blank">Appoinment</a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="pwreset.php">Click Here to Change Your Password</a>
			</td>
		</tr>
		
		
		
	</table>
	
	
</body>
</html>