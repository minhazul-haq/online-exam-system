<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Upload Course contents</title>
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
		createTeacherMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><form name="frmUploadContent" method="post" onsubmit="return validateUploadContentsForm()"
	enctype="multipart/form-data" action="contentuploaded.php?uid=<?php echo $_GET['uid']; ?>" >
      <table width="491" border="0" align="center">
        <tr>
          <td height="25">Content title</td>
          <td>
            <input name="ctitle" type="text" id="ctitle" size="50" maxlength="50" />
          </td>
        </tr>
        <tr>
          <td>Belongs to course </td>
          <td>
            <select name="cbelongs" id="cbelongs">
            <?php  
		  		createCourseList(); 
		  	?>
            </select>
          </td>
        </tr>
        <tr>
          <td width="146">Content location </td>
          <td width="351">
            <input name="clocation" type="file" id="clocation" size="38" maxlength="38" />
          </td>
        </tr>
        <tr>
          <td height="52" colspan="2">
            <div align="center">
              <input type="submit" name="Submit" value="Upload content" />
          </div></td>
        </tr>
      </table>
    </form>    </td>
  </tr>
</table>
</body>
</html>
