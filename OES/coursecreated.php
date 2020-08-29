<?php
	header("Refresh: 5; URL=teacher.php?uid=".$_GET['uid']);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Course created</title>
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
		createTeacherMenu(); 
	?></td>
  </tr>
  <tr>
    <td height="296"><div align="center">
	<?php
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$totalRow = mysql_num_rows(mysql_query("select * from courses"));
		
		mysql_query("insert into courses values('crs".($totalRow+1)."','".$_POST['cno']."','".
		$_POST['ctitle']."','".$_POST['ctype']."','".$_POST['cdescription']."','".
		$_POST['cprereq']."',".$_POST['ct1'].",".$_POST['ct2'].",".$_POST['ct3'].",".$_POST['ct4'].",".
		$_POST['ct5'].",".$_POST['final1'].",".$_POST['final2'].",'".$_POST['cdepartment']."',".
		$_POST['clevel'].",".$_POST['cterm'].",".$_POST['ccredithr'].")"); 
		
		writeLogFile($_GET['uid']." created course crs".($totalRow+1));
			
		echo "New Course created!";	
	?>
	</div></td>
  </tr>
</table>
</body>
</html>
