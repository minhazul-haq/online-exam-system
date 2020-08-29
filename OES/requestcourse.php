<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$userID = $_GET['uid'];
	
	$resultcourse = mysql_query("SELECT * FROM courses");
	
	$resultstudent = mysql_query("SELECT * FROM student where student_id='".$userID."'");
	
	$rowstudent = mysql_fetch_array($resultstudent);
	$rowcounter=0;
	while( $rowcourse = mysql_fetch_array($resultcourse) )
	{
		$flag = 1;
		if(strcmp( ($rowcourse['belong_to_dept']),($rowstudent['department']) )==0)
		{
			if(strcmp($rowcourse['level'],$rowstudent['level'])==0)
			{
				if(strcmp($rowcourse['term'],$rowstudent['term'])==0)
				{
					if (isset($rowcourse['prerequisite_course'])) 
					{ 
						$prereq_course = array(); // array to store each name 
						if (is_int(strpos(',', $rowcourse['prerequisite_course']))) 
						{ 
						$prereq_course = explode(',', $rowcourse['prerequisite_course']); // Multiple names
						$count = count($prereq_course);
						for ($i = 0; $i < $count; $i++) 
							{
						$preqcourse = trim($prereq_course[$i]);
						$grade = courseResult($rowstudent['student_id'],$preqcourse);
						if( ($grade-1.8)<0.0)
								{
							$flag = 0;
							break;
								}
							}						 
						} 
						else 
						{ 
						$prereq_course[] = $rowcourse['prerequisite_course'];
						$count = count($prereq_course);
						for ($i = 0; $i < $count; $i++) 
							{
						$preqcourse = trim($prereq_course[$i]);
						$grade = courseResult($rowstudent['student_id'],$preqcourse);
						if( ($grade-1.8)<0.0)
								{
							$flag = 0;
							break;
								}
							}
						} 
					}
					if($flag==1)
					{
					$row[$rowcounter] = $rowcourse;
					$rowcounter = $rowcounter + 1;
					} 
				}			
			}
		}
	}
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Request Course</title>
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
    <td height="20"><?php 
	  	require('menu.php');
		createStudentMenu(); 
	?>
    <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296">
      <table width="800" border="0" align="center">
      <tr>
        <td><div align="center"><strong>Course No</strong></div></td>
        <td><div align="center"><strong>Course Name</strong></div></td>
        <td><div align="center"><strong>Choice</strong></div></td>
      </tr>
	</table></td>
	  <?php
      for($counter=0;$counter<$rowcounter;$counter++)
      {
	  ?>
      	<table width="800" border="0" align="center">
        <form name="frmCreateCourse" method="post" onsubmit="return validateCourseRequestForm()"
	  action="courserequested.php?uid=<?php echo $_GET['uid']; ?>&rctr=<?php echo ($rowcounter); ?>">
		<tr>        
        	<td><input name="course_no".(string)$counter type="text" id="newName"
			value= "<?php echo ($row[$counter]['course_no']); ?>" size="50" maxlength="50" >&nbsp;</td>
        	<td><input name="course_name".(string)$counter type="text" id="newName"
			value= "<?php echo($row[$counter]['course_name']); ?>" size="50" maxlength="50" >&nbsp;</td>
        	<td><input name=(string)$counter type="checkbox" value="1">&nbsp;</td>
      	</tr>
        </form>
		</table></td>
      <?php
	  }
	  ?>
    </td>
  </tr>
</table>
</body>
</html>
