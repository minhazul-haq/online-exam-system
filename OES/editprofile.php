<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Edit profile</title>
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
		
		if (strcmp($userType,"adm")==0)
			createAdminMenu(); 
		else if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu();
			
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$userID = $_GET['uid'];
		
		if (strcmp($userType,"adm")==0)
		{
			$result = mysql_query("select name,address,email,mobile_no from admin where admin_id='".$userID."'"); 
		}
		else if (strcmp($userType,"tea")==0)
		{
			$result = mysql_query("select name,address,email,mobile_no from teacher where teacher_id='".$userID."'"); 
		}
		else if (strcmp($userType,"std")==0)
		{
			$result = mysql_query("select name,address,email,mobile_no from student where student_id='".$userID."'"); 
		}
		
		$row = mysql_fetch_array($result);
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center">
      <form name="frmEditAdminProfile" method="post" onsubmit="return validateEditAdminProfileForm()"
	  action="profileedited.php?uid=<?php echo $_GET['uid']; ?>" >
        <table width="403" border="0">
          <tr>
            <td width="93">Name</td>
            <td width="300"><input name="newName" type="text" id="newName"
			value= "<?php echo $row['name']; ?>" size="50" maxlength="50" ></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input name="newAddress" type="text" id="newAddress" size="50" maxlength="50"
			value= "<?php echo $row['address']; ?>" ></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="newEmail" type="text" id="newEmail" size="50" maxlength="50"
			value= "<?php echo $row['email']; ?>" ></td>
          </tr>
          <tr>
            <td>Mobile no</td>
            <td><input name="newMobile" type="text" id="newMobile" size="50" maxlength="50"
			value= "<?php echo $row['mobile_no']; ?>" ></td>
          </tr>
          <tr>
            <td height="44" colspan="2">
              <div align="center">
                <input type="submit" name="Submit" value="Save data">
              </div></td>
            </tr>
        </table>
      </form>
      </div></td>
  </tr>
</table>
</body>
</html>
