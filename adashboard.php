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
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_SESSION['auname'];?></title>
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
		
					echo ("<h2>WELCOME, ".$_SESSION['auname']."</h2>");	
				?>
			</td>
			<td>
				<a href="alogout.php" style="text-decoration:none; font-size:20px; color:red; ">Logout</a>
			</td>
		</tr>
		<table>
			<tr>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">Add</button>
				  <div class="dropdown-content">
					<a href="docreg.php" target="_blank">Add New Doctor</a>
					<a href="userReg.php" target="_blank">Add New Patient</a>
				  </div>
				</div> 
			</td>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">Valid List</button>
				  <div class="dropdown-content">
					<a href="doclist.php" target="_blank">Valid Doctor List</a>
					<a href="plist.php" target="_blank">Valid Patient List</a>
				  </div>
				</div> 
			</td>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">Edit Info</button>
				  <div class="dropdown-content">
					<a href="docmodsearch.php" target="_blank">Edit Doctor's Info</a>
					<a href="pmodsearch.php" target="_blank">Edit Patient's Info</a>
				  </div>
				</div> 
			</td>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">Delete</button>
				  <div class="dropdown-content">
					<a href="docdelsearch.php" target="_blank">Delete Doctor</a>
					<a href="pdelsearch.php" target="_blank">Delete Patient</a>
				  </div>
				</div> 
			</td>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">In Valid List</button>
				  <div class="dropdown-content">
					<a href="indoclist.php" target="_blank">InValid Doctor List</a>
					<a href="inplist.php" target="_blank">InValid Patient List</a>
				  </div>
				</div> 
			</td>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">Undelete</button>
				  <div class="dropdown-content">
					<a href="readd.php" target="_blank">Undelete Doctor</a>
					<a href="readdp.php" target="_blank">Undelete Patient</a>
				  </div>
				</div> 
			</td>
			<td>
				 <div class="dropdown">
				  <button class="dropbtn">Mail</button>
				  <div class="dropdown-content">
					<a href="mail.php" target="_blank">To Doctor</a>
					<a href="#" target="_blank">To Patient</a>
				  </div>
				</div> 
			</td>
			
		</tr>
		</table>
	</table>
	
	
</body>
</html>

<!-- Drop Down Menue Link: https://www.w3schools.com/howto/howto_css_dropdown.asp -->
