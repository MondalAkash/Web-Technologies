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
	$_SESSION['ddid'] = $_GET['ddid'];
	$conn = mysqli_connect("localhost", "root", "","hms");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$result = mysqli_query($conn,"SELECT * FROM doctor WHERE did='".$_GET['ddid']."'");
	$num_of_user = mysqli_num_rows($result);
	$user_part = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Modify Doctor</title>
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
		
	<form action="docup.php" method="post" enctype="multipart/form-data">
			<table style="margin-top:20px;">
				<tr style="height: 55px;">
					<td>
						Name :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="dname" value = "<?php echo $user_part['dname']; ?>" placeholder="Name"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Contact No :	
					</td>
					<td>
						<input style="width: 300px;" type="text" name="dcontact" placeholder="Contact No." value = "<?php echo $user_part['dcontact']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>Address :</td>
					<td>
						<input style="width: 300px;" type="text" name="dadd" placeholder="Address" value = "<?php echo $user_part['dadd']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Email ID :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="demail" placeholder="Email" value = "<?php echo $user_part['demail']; ?>"/>
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
						<input style="width: 300px;" type="text" name="dpass" placeholder="Password" value = "<?php echo $user_part['dpass']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Specialist :
					</td>
					<td>
						<input style="width: 300px;" type="text" name="dspe" placeholder="Specialist" value = "<?php echo $user_part['dspecial']; ?>"/>
					</td>
				</tr>
				<tr style="height: 55px;">
					<td>
						Gender :
					</td>
					<td>
						<input type="text" name="gender" value = "<?php echo $user_part['dgen']; ?>"/>
					</td>
				</tr>
				<tr>
					<td>Consulting Hour: </td>
					<td>From <input type="text" name="from" placeholder="hh:mm" value = "<?php echo $user_part['dfrom']; ?>"/> -- To <input type="text" name="to" placeholder="hh:mm" value = "<?php echo $user_part['dto']; ?>"/></td>
				</tr>
			</table>
				   
		</form>
	</body>
</html>
