<?php
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
		
	$userID = $_GET['uid'];
	$oldPassword = $_POST['oldpassword'];
	$newPassword = $_POST['newpassword1'];
	
	$currentTimeStamp = date('y-m-j H-i-s'); 
	writeLogFile($currentTimeStamp." : ".$_GET['uid']." changed password".);
	
	$result = mysql_query("select password from login where user_id='".$userID."'");
	$row = mysql_fetch_array($result);
	
	$isError=0;
	
	if (strcmp($oldPassword,$row['password'])==0)
	{
		mysql_query("update login set password='".$newPassword."' where user_id='".$userID."'"); 
	}
	else
	{
		$isError=1;
	}
	
	$userType=substr($_GET['uid'],0,3);
	
	if (strcmp($userType,"adm")==0)
		header("Refresh: 5; URL=admin.php?uid=".$_GET['uid']);
	else if (strcmp($userType,"tea")==0)
		header("Refresh: 5; URL=teacher.php?uid=".$_GET['uid']);
	else if (strcmp($userType,"std")==0)
		header("Refresh: 5; URL=student.php?uid=".$_GET['uid']);		
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Password changed</title>
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
	  	require('menu.php');
		
		if (strcmp($userType,"adm")==0)
			createAdminMenu(); 
		else if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu();
	?></td>
  </tr>
  <tr>
    <td height="296">
	<div align="center">
	<?php  
		if ($isError)
			echo "Your old password does not match!";
		else
			echo "Your new password has been set!";
	?>
	</div></td>
  </tr>
</table>
</body>
</html>
