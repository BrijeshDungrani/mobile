<?php session_start();
	session_destroy();
	header('location:http://localhost/mobile/loginDB/login.php');
?>
