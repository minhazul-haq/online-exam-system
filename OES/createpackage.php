<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create package</title>
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
	?></td>
  </tr>
  <tr>
    <td height="296"><div align="center">
      <form name="frmCreatePackage" method="post" onsubmit="return validatePackageForm()"
	  action="packagecreated.php?uid=<?php echo $_GET['uid']; ?>">
        <table width="453" border="0" cellpadding="2" cellspacing="1">
          <tr>
            <td width="146">Package name </td>
            <td width="300"><input name="pname" type="text" id="pname" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Registration fee </td>
            <td><input name="pfee" type="text" id="pfee" size="10" maxlength="5"> 
              tk. </td>
          </tr>
          <tr>
            <td>Validity</td>
            <td><select name="pvalidity" id="pvalidity">
              <option value="30">30</option>
              <option value="60">60</option>
              <option value="90">90</option>
              <option value="180">180</option>
            </select>
              days</td>
          </tr>
          <tr>
            <td>Vat</td>
            <td><input name="pvat" type="text" id="pvat" size="10" maxlength="6">
              %</td>
          </tr>
          <tr>
            <td height="82" colspan="2"><div align="center">
                <p>
                  <input name="btnCreatePackage" type="submit" id="btnCreatePackage" value="Create package">
          </p>
                <p>&nbsp;      </p>
            </div></td>
            </tr>
        </table>
        </form>
    </div></td>
  </tr>
</table>
</body>
</html>
