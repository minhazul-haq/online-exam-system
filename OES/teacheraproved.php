<?php	
	header("Refresh: 2; URL=newteacherrequest.php?uid=".$_GET['uid']);
	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$result = mysql_query("update teacher set is_registered=1 where teacher_id='".$_GET['tid']."'");
	
	$currentTimeStamp = date('y-m-j H-i-s'); 
	writeLogFile($currentTimeStamp." : ".$_GET['uid']." aproved teacher ".$_GET['tid'].".");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Teacher aproved</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="899" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td width="897"><div align="center"><img src="logo/oes.png" width="895" height="129"></div></td>
  </tr>
  <tr>
    <td height="20">
	<?php 
	  	require('menu.php');
		createRegistrarMenu(); 
	?>
        <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center">Teacher aproved! 
      </div>      </td>
  </tr>
</table>
</body>
</html>
