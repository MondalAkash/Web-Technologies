<?php 
	session_start();
	if(isset($_SESSION['auname'])){
	}
	else
	{
		header("Location: login.php");
	}	
	?>
<?php 
	//$i = $_REQUEST["id"];
	//$_SESSION['id'] = $i;
	$_SESSION['ppid'] = $_GET['ppid'];
	$conn = mysqli_connect("localhost", "root", "","hms");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$result = mysqli_query($conn,"SELECT * FROM patient WHERE pid='".$_GET['ppid']."'");
	$num_of_user = mysqli_num_rows($result);
	$user_part = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Modify Patient</title>
	</head>
	<body>
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
		
	<form action="pmodup.php" method="post" enctype="multipart/form-data">
			<table style="margin-top:20px;">
				<tr style="height: 55px;">
					<td>
						First Name :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="fname" value = "<?php echo $user_part['pfname']; ?>" placeholder="First Name"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Last Name :	
					</td>
					<td>
						<input style="width: 300px;" type="text" name="lname" placeholder="Last Name" value = "<?php echo $user_part['plname']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>Dob :</td>
					<td>
						<input style="width: 300px;" type="text" name="pdob" placeholder="Dob" value = "<?php echo $user_part['pdob']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Email ID :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="pemail" placeholder="Email" value = "<?php echo $user_part['pemail']; ?>"/>
					</td>
					<td>
						<input type="submit" value="Update" style="cursor:pointer; height:36px; background:#99FFFF; font-size:15px;width:161px;">
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Password :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="ppass" placeholder="Password" value = "<?php echo $user_part['ppass']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Address :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="padd" placeholder="Specialist" value = "<?php echo $user_part['padd']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Contact No. :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="pmob" placeholder="Contact No" value = "<?php echo $user_part['pmob']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Blood Group :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="pbg" placeholder="Blood Group" value = "<?php echo $user_part['pbg']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Marital Status :
					</td>
					<td>		
						<input type="text" name="ms" value = "<?php echo $user_part['pms']; ?>"/> single/married
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Gender :
					</td>
					<td>
						<input type="text" name="gender" value = "<?php echo $user_part['pgender']; ?>"/> male/female
					</td>
				</tr>
			</table>
				   
		</form>
	</body>
</html>
