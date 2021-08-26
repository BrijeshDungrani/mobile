<?php include_once("header.php");
	$condition=1;
	if($_REQUEST[search_text])
	{
		$st=$_REQUEST[search_text];
		$condition.=" AND ( st_name LIKE '%$st%'";
		$condition.=" OR  st_surname LIKE '%$st%'";
		$condition.=" OR  st_roll LIKE '%$st%'";
		$condition.=" OR  st_id LIKE '%$st%')";
	}
  $SQL="SELECT * FROM STUDENT WHERE $condition ORDER BY st_id";
  $rs=mysql_query($SQL) or die(mysql_error());
 ?>
 <div align="center"> <?=$_REQUEST['msg']?> </div>
 <div>
 <form name="search_text" action="#">
   <table width="90%" border="0" align="center">
     <tr>
       <th><div align="left">
         <div align="left">Search text : 
           
           
           <input type="text" name="search_text" />
           <input name="Search" type="submit" id="Search" value="Search" />
         </div></th>
     </tr>
   </table>
   </form>
 </div><br />
<table width="90%" border="1" align="center">
  <tr>
    <td><div align="right"><a href="student_add.php"></a></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="16%">Standard</td>
    <td width="25%">&nbsp;</td>
    <td width="7%">divison</td>
    <td width="22%">&nbsp;</td>
    <td width="17%">class teacher </td>
    <td width="13%">&nbsp;</td>
  </tr>
  <tr>
    <td>strength</td>
    <td>&nbsp;</td>
    <td>girls</td>
    <td>&nbsp;</td>
    <td>boys</td>
    <td>&nbsp;</td>
  </tr>
</table>
</br>
<form name="student_view" action="lib/student.php" method="post">
<table width="90%" height="50" border="1" align="center">
  <tr>
    <th><div align="center"><a href="student_add.php"></a><a href="javascript:delete_multiple_student()">DELETE</a></div></th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th><a href="student_add.php">ADD NEW STUDENT</a></th>
  </tr>
  <tr>
    <th width="209"><div align="center"><input type="checkbox" name="cck_all" id="cck_all" onclick="check_all(this)"/></div></th>
    <th width="209"><div align="center">student_id</div></th>
    <th width="289"><div align="center">student_name</div></th>
    <th width="175">surname</th>
    <th width="252">roll_no </th>
    <th width="226">Action</th>
  </tr>
  <?php
   while($data=mysql_fetch_assoc($rs))
   {
  ?>
  <tr>  
    <td><div align="center">
	 <input name="st_id_multiple[]" type="checkbox"  value="<?=$data[st_id]?>"  />
	 </div></td>
    <td><div align="center">
      <?=$data['st_id']?>
    </div></td>
    <td><div align="center">
      <?=$data['st_name']?>
    </div></td>
    <td><div align="center">
      <?=$data['st_surname']?>
    </div></td>
    <td><div align="center">
      <?=$data['st_roll']?>
    </div></td>
    <td>    <div align="center"><a href="student_add.php?st_id=<?=$data[st_id]?>">EDIT</a>    ||    <a href="javascript:delete_student(<?=$data[st_id]?>)">DELETE    </a>||<a href="fees_add.php?st_id=<?=$data[st_id]?>" > FEES</a> </div></td>
  </tr>
  <?php }  ?>
</table>
<input type="hidden" name="act" />
<input type="hidden" name="st_id" />
</form>
<?php include_once("footer.php"); ?>