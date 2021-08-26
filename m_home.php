<head>
<link href="css/Level3_3.css" rel="stylesheet" type="text/css" />
</head>
<?php session_start();
if(!isset($_SESSION['username']))
header('location:http://localhost/mobile/m_login.php');
?>
<html>
<head>
<body>
<h2><?php echo $_SESSION['username']; ?>  </h2>
<?php include_once("student_view.php"); ?>
<a href="m_logout.php">Logout </a>
</body>
</head>
</html>