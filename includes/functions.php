<?php
###Function for generation the dynamic option list#####
function get_option_list($table,$col_id,$col_value,$sel=0)
{
    $SQL="SELECT * FROM $table ORDER BY $col_value";
     $rs=mysql_query($SQL) or die(mysql_error());
	 $option_list="<option value=0>please select</option>";
	 while($data=mysql_fetch_assoc($rs))
	 {
	   if($data[$col_id]==$sel)
	   {
	  		$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>";
	   }
	   else
	   {
	  		$option_list.="<option value='$data[$col_id]'>$data[$col_value]</option>";
	   }
	 }
	 return $option_list;
}	 

###Function for generation the dynamic option list#####
function get_option_liststd($table,$col_id,$col_value,$sel=0)
{
    $SQL="SELECT * FROM $table ";
     $rs=mysql_query($SQL) or die(mysql_error());
	 $option_list="<option value=0>please select</option>";
	 while($data=mysql_fetch_assoc($rs))
	 {
	  if($data[$col_id]==$sel)
	   {
	  		$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>";
	   }
	   else
	   {
	  		$option_list.="<option value='$data[$col_id]'>$data[$col_value]</option>";
	   }
	 }
	 return $option_list;
}	 
###Function for generation the dynamic checkbox#####
function get_check_list($table,$col_id,$col_value,$name,$sel=0)
{
    $SQL="SELECT * FROM $table ORDER BY $col_value";
     $rs=mysql_query($SQL) or die(mysql_error());
	 $option_list="";
	 while($data=mysql_fetch_assoc($rs))
	 {
	   $option_list.="<input type ='checkbox' name='$name' value='$data[$col_id]'>$data[$col_value]<br>";
	 }
	 return $option_list;
}
?>