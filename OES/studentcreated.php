<?php
	header("Refresh: 5; URL=login.php");
	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
		
	$totalRow1 = mysql_num_rows(mysql_query("select * from student"));
		
	$curDate = date('y-m-j');
					
	mysql_query("insert into student values('std".($totalRow1+1)."','".$_POST['sname']."','".
	$_POST['sdept']."','".$_POST['sroll']."',".$_POST['slevel'].",".$_POST['sterm'].",'".
	$_POST['ssession']."','".$_POST['ssex']."','".$_POST['syear']."-".$_POST['smonth']."-".
	$_POST['sday']."','".$_POST['saddress']."','".$_POST['semail']."','".$_POST['smobile']."',0,'".
	$curDate."',0)");
	
	mysql_query("insert into login values('std".($totalRow1+1)."','".$_POST['susername']."','".
	$_POST['spassword']."',0)");
	
	$totalRow2 = mysql_num_rows(mysql_query("select * from money_transactions"));
	$currentDateTime = date('y-m-j H-i-s');
	
	$result=mysql_query("select credit_card_pin from credit_card_info where credit_card_serial='".$_POST['screditsr']."'");
	$row = mysql_fetch_array($result);
	
	if (strcmp($row['credit_card_pin'],$_POST['screditpin'])==0)
	{
		mysql_query("insert into money_transactions values('tra".($totalRow2+1)."','".$_POST['screditsr']."','std".
		($totalRow1+1)."',0,0,'".$_POST['spackage']."','".$currentDateTime."')");
	}	
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
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
		
		uploadFile($_FILES["sprofile"],"std".(string)($totalRow+1));
	?>
      New student created! </div></td>
  </tr>
</table>
</body>
</html>
