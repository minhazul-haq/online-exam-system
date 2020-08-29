<?php
	require('menu.php');
	$userType=substr($_GET['uid'],0,3);
	
	if (strcmp($userType,"tea")==0)
		header("Refresh: 5; URL=teacher.php?uid=".$_GET['uid']);
	else if (strcmp($userType,"std")==0)
		header("Refresh: 5; URL=student.php?uid=".$_GET['uid']);
	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
		
	$totalRow = mysql_num_rows(mysql_query("select * from course_contents"));
	
	$currentDateTime = date('y-m-j H-i-s'); 
					
	mysql_query("insert into course_contents values('con".($totalRow+1)."','".$_POST['ctitle']."','".
	$_POST['cbelongs']."',".$_FILES["clocation"]["size"].",'".$currentDateTime."','".$_GET['uid']."')");
	
	uploadContent($_FILES["clocation"],"con".(string)($totalRow+1));
	
	$currentTimeStamp = date('y-m-j H-i-s');
	writeLogFile($currentTimeStamp." : ".$_GET['uid']." uploaded content con".($totalRow+1).".");
?>	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Content uploaded</title>
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
	  	if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu();
	?></td>
  </tr>
  <tr>
    <td height="296"><div align="center">Your content has been uploaded!</div></td>
  </tr>
</table>
</body>
</html>
