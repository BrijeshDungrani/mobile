
<?php include_once("includes/header.php");
		include_once("includes/db_connect.php");
if($_REQUEST[st_id])
{
   $SQL="SELECT * FROM student WHERE st_id = '$_REQUEST[st_id]' " ;
   $rs=mysql_query($SQL) or die(mysql_error());
   $data=mysql_fetch_assoc($rs);
}
 ?>
<style type="text/css">
<!--
.style3 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>



<form action="lib/student.php" enctype="multipart/form-data" name="student_frm" onsubmit="return valid_student(this)" method="post">
<table width="90%" border="1" align="center" class="">
  <tr>
    <th colspan="4"><span class="style3">STUDENT REGISTRATION FORM </span></th>
  </tr>
  <tr>
    <th>NAME</th>
    <td><input name="st_name" type="text" id="st_name" value="<?=$data[st_name]?>" /></td>
    <th>SURNAME</th>
    <td><input name="st_surname" type="text" id="st_surname" value="<?=$data[st_surname]?>" /></td>
  </tr>
  <tr>
    <th >FATHER NAME </th>
    <td><input name="st_father" type="text" id="st_father"  value="<?=$data[st_father]?>" /></td>
    <th>MOTHER NAME </th>
    <td><input name="st_mother" type="text" id="st_mother" value="<?=$data[st_mother]?>" /></td>
  </tr>
  <tr>
    <th>ADDRESS</th>
    <td><textarea name="st_add" id="st_add"><?=$data[st_add]?></textarea></td>
    <th>ROLL NO </th>
    <td><input name="st_roll" type="text" id="st_roll" value="<?=$data[st_roll]?>" /></td>
  </tr>
  <tr>
    <th>CITY</th>
    <td><select name="st_city" id="st_city" >
      <?php echo get_option_list("city","city_id","city_name",$data[st_city]); ?>
    </select></td>
    <th>STATE</th>
    <td><select name="st_state" id="st_state"  >
	   <?php echo get_option_list("state","state_id","state_name",$data[st_state]); ?>
        </select></td>
  </tr>
  <tr>
    <th>GENDER</th>
    <td><input name="st_gender" type="radio" value="male" <?php if($data[st_gender]=="male") echo "checked"; ?> />
      Male 
      <input name="st_gender" type="radio" value="female" <?php if($data[st_gender]=="female") echo "checked"; ?> />
      Female </td>
    <th>DATE OF BIRTH </th>
    <td><input name="st_dob" type="date" id="st_dob" value="<?=$data[st_dob]?>" /></td>
  </tr>
  <tr>
    <th>CASTE</th>
    <td><input name="st_caste" type="text" id="st_caste" value="<?=$data[st_caste]?>" /></td>
    <th>BLOOD GROUP </th>
    <td><select name="st_blood" id="st_blood">
	   <?php echo get_option_list("blood","blood_id","blood_name",$data[st_blood]); ?>
        </select></td>
  </tr>
  <tr>
    <th>STD</th>
    <td><select name="st_std" id="st_std">
	<?php echo get_option_liststd("std","std_id","std_name",$data[st_std]); ?>
        </select></td>
    <th>DIV</th>
    <td><select name="st_div" id="st_div">
        <?php echo get_option_list("divison","divison_id","divison_name",$data[st_div]); ?>
		</select></td>
  </tr>
  <tr>
    <th>MOBILE</th>
    <td><input name="st_mobile" type="text" id="st_mobile" value="<?=$data[st_mobile]?>" /></td>
    <th>EMAIL</th>
    <td><input name="st_email" type="text" id="st_email" value="<?=$data[st_email]?>" /></td>
  </tr>
  <tr>
    <th>PHOTO</th>
    <td>
	<input name="st_photo" type="file" id="st_photo"  />
	<?php	
		if($data[st_photo])
		{
		    echo "<br> <img src='$SERVER_PATH/uploads/$data[st_photo]' height=50>";
		}
	?>	</td>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4"><label>
      <input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" />
    </label></th>
  </tr>
</table>
<input type="hidden" name="st_photo" value="<?=$data[st_photo]?>" />
<input type="hidden" name="act" value="save_student" />
<input type="hidden" name="st_id" value="<?=$data[st_id]?>" />
</form>
<?php include_once("includes/footer.php"); ?>