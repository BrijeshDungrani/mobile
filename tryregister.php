
<?php include_once("includes/header.php");
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