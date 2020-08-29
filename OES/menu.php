<?php
	//by Mohammad Minhazul Haq Rhythm
	
	function createDeptList()
	{
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$result = mysql_query("select dept_name,dept_id,institution_name from departments,institutions ".
		"where belongs_to_institution=institution_id");	
	
		while($row = mysql_fetch_array($result))
      	{
	  	?>
		<option value="
		<?php 
			echo ($row['dept_id']); 
		?>">
		<?php echo($row['dept_name']).", ".($row['institution_name']); ?></option>
		<?php
		}
	}
	
	function createCourseList()
	{
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$result = mysql_query("select course_id,course_no,dept_name,institution_name from courses,departments,institutions ".
		"where belongs_to_dept=dept_id and belongs_to_institution=institution_id");	
	
		while($row = mysql_fetch_array($result))
      	{
	  	?>
		<option value="
		<?php 
			echo ($row['course_id']); 
		?>">
		<?php echo($row['course_no']).", ".($row['dept_name']).", ".($row['institution_name']); ?></option>
		<?php
		}
	}
	
	function createSenderList()
	{
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$result = mysql_query("select teacher_id,name from teacher");	
	
		while($row = mysql_fetch_array($result))
      	{
	  	?>
		<option value="
		<?php 
			echo ($row['teacher_id']); 
		?>">
		<?php echo($row['name']); ?></option>
		<?php
		}
		
		$result = mysql_query("select student_id,name from student");	
	
		while($row = mysql_fetch_array($result))
      	{
	  	?>
		<option value="
		<?php 
			echo ($row['student_id']); 
		?>">
		<?php echo($row['name']); ?></option>
		<?php
		}
	}
	
	function createPackageList()
	{
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("Online_Exam_System",$conn);
		
		$result = mysql_query("select package_name,total_fee,valid_for_days,package_id from package_offer");	
	
		while($row = mysql_fetch_array($result))
      	{
	  	?>
		<option value="
		<?php 
			echo ($row['package_id']); 
		?>">
		<?php echo($row['package_name'])." : ".($row['valid_for_days'])." days - ".($row['total_fee'])." tk."; ?></option>
		<?php
		}
	}
	
	function writeLogFile($dataString)
	{
		$curDate = date('d-m-y');
		$myFile = "log_files/".$curDate.".txt";
		$dataString = $dataString."\n";
			
		$fp=fopen($myFile,'a');
		
		if (!$fp)
		{
			$fp=fopen($myFile,'w');
		}	  	
		
		fwrite($fp,$dataString);
			
		fclose($fp);
	}
	
	function uploadFile($file,$fileName)
	{
		if ( (($file["type"] == "image/gif")
		|| ($file["type"] == "image/jpeg")
		|| ($file["type"] == "image/png")
		|| ($file["type"] == "image/jpg")
		|| ($file["type"] == "image/pjpeg"))
		&& ($file["size"] < 18874398))
		{
  			if ($file["error"] > 0)
    		{
    			echo "Error: " . $file["error"] . "<br />";
    		}
  			else
    		{
    			//echo "Upload: " . $file["name"] . "<br />";
    			//echo "Type: " . $file["type"] . "<br />";
    			//echo "Size: " . ($file["size"] / 1024) . " Kb<br />";
    			//echo "Stored in: " . $file["tmp_name"];

    			if (file_exists("profile_pictures/" . $file["name"]))
      			{
      				echo $file["name"] . " already exists. ";
      			}
    			else
      			{
					$flies1=substr_replace($file["type"],$fileName.".",0,6);
						
					move_uploaded_file($file["tmp_name"],"profile_pictures/".$flies1);
      				//echo "Stored in: " . "upload/" .$file["name"];
      			}
      		}
  		}
		else
  		{
  			echo $file["type"] . "Invalid file";
  		}
	}
	
	function uploadContent($file,$fileName)
	{
		if ($file["error"] > 0)
    	{	
    		echo "Error: " . $file["error"] . "<br />";
    	}
  		else
      	{
			$index=0;
			
			for($index=0;$index<strlen($file["type"]);$index++)
			{
				if ($file["type"][$index]=='/')
					break;
			}
			
			$strName=substr_replace($file["type"],$fileName.".",0,($index+1));
			move_uploaded_file($file["tmp_name"],"course_contents/".$strName);
      	}
    }
	
	function uploadEbook($file,$fileName)
	{
		if ($file["error"] > 0)
    	{	
    		echo "Error: " . $file["error"] . "<br />";
    	}
  		else
      	{
			$index=0;
			
			for($index=0;$index<strlen($file["type"]);$index++)
			{
				if ($file["type"][$index]=='/')
					break;
			}
			
			$strName=substr_replace($file["type"],$fileName.".",0,($index+1));
			move_uploaded_file($file["tmp_name"],"ebooks/".$strName);
      	}
    }
	
	function createStudentMenu()
	{
	?>
		<div id="menu" align="center">
			<ul>
				<li>
		  			<div align="center"><a href="student.php?uid=<?php echo $_GET['uid']; ?>"> Home </a></div>
				</li>
				<li><a href="#"> Exams </a>
					<ul>
						<li><a href="givenexams.php?uid=<?php echo $_GET['uid']; ?>"> Given exams </a></li>
						<li><a href="upcomingexams.php?uid=<?php echo $_GET['uid']; ?>"> Upcoming exams </a></li>
						<li><a href="practiceexams.php?uid=<?php echo $_GET['uid']; ?>"> Practice exam </a></li>
					</ul>
				</li>
				<li><a href="#"> Contents </a>
					<ul>
						<li><a href="requestcourse.php?uid=<?php echo $_GET['uid']; ?>"> Request course </a></li>
						<li><a href="coursecontents.php?uid=<?php echo $_GET['uid']; ?>"> Course contents </a></li>
						<li><a href="ebooks.php?uid=<?php echo $_GET['uid']; ?>"> Ebooks </a></li>						
						<li><a href="uploadebook.php?uid=<?php echo $_GET['uid']; ?>"> Upload ebooks </a></li>		
						<li><a href="noticeboard.php?uid=<?php echo $_GET['uid']; ?>"> Notice board </a></li>
						<li><a href="messages.php?uid=<?php echo $_GET['uid']; ?>"> Messages </a></li>
						<li><a href="sendmessage.php?uid=<?php echo $_GET['uid']; ?>"> Send a message </a></li>				
					</ul>
				</li>
				<li><a href="#"> Result </a>
					<ul>
						<li><a href="viewresult.php?uid=<?php echo $_GET['uid']; ?>"> View result </a></li>
						<li><a href="obtainedscholarships.php?uid=<?php echo $_GET['uid']; ?>"> Obtained scholarships </a></li>
					</ul>
				</li>
				<li><a href="#"> Profile </a>
					<ul>
						<li><a href="editprofile.php?uid=<?php echo $_GET['uid']; ?>"> Edit profile </a></li>
						<li><a href="changepicture.php?uid=<?php echo $_GET['uid']; ?>"> Change picture </a></li>
						<li><a href="changepassword.php?uid=<?php echo $_GET['uid']; ?>"> Change password </a></li>
						<li><a href="logout.php?uid=<?php echo $_GET['uid']; ?>"> Logout </a></li>
					</ul>
				</li>				
			</ul>
		</div>
	<?php
	}
	
	function createAdminMenu()
	{
	?>
		<div id="menu" align="center">
			<ul>
				<li>
		  			<div align="center"><a href="admin.php?uid=<?php echo $_GET['uid']; ?>"> Home </a></div>
				</li>
				<li>
		  			<div align="center"><a href="createinstitution.php?uid=<?php echo $_GET['uid']; ?>"> Create institution </a></div>
				</li>
				<li>
		  			<div align="center"><a href="createpackage.php?uid=<?php echo $_GET['uid']; ?>"> Create package </a></div>
				</li>
				<li>
		  			<div align="center"><a href="viewlog.php?uid=<?php echo $_GET['uid']; ?>"> View log </a></div>
				</li>
				<li><a href="#"> Profile </a>
					<ul>
						<li><a href="editprofile.php?uid=<?php echo $_GET['uid']; ?>"> Edit profile </a></li>
						<li><a href="changepicture.php?uid=<?php echo $_GET['uid']; ?>"> Change picture </a></li>
						<li><a href="changepassword.php?uid=<?php echo $_GET['uid']; ?>"> Change password </a></li>
						<li><a href="logout.php?uid=<?php echo $_GET['uid']; ?>"> Logout </a></li>
					</ul>
				</li>				
			</ul>
		</div>
	<?php
	}
	
	function createRegistrarMenu()
	{
	?>
		<div id="menu" align="center">
			<ul>
				<li>
		  			<div align="center"><a href="registrar.php?uid=<?php echo $_GET['uid']; ?>"> Home </a></div>
				</li>
				<li>
		  			<div align="center"><a href="createdepartment.php?uid=<?php echo $_GET['uid']; ?>"> Create department </a></div>
				</li>
				<li>
		  			<div align="center"><a href="newteacherrequest.php?uid=<?php echo $_GET['uid']; ?>"> Teachers request </a></div>
				</li>
				<li>
		  			<div align="center"><a href="newstudentrequest.php?uid=<?php echo $_GET['uid']; ?>"> Students request </a></div>
				</li>
				<li>
		  			<div align="center"><a href="logout.php"> Logout </a></div>
				</li>			
			</ul>
		</div>
	<?php
	}
	
	function createTeacherMenu()
	{
	?>
		<div id="menu" align="center">
			<ul>
				<li>
		  			<div align="center"><a href="teacher.php?uid=<?php echo $_GET['uid']; ?>"> Home </a></div>
				</li>
				<li><a href="#"> Exams </a>
					<ul>
						<li><a href="addquestions.php?uid=<?php echo $_GET['uid']; ?>"> Add questions </a></li>
						<li><a href="createexam.php?uid=<?php echo $_GET['uid']; ?>"> Create exam </a></li>
						<li><a href="pastexams.php?uid=<?php echo $_GET['uid']; ?>"> Past exams </a></li>
						<li><a href="examranklist.php?uid=<?php echo $_GET['uid']; ?>"> Exam ranklist </a></li>
					</ul>
				</li>
				<li><a href="#"> Contents </a>
					<ul>
						<li><a href="createcourse.php?uid=<?php echo $_GET['uid']; ?>"> Create course </a></li>
						<li><a href="createscholarship.php?uid=<?php echo $_GET['uid']; ?>"> Create scholarship </a></li>
						<li><a href="coursecontents.php?uid=<?php echo $_GET['uid']; ?>"> Course contents </a></li>
						<li><a href="uploadcoursecontents.php?uid=<?php echo $_GET['uid']; ?>"> Upload course contents </a></li>
						<li><a href="ebooks.php?uid=<?php echo $_GET['uid']; ?>"> Ebooks </a></li>
						<li><a href="uploadebook.php?uid=<?php echo $_GET['uid']; ?>"> Upload ebook </a></li>
						<li><a href="noticeboard.php?uid=<?php echo $_GET['uid']; ?>"> Notice board </a></li>
						<li><a href="createnotice.php?uid=<?php echo $_GET['uid']; ?>"> Create notice </a></li>
						<li><a href="messages.php?uid=<?php echo $_GET['uid']; ?>"> Messages </a></li>
						<li><a href="sendmessage.php?uid=<?php echo $_GET['uid']; ?>"> Send a message </a></li>				
					</ul>
				</li>
				<li><a href="#"> Students section </a>
					<ul>
						<li><a href="viewrequestedcourse.php?uid=<?php echo $_GET['uid']; ?>"> View course request </a></li>
						<li><a href="studentsresult.php?uid=<?php echo $_GET['uid']; ?>"> Students result </a></li>
												
					</ul>
				</li>
				<li><a href="#"> Profile </a>
					<ul>
						<li><a href="editprofile.php?uid=<?php echo $_GET['uid']; ?>"> Edit profile </a></li>
						<li><a href="changepicture.php?uid=<?php echo $_GET['uid']; ?>"> Change picture </a></li>
						<li><a href="changepassword.php?uid=<?php echo $_GET['uid']; ?>"> Change password </a></li>
						<li><a href="logout.php?uid=<?php echo $_GET['uid']; ?>"> Logout </a></li>
					</ul>
				</li>				
			</ul>
		</div>
	<?php
	}
?>