<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Change password</title>
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
    <td height="20">
	<?php 
	  	require('menu.php');
		
		$userType=substr($_GET['uid'],0,3);
		
		if (strcmp($userType,"adm")==0)
			createAdminMenu(); 
		else if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu();
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center">
      <form name="frmChangePassword" method="post" onsubmit="return validatePasswordForm()"
	  action="passwordchanged.php?uid=<?php echo $_GET['uid']; ?>">
        <table width="218" border="0">
          <tr>
            <td width="147">Current password </td>
            <td width="61"><input name="oldpassword" type="password" id="oldpassword" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>New password </td>
            <td><input name="newpassword1" type="password" id="newpassword1" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Retype password </td>
            <td><input name="newpassword2" type="password" id="newpassword2" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="45" colspan="2"><div align="center">
              <input type="submit" name="Submit" value="Change password">
            </div></td>
            </tr>
        </table>
      </form>
      </div></td>
  </tr>
</table>
</body>
</html>
