<?php
	header("Refresh: 5; URL=login.php");
		
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
		
	$totalRow = mysql_num_rows(mysql_query("select * from teacher"));
	
	$curDate = date('y-m-j');
					
	mysql_query("insert into teacher values('tea".($totalRow+1)."','".$_POST['tname']."','".
	$_POST['tdept']."','".$_POST['tdesig']."','".$_POST['taddress']."','".$_POST['temail']."','".
	$_POST['tmobile']."',0,'".$curDate."')");
	
	mysql_query("insert into login values('tea".($totalRow+1)."','".$_POST['tusername']."','".
	$_POST['tpassword']."',0)");
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Teacher created</title>
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
	<hr size="1"></td>
  </tr>
  <tr>
    <td height="296"><div align="center"> 
      <?php 
	  	require('menu.php');
				
		uploadFile($_FILES["tprofile"],"tea".(string)($totalRow+1));
	?>
      New Teacher created! </div></td>
  </tr>
</table>
</body>
</html>
