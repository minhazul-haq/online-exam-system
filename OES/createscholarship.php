<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create scholarship</title>
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
		createTeacherMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center">
      <form name="frmNewScholarship" method="post" onsubmit="return validateNewScholarshipForm()"
	  action="scholarshipcreated.php?uid=<?php echo $_GET['uid']; ?>">
        <table width="600" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td>Scholarship name: </td>
            <td><input name="scname" type="text" id="scname" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Department:</td>
            <td><select name="scdept" id="scdept">
            <?php createDeptList(); ?>
            </select></td>
          </tr>
          <tr>
            <td>Required cgpa: </td>
            <td><input name="sccgpa" type="text" id="sccgpa" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Scholarship amount: </td>
            <td><input name="scamount" type="text" id="scamount" size="10" maxlength="10">
              tk.</td>
          </tr>
          <tr>
            <td height="46" colspan="2"><div align="center">
              <input type="submit" name="Submit" value="Create scholarship">
            </div></td>
            </tr>
        </table>
      </form>
    </div></td>
  </tr>
</table>
</body>
</html>
