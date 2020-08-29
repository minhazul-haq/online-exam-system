<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create institution</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {font-size: 18px}
-->
</style></head>

<body>
<table width="738" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td><div align="center"><img src="logo/oes.png" width="895" height="128"></div></td>
  </tr>
  <tr>
    <td height="20"><?php 
	  	require('menu.php');
		createAdminMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center">
      <p>&nbsp;</p>
      <form name="frmCreateInstitution" method="post" onsubmit="return validateInstitutionForm()"
	  enctype="multipart/form-data"  action="institutioncreated.php?uid=<?php echo $_GET['uid']; ?>">
        <table width="477" border="0">
          <tr>
            <td width="127">Intitution name </td>
            <td width="340"><input name="iname" type="text" id="iname" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input name="iaddress" type="text" id="iaddress" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td>Registrar name</td>
            <td><input name="rname" type="text" id="rname" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input name="raddress" type="text" id="raddress" size="50" maxlength="100"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="remail" type="text" id="remail" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Mobile no.</td>
            <td><input name="rmobile" type="text" id="rmobile" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Profile picture </td>
            <td><input name="rprofile" type="file" id="sprofile" size="40" maxlength="40"></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td>Username</td>
            <td><input name="rusername" type="text" id="rusername" size="20" maxlength="20"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input name="rpassword" type="password" id="rpassword" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="56" colspan="2"><div align="center">
              <input type="submit" name="Submit2" value="Create institution">
            </div></td>
            </tr>
        </table>
      </form>
      <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
