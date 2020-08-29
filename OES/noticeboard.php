<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$result = mysql_query("select notice_title,noticed_by,data,date_time ".
	"from notice_board order by date_time desc");			
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Notice board</title>
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
      <p>&nbsp;</p>
      <table width="800" border="0" align="center">
      <tr bgcolor="#CCCCCC">
        <td width="200"><div align="left"><strong>Title</strong></div></td>
        <td width="200"><div align="left"><strong>Author</strong></div></td>
        <td width="200"><div align="left"><strong>Data</strong></div></td>
        <td width="200"><div align="left"><strong>Date</strong></div></td>
      </tr>
	  <?php
      while($row = mysql_fetch_array($result))
      {
	  ?>
	  <tr>
          <td><div align="left"><strong><?php echo($row['notice_title']); ?></strong></div></td>
          <td><div align="left"><strong><?php echo($row['noticed_by']); ?></strong></div></td>
          <td><div align="left"><strong><?php echo($row['data']); ?></strong></div></td>
          <td><div align="left"><strong><?php echo($row['date_time']); ?></strong></div></td>
      </tr>
      <?php
	  }
	  
	  mysql_close($conn);
	  ?>
      </table>	  
			</table>
</td>      
    </td>
  </tr>
</table>
</body>
</html>
