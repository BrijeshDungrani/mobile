<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/Level3_3.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form name="fees_frm" action="lib/fees.php" >
<table width="337" border="1" align="center">
  <tr>
    <th colspan="2"><div align="center">STUDENT FEES ENTRY FORM </div></th>
  </tr>
  <tr>
    <td width="172"><div align="center">Student name </div></td>
    <td width="149"><input type="text" name="textfield" value="<?=$data[st_id]?>" /></td>
  </tr>
  <tr>
    <td><div align="center">Fees amount </div></td>
    <td><input type="text" name="textfield" /></td>
  </tr>
  <tr>
    <td><div align="center">Fees Date </div></td>
    <td><input type="text" name="textfield2" /></td>
  </tr>
  <tr>
    <td><div align="center">Fees for standard </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center">Fees for divison </div></td>
    <td><input type="text" name="textfield4" /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
