<?php
	session_start();
	unset($_SESSION["auname"]);
	unset($_SESSION["auemail"]);
	header("Location: login.php");	
?>