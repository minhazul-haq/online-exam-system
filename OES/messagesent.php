<?php
	$userType=substr($_GET['uid'],0,3);
	
	if (strcmp($userType,"tea")==0)
		header("Refresh: 5; URL=teacher.php?uid=".$_GET['uid']);
	else if (strcmp($userType,"std")==0)
		header("Refresh: 5; URL=student.php?uid=".$_GET['uid']);
		
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
		
	$totalRow = mysql_num_rows(mysql_query("select * from message"));
	$currentDateTime = date('y-m-j H-i-s'); 
		
	mysql_query("insert into message values('msg".($totalRow+1)."','".$_GET['uid']."','".
	$_POST['sendto']."','".$_POST['messagedata']."','".$currentDateTime."',0)"); 
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Messages</title>
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
		
		if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center"> Message sent! </div></td>
  </tr>
</table>
</body>
</html>
