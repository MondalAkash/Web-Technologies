<?php
	session_start();
	unset($_SESSION["puname"]);
	unset($_SESSION['ppid']);
	unset($_SESSION['ppass']);
	header("Location: login.php");	
?>