<head>
<link href="css/Level3_3.css" rel="stylesheet" type="text/css" />
</head>
<?php
session_start();
$stu_id=$_POST['stu_id'];
$stu_password=$_POST['stu_password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'mobiles');
$q="select * from m_student where stu_id='$stu_id' && stu_password='$stu_password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['stu_id']=$stu_id;
	header('location:http://localhost/mobile/ms_home.php');
}
else
{
	header('location:http://localhost/mobile/m_login.php');
}
?>
