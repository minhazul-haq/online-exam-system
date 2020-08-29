<?php
	require('menu.php');
	
	$userID=$_GET['uid'];
	$userType=substr($_GET['uid'],0,3);
	
	if (strcmp($userType,"adm")==0)
		header("Refresh: 5; URL=admin.php?uid=".$_GET['uid']);
	else if (strcmp($userType,"tea")==0)
		header("Refresh: 5; URL=teacher.php?uid=".$_GET['uid']);
	else if (strcmp($userType,"std")==0)
		header("Refresh: 5; URL=student.php?uid=".$_GET['uid']);
		
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$currentTimeStamp = date('y-m-j H-i-s'); 
	writeLogFile($currentTimeStamp." : ".$_GET['uid']." edited his/her profile.");
		
	if (strcmp($userType,"adm")==0)
	{
		mysql_query("update admin set name='".$_POST['newName']."',address='".$_POST['newAddress'].
		"',email='".$_POST['newEmail']."',mobile_no='".$_POST['newMobile']."' where admin_id='".$userID."'");
	
		header("Refresh: 5; URL=admin.php?uid=".$_GET['uid']);
	}
	else if (strcmp($userType,"tea")==0)
	{
		mysql_query("update teacher set name='".$_POST['newName']."',address='".$_POST['newAddress'].
		"',email='".$_POST['newEmail']."',mobile_no='".$_POST['newMobile']."' where teacher_id='".$userID."'");
		
		header("Refresh: 5; URL=teacher.php?uid=".$_GET['uid']);
	}
	else if (strcmp($userType,"std")==0)
	{
		mysql_query("update student set name='".$_POST['newName']."',address='".$_POST['newAddress'].
		"',email='".$_POST['newEmail']."',mobile_no='".$_POST['newMobile']."' where student_id='".$userID."'");
	
		header("Refresh: 5; URL=student.php?uid=".$_GET['uid']);
	}
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Profile edited</title>
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
    <td height="20">
	<?php 
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
    <td height="296"><div align="center"><span class="style2"> New profile data has been saved! </div></td>
  </tr>
</table>
</body>
</html>
