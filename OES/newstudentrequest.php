<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$result = mysql_query("SELECT * FROM student,departments where is_registered=0 and dept_id=department ".
	"and belongs_to_institution=(select belongs_to_institution from registrar where registrar_id='".
	$_GET['uid']."')");
		
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: View new student requests</title>
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
    <td height="296"><div align="center">
      <table width="407" border="0">
        <tr bgcolor="#CCCCCC">
          <td width="57">Serial</td>
          <td width="234">Name</td>
          <td width="102">View details </td>
        </tr>
		<?php 
		$sr=1;
		
		while($row = mysql_fetch_array($result))
      	{
		?>
		<tr>
          <td><?php echo $sr++."."; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td>
		  <form name="frmNewTeacherAprove" method="post" 
		  action="aprovestudentrequest.php?uid=<?php echo $_GET['uid']; ?>&sid=<?php echo $row['student_id']; ?>">
		    <input type="submit" name="Submit" value="Details">
		  </form>	      </td>
        </tr>
		<?php
		}
		?>
      </table>
    </div>      </td>
  </tr>
</table>
</body>
</html>
