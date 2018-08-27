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
	<title>Reset Password</title>
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
	</table>
	<form action="resethandler.php" method="post" style="margin-left:522px; margin-top:35px;">
		<table>
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						<table>
							<tr>
								<td>
									<label for="cp"> Current Password </label>
								</td>
								<td>
									:
								</td>
								<td>
									<input id="cp" type="password" name="currentpassword"/>
								</td>
							</tr>
							<tr>
								<td>
									<label for="np" style="color:green">  New Password  </label>
								</td>
								<td>
									:
								</td>
								<td>
									<input id="np" type="password" name="newpassword"/>
								</td>
							</tr>

							<tr>
								<td>
									<label for="rnp" style="color: red">  Retype New Password  </label>
								</td>
								<td>
									:
								</td>
								<td>
									<input id="rnp" type="password" name="retypepassword"/>
								</td>
							</tr>
						</table>
						<hr>
						<input type="submit" name="submit" value="Submit" style="cursor:pointer;"/>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>