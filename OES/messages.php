<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$userID = $_GET['uid'];
	
	$result = mysql_query("SELECT sender_id,data,sending_date_time FROM message where receiver_id='".$userID."'");
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Messages</title>
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
		
		$userType=substr($_GET['uid'],0,3);
		
		if (strcmp($userType,"tea")==0)
			createTeacherMenu(); 
		else if (strcmp($userType,"std")==0)
			createStudentMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
  <td height="296">
      <table width="800" border="0" align="center">
      <tr bgcolor="#CCCCCC">
        <td width="205"><div align="left"><strong>Sender</strong></div></td>
        <td width="409"><div align="left"><strong>Data</strong></div></td>
        <td width="172"><div align="left"><strong>Date</strong></div></td>
      </tr>
	  <?php
      for($counter=0;$counter<10 && $row = mysql_fetch_array($result);$counter++)
      {
	  ?>
		<tr>
        <?php 
		$senderType = substr($row['sender_id'],0,3);
					
		if (strcmp($senderType,"std")==0)
		{
			$result1 = mysql_query("SELECT name FROM student where student_id='".$row['sender_id']."'");
		}
		else if (strcmp($senderType,"tea")==0)
		{
			$result1 = mysql_query("SELECT name FROM teacher where teacher_id='".$row['sender_id']."'");
		}
		
		$row1 = mysql_fetch_array($result1); ?>

        	<td><?php echo($row1['name']); ?>&nbsp;</td>
        	<td><?php echo($row['data']); ?>&nbsp;</td>
        	<td><?php echo($row['sending_date_time']); ?>&nbsp;</td>
      	</tr>
      <?php
	  }
	  ?>
	  </table></td>
    <td width="10"></td>
  </tr>
</table>
</body>
</html>
