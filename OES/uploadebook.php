<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Upload ebook</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

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
		
		if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><form name="frmUploadEbook" method="post" onsubmit="return validateUploadEbookForm()"
	enctype="multipart/form-data" action="ebookuploaded.php?uid=<?php echo $_GET['uid']; ?>" >
      <table width="453" border="0" align="center">
        <tr>
          <td height="25">Ebook title </td>
          <td><input name="etitle" type="text" id="etitle2" size="50" maxlength="50" /></td>
        </tr>
        <tr>
          <td width="147">Ebook author </td>
          <td width="302">
            <label>
            <input name="eauthor" type="text" id="eauthor3" size="50" maxlength="50" />
            </label>
            <label></label>
          </td>
        </tr>
        <tr>
          <td height="33">Belongs to course</td>
          <td><select name="ebelongs" id="ebelongs">
          <?php  
		  	createCourseList(); 
		  ?>
          </select></td>
        </tr>
        <tr>
          <td height="33">Ebook location </td>
          <td>
            <input name="elocation" type="file" id="elocation" size="38" maxlength="38" />
          </td>
        </tr>
        <tr>
          <td height="57" colspan="2">
            <div align="center">
              <input type="submit" name="Submit" value="Upload ebook">
            </div>
        </tr>
      </table>
    </form>    </td>
  </tr>
</table>
</body>
</html>
