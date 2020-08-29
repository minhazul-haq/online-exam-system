<?php	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$userID = $_GET['uid'];
	rowcounter = $_GET['rctr'];
	
	$resultstudent = mysql_query("SELECT * FROM student where student_id='".$userID."'");
	$rowstudent = mysql_fetch_array($resultstudent);
	
	for($i=0; i<=$rowcounter; $i++)
	{
		mysql_query("insert into course_requested values('".$rowstudent['student_id']."',".$_POST["'course_no'".(string)$i."'"]."','".$rowstudent['session']."'");
	}
	
	header("Refresh: 5; URL=student.php?uid=".echo $_GET['uid']);
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="file:///M|/script.js"></script>
    <link rel="stylesheet" href="file:///M|/style.css" type="text/css" media="screen" />
	<title>OES :: Student created</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {font-size: 18px}
-->
</style></head>

<body>
<table width="738" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td><div align="center"><img src="file:///M|/logo/oes.png" width="895" height="128"></div></td>
  </tr>
  <tr>
    <td height="20">
	<hr size="1"></td>
  </tr>
  <tr>
    <td height="296"><div align="center"> 
      <?php 
	  	require('menu.php');
		createStudentMenu();
	?>
      New Course Requested! </div></td>
  </tr>
</table>
</body>
</html>
