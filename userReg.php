<!DOCTYPE HTML>
<html>
	<head>
		<title>User Registration</title>
		<link rel="stylesheet" type="text/css" href="style.css" media="all" />
		<script type="text/javascript">
			function validate()
			{
				
				var flag = true;
				var genders = document.getElementsByName("gender"); 
				var ms = document.getElementsByName("maritalstatus");
				
				if(document.fm.firstname.value.length == 0)
				{
					alert("Please Enter first name...");
					flag = false;
				}
				else if(document.fm.lastname.value.length == 0)
				{
					alert("Please Enter Last Name...");
					flag = false;
				}
				else if(genders[0].checked == false && genders[1].checked == false)
				{
					alert("Please Select Your Gender...");
					flag = false;
				}
				else if(document.fm.day.value.length == 0)
				{
					alert("Please Select Day...");
					flag = false;
				}
				else if(document.fm.month.value.length == 0)
				{
					alert("Please Select Month...");
					flag = false;
				}
				else if(document.fm.year.value.length == 0)
				{
					alert("Please Select Year...");
					flag = false;
				}
				else if(document.fm.email.value.length == 0)			
				{
					alert("Please Enter Email...");
					flag = false;
				}
				else if(document.fm.pass.value.length == 0)			
				{
					alert("Please Enter Password...");
					flag = false;
				}
				else if(document.fm.bloodgrp.value.length == 0)
				{
					alert("Please Enter Blood Group...");
					flag = false;
				}
				else if(ms[0].checked == false && ms[1].checked == false)
				{
					alert("Please Select Marital Status...");
					flag = false;
				}
				else if(document.fm.contact.value.length == 0)
				{
					alert("Please Enter Your Contact Number...");
					flag = false;
				}
				else if(document.fm.address.value.length == 0)
				{
					alert("Please Provide Your Address...");
					flag = false;
				}
				else 
				{
					if(document.fm.firstname.value >=0 && document.fm.firstname.value <=999999)
					{
						ffname.innerHTML="Valid Name Required";
						flag= false;
					}
					else if(document.fm.contact.value.length != 11)
					{
						alert("Please Provide A Valid Mobile no...");
						flag = false;
					}
					else if(document.fm.pass.value.length != 6)
					{
						alert("Please Provide a 6 Digits Password...");
						flag = false;
					}
					
				}
				return flag;
			}
			function val()
			{
				var ffname = document.getElementById("ffname");
				ffname.innerHTML="";
				if(document.fm.firstname.value >=0)
				{
					ffname.innerHTML="Valid Name Required";
					//flag= false;
				}
				if(document.fm.firstname.value >=0)
				{
					ffname.innerHTML="Valid Name Required";
					//flag= false;
				}
			}
			
			
		</script>
	</head>
	<body>
		<div class="header-area">
			<img src="images/hospital-512.gif" alt="hospital_logo" />
			<a href="index.php"><h1>Online Hospital Management System</h1></a>
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
		<h1 style="text-align:center; background:#99FFFF; margin:0px; font-size:25px; height:40px;">Patient Registration Form</h1> <hr style="margin:0px;"/>
		<?php 
			if(isset($_GET["result"]))
			{
				if($_GET["result"] == "success")
				{
					echo '<h2 style="background:red;margin-top: 0px;padding: 5px;text-align: center;margin-bottom: 0px;">Congratulation!!Registration Succefull</h2>';
				}	
			}	
		?>
		
		<div class="reg-panel">
			<form action="reghandler.php" method="post" enctype="multipart/form-data" name="fm" style="width:316px;" >
					<table cellspacing="20">
						<tr>
							<td>
								<label for="fname" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Enter Your First Name:</label> 
								<br />
								<input id="fname" type="text"  placeholder="First Name" name="firstname" onkeyup="val();" style="width: 300px;height:25px"/>
								<span id="ffname"></span>
								<br />
								<label for="lname" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Enter Your Last Name: </label>
								<br />
								<input id="lname" type="text"  placeholder="Last Name" name="lastname" style="width: 300px;height:25px;margin-left:0px;"/>
								<br />
								<label style="font-family:Berlin Sans FB;font-size:22px;margin-top:15px;">Gender: </label>
								<br />
								<input id="male" type="radio" value="male" name="gender" style="cursor: pointer;"/><label for="male" style="cursor:pointer">Male</label> 
								<input id="female" type="radio" value="female" name="gender" style="cursor: pointer;"/><label for="female" style="cursor:pointer">Female</label>
								<br />
								<label for="" style="font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Date Of Birth: </label>
								<br />
								<select name="dob-day" id="day" style="width:80px;height:31px">
									<option value="">Day</option>
									<?php 
										for($i=0; $i<=30; $i++)
										{
											echo "<option value='$i'>$i</option>";
										}
									?>
								</select>
								<select name="dob-month" id="month" style="width:80px;height:31px">
									<option value="">Month</option>
									<?php 
										for($i=0; $i<=12; $i++)
										{
											echo "<option value='$i'>$i</option>";
										}
									?>
								</select>
								<select name="dob-year" id="year" style="width:80px;height:31px">
									<option value="">Year</option>
									<?php 
										for($i=1957; $i<=2017; $i++)
										{
											echo "<option value='$i'>$i</option>";
										}
									?>
								</select>
								<br />
								<label for="email" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Email id: </label>
								<br />
								<input id="email" type="text" placeholder="Email" name="email" style="width: 300px;height:25px"/>
							</td>
							<td style="margin-left:20px;">
								
								<label for="pw" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Password :</label> 
								<br />
								<input id="pw" name="pass" placeholder="Password" type="password" style="width: 300px;height:25px;margin-left:0px;"/>
								<br />
								<label for="bg" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Blood Group: </label>
								<br />
								<input id="bg" type="text" placeholder="Blood group" name="bloodgrp" style="width: 300px;height:25px"/>
								<br />
								<label for="" style="font-family:Berlin Sans FB;font-size:22px;">Marital Status: </label>
								<br />
								<input id="single" type="radio" value="single" name="maritalstatus" style="cursor: pointer;"/><label for="single" style="cursor:pointer">Single</label> 
								<input id="married" type="radio" value="married" name="maritalstatus" style="cursor: pointer;"/><label for="married" style="cursor:pointer">Married</label>
								<br />
								<label for="pm" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Phone/Mob no.: </label>
								<br />
								<input id="pm" type="text" placeholder="Phone/Mobile No." name="contact" style="width:300px;height:25px"/>
								<br />
								<label for="add" style="cursor:pointer;font-family:Berlin Sans FB;font-size:22px;margin-left:0px;">Address: </label>
								<br />
								<input id="add" type="text" placeholder="Address" name="address" style="width:300px;height:25px"/>
									
							</td>
							<td>
								<input style="margin-left:45px;cursor:pointer;height:61px;width:233px;margin-top:15px;" onclick="return validate();" name="submit" type="submit" value="Sign Up"/>
							</td>
						</tr>	
					</table>	
			</form>	
		</div>
	</body>
</html>