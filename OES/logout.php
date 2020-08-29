<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	mysql_query("update login set is_logged_in=0 where user_id='".$_GET['uid']."'");
		
	header('Location: login.php');
?>