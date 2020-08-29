<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$result = mysql_query("SELECT * FROM teacher,departments where teacher_id='".
	$_GET['tid']."' and belongs_to_dept=dept_id");
    
	$row = mysql_fetch_array($result);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: View teacher details</title>
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
      <table width="376" border="0">
        <tr bgcolor="#FFFFFF">
          <td width="121">Name</td>
          <td width="245"><?php echo $row['name']; ?></td>
          </tr>
		<tr>
		  <td>Department</td>
		  <td><?php echo $row['dept_name']; ?></td>
		  </tr>
		<tr>
		  <td>Designation</td>
		  <td><?php echo $row['designation']; ?></td>
		  </tr>
		<tr>
		  <td>Address</td>
		  <td><?php echo $row['address']; ?></td>
		  </tr>
		<tr>
		  <td>Email address </td>
		  <td><?php echo $row['email']; ?></td>
		  </tr>
		<tr>
		  <td>Mobile no. </td>
		  <td><?php echo $row['mobile_no']; ?></td>
		  </tr>
		<tr>
		  <td>Profile picture</td>
		  <td><img src="<?php echo "profile_pictures/".$_GET['uid'].".png"; ?>"/></td>
		  </tr>
		<tr>
		  <td height="62" colspan="2"><form name="form1" method="post"
		  action="teacheraproved.php?uid=<?php echo $_GET['uid']; ?>&tid=<?php echo  $_GET['tid']; ?>">
		      <div align="center">
		        <input type="submit" name="Submit" value="Aprove">
	            </div>
		  </form></td>
		  </tr>
      </table>
    </div>      </td>
  </tr>
</table>
</body>
</html>
