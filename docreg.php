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
	<title> Doctor Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<script type="text/javascript">
		function validation()
		{
			var flag = true;
			ddnam = document.getElementById("ddname");
			ddco = document.getElementById("ddcon");
			ddad = document.getElementById("ddadd");
			ddem = document.getElementById("ddemail");
			ddp = document.getElementById("ddpass");
			ddsp = document.getElementById("ddspe");
			ddg = document.getElementById("ddgender");
			ddcc = document.getElementById("dddconn");
			var genders = document.getElementsByName("gender");
			if(document.fm.dname.value.length == 0)
			{
				document.fm.dname.focus();
				ddnam.style.color="red";
				document.fm.dname.style.border="1px solid red";
				ddnam.innerHTML="Name Field is Required";
				flag=false;
			}
			else if(document.fm.dcontact.value.length == 0)
			{
				document.fm.dcontact.focus();
				ddco.style.color="red";
				document.fm.dcontact.style.border="1px solid red";
				ddco.innerHTML="Contact no. Field is Required";
				flag=false;
			}
			else if(document.fm.dadd.value.length == 0)
			{
				document.fm.dadd.focus();
				ddad.style.color="red";
				document.fm.dadd.style.border="1px solid red";
				ddad.innerHTML="Address Field is Required";
				flag=false;
			}
			else if(document.fm.demail.value.length == 0)
			{
				document.fm.demail.focus();
				ddem.style.color="red";
				document.fm.demail.style.border="1px solid red";
				ddem.innerHTML="Email Field is Required";
				flag=false;
			}
			else if(document.fm.dpass.value.length == 0)
			{
				document.fm.dpass.focus();
				ddp.style.color="red";
				document.fm.dpass.style.border="1px solid red";
				ddp.innerHTML="Email Field is Required";
				flag=false;
			}
			else if(document.fm.dspe.value.length == 0)
			{
				document.fm.dspe.focus();
				ddsp.style.color="red";
				document.fm.dspe.style.border="1px solid red";
				ddsp.innerHTML="Specialist Field is Required";
				flag=false;
			}
			else if(genders[0].checked == false && genders[1].checked == false)
			{
				alert("Please Select Your Gender...");
				flag=false;
			}
			else if(document.fm.from.value.length == 0 || document.fm.to.value.length == 0)
			{
				ddcc.innerHTML="Specialist Field is Required";
				flag=false;
			}
			else
			{
				if(document.fm.dname.value >=0 || document.fm.dname.value <=9)
				{
					document.fm.dname.focus();
					ddnam.style.color="red";
					document.fm.dname.style.border="1px solid red";
					ddnam.innerHTML="Valid Name is Required";
					flag=false;
				}
			}
			return flag;
		}
	</script>
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
	<h1 style="text-align:center; background:#99FFFF; margin-top:-8px; margin-left:-8px; margin-right:-8px;; font-size:25px; height:40px;">Doctor Registration Form</h1> <hr style="margin:-16px;"/>
	<?php 
			if(isset($_GET["result"]))
			{
				if($_GET["result"] == "success")
				{
					echo '<h2 style="background:red;margin-top: 14px;padding: 5px;text-align: center;margin-bottom: 0px;">Congratulation!!Registration Succefull</h2>';
				}	
			}	
	?>
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
	<form action="docreghandler.php" method="post" enctype="multipart/form-data" name="fm">
		<table style="margin-top:2px;">
			<tr style="height: 55px;">
				<td>
					Name :
				</td>
				<td>
					<input style="width: 300px;" type="text" name="dname" placeholder="Name"/>
					<br />
					<span id = "ddname"></span>
				</td>
				
			</tr>
			
			<tr style="height: 55px;">
				<td>
					Contact No :	
				</td>
				<td>
					<input title="Please Enter a 11 Digit mobile no" style="width: 300px;" type="text" name="dcontact" placeholder="Contact No."/>
					<br />
					<span id="ddcon"></span>
				</td>
			</tr>
			<tr style="height: 55px;">
				<td>Address :</td>
				<td>
					<input style="width: 300px;" type="text" name="dadd" placeholder="Address"/>
					<br />
					<span id="ddadd"></span>
				</td>
				
			</tr>
			<tr style="height: 55px;">
				<td>
					Email ID :
				</td>
				<td>
					<input style="width: 300px;" type="text" name="demail" placeholder="Email"/>
					<br />
					<span id="ddemail"></span>
					
				</td>
				<td>
					<input type="submit" value="Submit" onclick="return validation();" style="cursor:pointer; height:36px; background:#99FFFF; font-size:15px;width:161px;">
				</td>
			</tr>
			<tr style="height: 55px;">
				<td>
					Password :
				</td>
				<td>
					<input style="width: 300px;" type="password" name="dpass" placeholder="Password"/>
					<br />
					<span id="ddpass"></span>
				</td>
			</tr>
			<tr style="height: 55px;">
				<td>
					Specialist :
				</td>
				<td>
					<input style="width: 300px;" type="text" name="dspe" placeholder="Specialist"/>
					<br />
					<span id="ddspe"></span>
				</td>
			</tr>
			<tr style="height: 55px;">
				<td>
					Gender :
					<br />
					<span id="ddgender"></span>
				</td>
				<td>
					<input id="male" type="radio" value="male" name="gender" style="cursor: pointer;"/><label for="male" style="cursor:pointer">Male</label> 
					<input id="female" type="radio" value="female" name="gender" style="cursor: pointer;"/><label for="female" style="cursor:pointer">Female</label>
				</td>
			</tr>
			<tr>
				<td>Consulting Hour: </td>
				<td>From <input type="text" name="from" placeholder="hh:mm" /> -- To <input type="text" name="to" placeholder="hh:mm" /></td>
				
			</tr>
			<tr>
				<td>
					<span id="dddconn"></span>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
		 
	 
	 