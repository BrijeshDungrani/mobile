<head>
<link href="css/Level3_3.css" rel="stylesheet" type="text/css" />
</head>
<?php session_start();
if(!isset($_SESSION['stu_id']))
header('location:http://localhost/mobile/ms_login.php');
?>
<html>
<head>
<body>
<h2><?php echo $_SESSION['stu_id']; ?>  </h2>
<?php include_once("student_view.php"); ?>
<a href="m_logout.php">Logout </a>
</body>
</head>
</html>
