<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create notice</title>
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
    <td height="296"><p>&nbsp;</p>
      <form name="frmNewNotice" method="post" onsubmit="return validateNewNoticeForm()"
	  action="noticecreated.php?uid=<?php echo $_GET['uid']; ?>">
        <table width="451" border="0" align="center">
          <tr>
            <td height="25">Notice title</td>
            <td><input name="noticeTitle" type="text" id="noticeTitle" size="41" maxlength="50"></td>
          </tr>
          <tr>
            <td width="114" height="25"><div align="left">Notice data </div></td>
            <td width="327">
              <label>
              <textarea name="noticeData" cols="25" rows="5" id="noticeData"></textarea>
              </label>
            </td>
          </tr>
          <tr>
            <td height="50" colspan="2">
              <div align="center">
                <input type="submit" name="Submit" value="Create notice" />
            </div></td>
          </tr>
        </table>
      </form>      </td>
  </tr>
</table>
</body>
</html>
