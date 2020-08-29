<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create department</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="738" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td><div align="center"><img src="logo/oes.png" width="895" height="128"></div></td>
  </tr>
  <tr>
    <td height="20"><?php 
	  	require('menu.php');
		createRegistrarMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><p>&nbsp;</p>
      <table width="477" border="0" align="center">
       <form name="frmCreateDepartment" method="post" onsubmit="return validateDepartmentForm()"
	   action="departmentcreated.php?uid=<?php echo $_GET['uid']; ?>">
        <tr>
          <td width="156" height="33">Department name </td>
          <td width="311"><input name="deptname" type="text" id="deptname" size="50" maxlength="50" /></td>
        </tr>
        <tr>
          <td height="33">Minimum credit hour</td>
          <td><input name="mincredithr" type="text" id="mincredithr" size="10" maxlength="10" /></td>
        </tr>
        <tr>
          <td height="51" colspan="2"><div align="center">
            <input type="submit" name="Submit" value="Create Department" />
          </div></td>
        </tr>
       </form>
      </table>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
