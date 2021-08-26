<head>
<link href="css/Level3_3.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'mobiles');
$q="select * from teacher where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/mobile/m_home.php');
}
else
{
	header('location:http://localhost/mobile/m_login.php');
}
?>
