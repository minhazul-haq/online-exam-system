<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="738" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td colspan="2"><div align="center"><img src="logo/oes.png" width="895" height="128"></div></td>
  </tr>
  <tr>
    <td height="20" colspan="2"><?php 
	  	require('menu.php');
		createAdminMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <?php 
  	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);

	$result = mysql_query("SELECT * FROM admin where admin_id='".$_GET['uid']."'");
	
	$row = mysql_fetch_array($result);	
  ?>
  <tr>
    <td width="256" height="296"><div align="center"><img src="<?php echo "profile_pictures/".$_GET['uid'].".png"; ?>"/></div></td>
    <td width="636"><table width="444" border="0" align="center">
      <tr class="adminInfo">
        <td width="135">Name:</td>
        <td width="299"> <?php echo ($row['name']); ?> </td>
      </tr>
      <tr class="adminInfo">
        <td>Address:</td>
        <td> <?php echo($row['address']); ?> </td>
      </tr>
      <tr class="adminInfo">
        <td>Email:</td>
        <td> <?php echo($row['email']); ?> </td>
      </tr>
      <tr class="adminInfo">
        <td>Mobile no: </td>
        <td> <?php echo($row['mobile_no']); ?> </td>
      </tr>
      <tr class="adminInfo">
        <td>Registered on: </td>
        <td> <?php echo($row['registered_on']); ?> </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>
