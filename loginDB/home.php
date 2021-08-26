<?php session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/mobile/loginDB/login.php');
?>
<html>
<head>
<body>
<h2> hello  <?php echo $_SESSION['username']; ?>  </h2>	
			<a href="logout.php">Logout </a>
</body>
</head>
</html>