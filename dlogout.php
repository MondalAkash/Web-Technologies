<?php
	session_start();
	unset($_SESSION["duname"]);
	header("Location: login.php");	
?>