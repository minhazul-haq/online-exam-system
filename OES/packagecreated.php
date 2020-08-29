<?php
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$totalRow = mysql_num_rows(mysql_query("select * from package_offer"));
		
		$fee = $_POST['pfee'];
		$vat = $_POST['pvat'];
		$total = $fee + (($fee*$vat)/100);

		mysql_query("insert into package_offer values('pac".($totalRow+1)."','".$_POST['pname']."',".
		$fee.",".$_POST['pvalidity'].",".$vat.",".$total.")");
	
		$currentTimeStamp = date('y-m-j H-i-s'); 
		writeLogFile($currentTimeStamp." : ".$_GET['uid']." created package pac".($totalRow+1).".");
		
		header("Refresh: 5; URL=admin.php?uid=".$_GET['uid']);
?>
	
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Package created</title>
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
		createAdminMenu(); 
	?></td>
  </tr>
  <tr>
    <td height="296"><div align="center"> New package created! </div></td>
  </tr>
</table>
</body>
</html>
