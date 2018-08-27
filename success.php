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
	<title>Confirmed</title>
</head>
<body>
	<script type="text/javascript">
		alert("Password Changed Successfully!!");
		window.location.href='plogout.php';
	</script>
</body>
</html>