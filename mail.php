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
	<title>Email</title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<!--<script type="text/javascript">
		function AutoRefresh( t ) {    
               setTimeout("location.reload(true);", t);
            }
	</script>-->
</head>
<body onload="JavaScript:AutoRefresh(5000);">
	<div class="header-area">
		<img src="images/hospital-512.gif" alt="hospital_logo" />
		<a href="index.php"><h1>Online Hospital Management System</h1></a>
	</div>
	<h1 style="text-align:center; background:#99FFFF; margin-top:-8px; margin-left:-8px; margin-right:-8px;; font-size:25px; height:40px;">Sent Mail</h1> <hr style="margin:-16px;"/>
	
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
	</table>
	<form action="mailhandler.php" method="post">
		<table>
			<tr>
				<td>From:</td>
				<td><input  readonly type="text" name="aid" value="<?php echo $_SESSION['auemail']; ?>"/></td>
			</tr>
			<tr>
				<td>To:</td>
				<td>
					<select name="did" id="">
						<option value="">Select Doctor</option>
						<?php 
							$n = "y";
							$conn=mysqli_connect('localhost','root','','hms'); 
							$result=mysqli_query($conn,"SELECT dname,demail FROM doctor d where d.delete='$n'"); 
							while($row=mysqli_fetch_assoc($result)) { 
								echo "<option value='$row[demail]'>$row[dname]</option>"; 
							} 
						?> 
						
						
					</select>
					
				</td>
			</tr>
			<tr>
				<td>Content:</td>
				<td><textarea name="content" id="ta" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="sbmt" name="submit" value="Send"/></td>
			</tr>
			
			
			
		</table>
	</form>
</body>
</html>

<!-- Auto Refresh Link: https://www.tutorialspoint.com/javascript/javascript_page_refresh.htm -->
