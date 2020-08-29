<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create course</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style10 {font-family: "Times New Roman", Times, serif}
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
    <td height="296"><p>&nbsp;</p>
      <form name="frmCreateCourse" method="post" onsubmit="return validateCourseForm()"
	  action="coursecreated.php?uid=<?php echo $_GET['uid']; ?>" >
        <table width="515" border="0" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td height="24" class="style10">Department name </td>
            <td><strong>
              <select name="cdepartment" id="cdepartment">
              <?php createDeptList(); ?>
              </select>
            </strong></td>
          </tr>
          <tr>
            <td height="24" class="style10">Course no.</td>
            <td><input name="cno" type="text" id="cno" size="10" maxlength="10" /></td>
          </tr>
          <tr>
            <td width="198" class="style10">Course title </td>
            <td width="307"><input name="ctitle" type="text" id="ctitle" size="50" maxlength="50" /></td>
          </tr>
          <tr>
            <td height="24" class="style10">Course type</td>
            <td><select name="ctype" id="ctype">
              <option value="Undergraduate">Undergraduate</option>
              <option value="Graduate">Graduate</option>
            </select></td>
          </tr>
          <tr>
            <td class="style10">Course description </td>
            <td><input name="cdescription" type="text" id="cdescription" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td height="24" class="style10">Pre-requisite course</td>
            <td><input name="cprereq" type="text" id="cprereq" size="8" maxlength="8" /></td>
          </tr>
          <tr>
            <td height="26" class="style10">Level</td>
            <td><strong>
              <select name="clevel" id="clevel">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
             </strong></td>
          </tr>
          <tr>
            <td height="26" class="style10">Term</td>
            <td><strong>
              <select name="cterm" id="cterm">
                <option>1</option>
                <option>2</option>
              </select>
             </strong></td>
          </tr>
          <tr>
            <td height="24" class="style10">Credit hour</td>
            <td><input name="ccredithr" type="text" id="ccredithr2" size="10" maxlength="10" /></td>
          </tr>
          <tr>
            <td height="24" class="style10">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="24" class="style10">CT1 percentage</td>
            <td><input name="ct1" type="text" id="ct1" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="24" class="style10">CT2 percentage</td>
            <td><input name="ct2" type="text" id="ct2" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="24" class="style10">CT3 percentage</td>
            <td><input name="ct3" type="text" id="ct3" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="24" class="style10">CT4 percentage</td>
            <td><input name="ct4" type="text" id="ct4" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="24" class="style10">CT5 percentage</td>
            <td><input name="ct5" type="text" id="ct5" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="24" class="style10">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="24" class="style10">Final1 percentage</td>
            <td><input name="final1" type="text" id="final1" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="24" class="style10">Final1 percentage</td>
            <td><input name="final2" type="text" id="final2" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="55" colspan="2" div align="center">
              <input name="Submit" type="submit" value="Create course" />
            </td>
          </tr>
        </table>
      </form>
      <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
