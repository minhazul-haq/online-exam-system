<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: New teacher</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">    
    <style type="text/css">
<!--
.style1 {font-size: 18px}
-->
    </style>
</head>

<body>
<table width="905" border="0" align="center" class="tableBackground">
  <tr>
    <td width="895"><img src="logo/oes.png" width="895" height="129"></td>
  </tr>
  <tr>
    <td height="22"><hr size="1"></td>
  </tr>
  <tr>
    <td height="308"><div align="center" class="style1">
      <form name="frmNewTeacher" method="post" onsubmit="return validateNewTeacherForm()"
	  enctype="multipart/form-data" action="teachercreated.php">
        <table width="522" border="0" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td width="154">Name:</td>
            <td width="354"><input name="tname" type="text" id="tname" size="50" maxlength="50"></td>
            </tr>
          <tr>
            <td>Department:</td>
            <td><select name="tdept" id="tdept">
            <?php 
				require('menu.php');
				createDeptList(); 
			?>
            </select></td>
          </tr>
          <tr>
            <td>Designation:</td>
            <td><select name="tdesig" id="tdesig">
              <option value="Lecturer">Lecturer</option>
              <option value="Assistant Professor">Assistant Professor</option>
              <option value="Associate Professor">Associate Professor</option>
              <option value="Professor">Professor</option>
              <option value="Departmental Head">Departmental Head</option>
              <option value="Vice Chancellor">Vice Chancellor</option>
            </select></td>
            </tr>
          <tr>
            <td height="29">Address:</td>
            <td><input name="taddress" type="text" id="taddress" size="50" maxlength="100"></td>
            </tr>
          <tr>
            <td>Email:</td>
            <td><input name="temail" type="text" id="temail" size="50" maxlength="50"></td>
            </tr>
          <tr>
            <td>Mobile no: </td>
            <td><input name="tmobile" type="text" id="tmobile" size="50" maxlength="50"></td>
            </tr>
          <tr>
            <td>Profile picture: </td>
            <td>                <input name="tprofile" type="file" id="tprofile" size="38" maxlength="40"></td></tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            </tr>
          <tr>
            <td>Username:</td>
            <td><input name="tusername" type="text" id="tusername" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="tpassword" type="password" id="tpassword" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td height="59" colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Create teacher">
            </div></td>
          </tr>
        </table>
      </form>
    </div></td>
  </tr>
</table>
<table width="934" border="0" align="center">
  <tr>
    <td width="292"><div align="center"><a href="newstudent.php">New student</a></div></td>
    <td width="351"><div align="center"><a href="trialexam.php">Trial exam</a></div></td>
    <td width="277" height="48"><div align="center"> <a href="login.php">User login</a></div></td>
  </tr>
</table>
</body>
</html>
