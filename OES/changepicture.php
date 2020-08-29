<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Change picture</title>
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
      <form name="frmChangePicture" method="post" onsubmit="return validatePictureForm()"
	  enctype="multipart/form-data" action="picturechanged.php?uid=<?php echo $_GET['uid']; ?>">
        <table width="492" border="0">
          <tr>
            <td width="142">New picture location </td>
            <td width="356"><input name="picturelocation" type="file" id="picturelocation" size="38" maxlength="38"></td>
          </tr>
          <tr>
            <td height="45" colspan="2"><div align="center">
              <input type="submit" name="Submit" value="Upload photo">
            </div></td>
            </tr>
        </table>
      </form>
      </div></td>
  </tr>
</table>
</body>
</html>
