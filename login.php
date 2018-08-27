<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<script type="text/javascript">
		function validation()
		{
			var flag = true;
			var types = document.getElementsByName("type"); 
			if(types[0].checked == false && types[1].checked == false && types[2].checked == false)
			{
				alert("Please Select Your Type!!");
				flag = false;
			}
			else if(document.fm.username.value.length == 0)
			{
				alert("User Name is Required!!");
				flag = false;
			}
			else if(document.fm.password.value.length == 0)
			{
				alert("Password is Required!!");
				flag = false;
			}
			
			return flag;
		}
	</script>
</head>

	<body>
		<div class="header-area">
			<img src="images/hospital-512.gif" alt="hospital_logo" />
			<a href="index.php" style="text-decoration: none; "><h1>Online Hospital Management System</h1></a>
		</div>
		<div class="mid-area">
			<span><a href="index.php">Home</a></span>
			<span><a href="aboutUs.html">About Us</a></span>
			<span><a href="contactus.html">Contact</a></span>
			<span><a href="ambulance.html">Ambulance</a></span>
			<span><a href="services.html">Services</a></span>
			<span><a href="login.php">Login</a></span>
			<span><a href="quick.html">Quick Links</a></span>
			
		</div>
		<?php 
			if(isset($_GET["result"]))
			{
				if($_GET["result"] == "unsuccess")
				{
					echo '<h2 style="background:red;margin-top: 0px;padding: 5px;text-align: center;">Login Failed.Please Check Your User Name and Password Again</h2>';
				}
				
			}	
		?>
		<div class="mid">
			<form action="loginhandler.php" method="post" name="fm">
				<input id="admin" type="radio" value="admin" name="type" style="cursor: pointer;"/><label for="admin" style="cursor:pointer">Admin</label> 
				<input id="patient" type="radio" value="patient" name="type" style="cursor: pointer;"/><label for="patient" style="cursor:pointer">Patient</label> 
				<input id="doctor" type="radio" value="doctor" name="type" style="cursor: pointer;"/><label for="doctor" style="cursor:pointer">Doctor</label> 
				<label for="uname">User Name:</label> <br />
				<input id="uname" type="text" name="username" placeholder="User Name"> <br>
				<label for="pass">Password:</label> <br />
				<input id="pass" type="password" name="password" placeholder="Password"> <br>
				<input type="submit" value="Login" name="sbmt" onclick="return validation();" style="cursor: pointer"> <br> 
				
			</form>
			<p>New user?</p>
				<span>Please <a href="userReg.php" style="text-decoration: none; color: red;"> Sign Up </a>first!</span>
		</div>
		
	
	
	
</body>
</html>