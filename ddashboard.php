<!DOCTYPE HTML>
<?php 
	session_start();
	if(isset($_SESSION['duname'])){
	}
	else
	{
		header("Location: login.php");
	}	
	?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['duname'];?></title>
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
		
					echo ("<h2>WELCOME, ".$_SESSION['duname']."</h2>");	
				?>
			</td>
			<td>
				<a href="dlogout.php" style="text-decoration:none; font-size:20px; color:red; ">Logout</a>
			</td>
		</tr>
		<tr>
			<td>
				<div class="dropdown">
				  <button class="dropbtn">Mail</button>
				  <div class="dropdown-content">
					<a href="#" target="_blank">From Admin</a>
					<a href="#" target="_blank">From Patient</a>
				  </div>
				</div>
			</td>
		</tr>
		
		
		
		
	</table>
	
	
</body>
</html>

<!-- Drop Down Menue Link: https://www.w3schools.com/howto/howto_css_dropdown.asp -->