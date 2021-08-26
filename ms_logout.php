<head>
<link href="css/Level3_3.css" rel="stylesheet" type="text/css" />
</head>
<?php session_start();
	session_destroy();
	header('location:http://localhost/mobile/m_login.php');
?>
