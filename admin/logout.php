<?php
	session_start();
	session_destroy();
	unset($_SESSION['uname']);
	$_SESSION['message'] = "You are now logout!";
	header("Location: login.php");
?>