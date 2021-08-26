<?php
include_once("../includes/db_connect.php");
if($_REQUEST['act'])
{
   $_REQUEST['act']();
}
#####Function for saving the record of student#####
function save_student()
{
    $R=$_REQUEST;
	$image_name = $_FILES[st_photo][name];
	if($image_name)
		{
			$location = $_FILES[st_photo][tmp_name];
			$image_arr=explode(".",$image_name);
			$image_name = $image_arr[0]."_".time().".".$image_arr[1];
			move_uploaded_file($location,"../uploads/$image_name");
		}
	else
		{
	    	$image_name=$R[st_photo];
		}
	if($R[st_id])
	{
	   $SQL="
	             UPDATE `student` SET 
				`st_name` = '$R[st_name]',
				`st_surname` = '$R[st_surname]',
				`st_father` = '$R[st_father]', 
				`st_mother` = '$R[st_mother]',
				`st_add` = '$R[st_add]',
				`st_roll` = '$R[st_roll]', 
				`st_city` = '$R[st_city]', 
				`st_state` = '$R[st_state]',
				`st_gender` = '$R[st_gender]', 
				`st_dob` = '$R[st_dob]', 
				`st_caste` = '$R[st_caste]', 
				`st_blood` = '$R[st_blood]', 
				`st_std` = '$R[st_std]', 
				`st_div` = '$R[st_div]', 
				`st_mobile` = '$R[st_mobile]', 
				`st_email` = '$R[st_email]', 
				`st_photo` = '$image_name' WHERE `st_id` =$R[st_id];
				";
				$msg="student updated successfully...";
	}
	else
	{
   $SQL="insert into `student` (`st_name`,`st_surname` , `st_father`, `st_mother`, `st_add`, `st_roll`, `st_city`, `st_state`, `st_gender`, `st_dob`, `st_caste`, `st_blood`, `st_std`, `st_div`, `st_mobile`, `st_email`, `st_photo`) VALUES ('$R[st_name]', '$R[st_surname]','$R[st_father]', '$R[st_mother]', '$R[st_add]', '$R[st_roll]', '$R[st_city]', '$R[st_state]', '$R[st_gender]', '$R[st_dob]', '$R[st_caste]', '$R[st_blood]', '$R[st_std]', '$R[st_div]', '$R[st_mobile]', '$R[st_email]', '$image_name');";
   
    $msg="student saved successfully...";
    }
    $rs=mysql_query($SQL) or die(mysql_error());
   
	if($rs)
    {
	   header("Location:../student_view.php?msg=$msg");
	}
}



######function for deleting the student#####


function delete_student()
{
		////delete the image if exist////
		
      $SQL="SELECT * FROM student WHERE st_id='$_REQUEST[st_id]'";
	  $rs=mysql_query($SQL) or die(mysql_error());
	  $data=mysql_fetch_assoc($rs);
	  if($data[st_photo])
	  	{
		   unlink("../uploads/".$data[st_photo]);
		}
		////delete the record from database////
      $SQL="DELETE FROM student WHERE st_id=$_REQUEST[st_id]";
	  $rs=mysql_query($SQL) or die(mysql_error());
	  $msg="student deleted successfully...";
	  if($rs)
    {
	   header("Location:../student_view.php?msg=$msg");
	}
}

####function for delete multiple student####


function delete_multiple_student()
{
	$R=$_REQUEST;
    $st_id_array=$R[st_id_multiple];
	foreach($st_id_array as $st_id)
	{
	////delete the image if exist////
		
      $SQL="SELECT * FROM student WHERE st_id='$st_id'";
	  $rs=mysql_query($SQL) or die(mysql_error());
	  $data=mysql_fetch_assoc($rs);
	  if($data[st_photo])
	  	{
		   unlink("../uploads/".$data[st_photo]);
		}
		////delete the record from database////
      $SQL="DELETE FROM student WHERE st_id=$st_id";
	  $rs=mysql_query($SQL) or die(mysql_error());
	  $msg="student deleted successfully...";
	 
   }
	
	   header("Location:../student_view.php?msg=$msg");
	
}
?>