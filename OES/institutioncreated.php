<?php
	require('menu.php');
	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
		
	$totalRow = mysql_num_rows(mysql_query("select * from institutions"));
		
	mysql_query("insert into institutions values('ins".($totalRow+1)."','".$_POST['iname']."','".
	$_POST['iaddress']."')"); 
			
	$totalRow2 = mysql_num_rows(mysql_query("select * from registrar"));
	$curDate = date('y-m-j');
		
	mysql_query("insert into registrar values('reg".($totalRow2+1)."','".$_POST['rname']."','ins".($totalRow+1).
	"','".$_POST['raddress']."','".$_POST['remail']."','".$_POST['rmobile']."','".$curDate."')"); 
	
	mysql_query("insert into login values('reg".($totalRow2+1)."','".$_POST['rusername']."','".
	$_POST['rpassword']."',0)"); 
	
	uploadFile($_FILES["rprofile"],"reg".(string)($totalRow2+1));	
	
	$currentTimeStamp = date('y-m-j H-i-s');
	writeLogFile($currentTimeStamp." : ".$_GET['uid']." created institution ins".($totalRow+1).".");						
								
	header("Refresh: 5; URL=admin.php?uid=".$_GET['uid']);
?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Institution created</title>
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
	  	createAdminMenu(); 
	?></td>
  </tr>
  <tr>
    <td height="296"><div align="center"> New institution created! </div></td>
  </tr>
</table>
</body>
</html>
