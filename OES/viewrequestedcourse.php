<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$userID = $_GET['uid'];
	$regValue = $_GET['regvalue'];    //send this in url as 0 default
	
	$resultteacher = mysql_query("SELECT * FROM teacher where teacher_id='".$_GET['uid']."'");
	
	$rowteacher = mysql_fetch_array($resultteacher);
	
	$resultnewrequest = mysql_query("SELECT * FROM course_requested");
	
	while( $rownewrequest = mysql_fetch_array($resultnewrequest) )
	{
		$resultnewstudent = mysql_query("SELECT * FROM student where student_id='".$rownewrequest['student_id']."'");
		
		$row = mysql_fetch_array($resultnewstudent);
		if( strcmp($rowteacher['department'],$row['department'])==0)
		{ break; }
	}
	
	$resultsubject = mysql_query("SELECT * FROM courses where course_id='".$rownewrequest['course_id']."'");
	$rowsubject = mysql_fetch_array($resultsubject);
	
	if($regValue==1)
	{
		mysql_query("insert into ongoing_courses values('".$rownewrequest['student_id']."','".$rownewrequest['course_id']."','".$rownewrequest['session']."'");
		
		mysql_query("delete from course_requested where student_id='".$rownewrequest['student_id']."', and course_id='".$rownewrequest['course_id']."', and session='".$rownewrequest['session']."'");
		
		header("Location: viewrequestedcourse.php?uid=".$_GET['uid']."&regvalue=0");
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: View New Student Request</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="738" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td colspan="2"><div align="center"><img src="logo/oes.png" width="895" height="129"></div></td>
  </tr>
  <tr>
    <td height="20" colspan="2"><?php 
	  	require('menu.php');
		createTeacherMenu();
	?>
        <div align="center"></div></td>
  </tr>
  <tr>
    <td width="256" height="296"><div align="center"><img src="<?php echo "profile pictures/".$_GET['uid'].".png"; ?>"/></div></td>
    <td width="636"><p>&nbsp;</p>
    <table width="444" border="0" align="center">
        <tr class="adminInfo">
          <td width="131">Name:</td>
          <td width="303"><?php echo ($row['name']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Department:</td>
          <td><?php echo ($row['department']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Roll:</td>
          <td><?php echo ($row['roll']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Level:</td>
          <td><?php echo ($row['level']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Term:</td>
          <td><?php echo ($row['term']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Session:</td>
          <td><?php echo ($row['session']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Subject No: </td>
          <td><?php echo ($rowsubject['course_id']); ?></td>
        </tr>
        <tr class="adminInfo">
          <td>Subject Name:</td>
          <td><?php echo ($rowsubject['course_title']); ?></td>
        </tr>
    </table>
	<p>&nbsp;</p>
	<table width="444" border="0" align="center">	
      <tr>
        <td><div align="center">
              <form name="frmViewNewRequest" method="post" action="viewrequestedcourse.php?uid=<?php echo $_GET['uid']; ?>&regvalue=<?php echo ("1"); ?>">
			  <input type="submit" name="Submit" value="Forward">
			  </form>
          &nbsp;</div></td>
      </tr>	  
    </table></td>
  </tr>
</table>
</body>
</html>
