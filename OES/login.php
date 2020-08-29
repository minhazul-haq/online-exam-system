<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$result = mysql_query("SELECT user_id,password FROM login where user_name='".$_POST['username']."'");
	
	$row = mysql_fetch_array($result);
	
	if (strcmp($_POST['password'],$row['password'])==0)
	{
		$userId = $row['user_id'];
		
		$userType = substr($userId,0,3);
					
		if (strcmp($userType,"adm")==0)
		{
			header('Location: admin.php?uid='.$userId);
			mysql_query("update login set is_logged_in=1 where user_id='".$userId."'");
		}
		else if (strcmp($userType,"reg")==0)
		{
			header('Location: registrar.php?uid='.$userId);
			mysql_query("update login set is_logged_in=1 where user_id='".$userId."'");
		}
		else if (strcmp($userType,"tea")==0)
		{
			$result=mysql_query("select is_registered from teacher where teacher_id='".$userId."'");
			$row = mysql_fetch_array($result);
			if ($row['is_registered']==1)
				header('Location: teacher.php?uid='.$userId);
			else
				header('Location: login.php');
		}
		else if (strcmp($userType,"std")==0)
		{
			$result=mysql_query("select is_registered from student where student_id='".$userId."'");
			$row = mysql_fetch_array($result);
			if ($row['is_registered']==1)
				header('Location: student.php?uid='.$userId);
			else
				header('Location: login.php');
		}
	}
	else
	{
		header('Location: login.php');
	}	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: User login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">    
</head>

<body>
<p>&nbsp;</p>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="logo/oes.png" width="895" height="128"></td>
  </tr>
  <tr>
    <td height="344"><table width="275" height="147" border="0" align="center" class="loginBackGround">
      <tr>
        <td><form name="form1" method="post" action="login.php">
          <table width="184" height="139" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr class="login">
              <td width="124" height="44" class="loginText">Username : </td>
              <td width="60">
                <input name="username" type="text" class="loginTextField" id="username" size="10" maxlength="10">
              </td>
            </tr>
            <tr class="login">
              <td height="41" class="loginText">Password :</td>
              <td>
                <input name="password" type="password" class="loginTextField" id="password" size="10" maxlength="10">
              </td>
            </tr>
            <tr>
              <td height="45" colspan="2"><div align="center">
                <input type="submit" name="login" value="Login">
              </div></td>
            </tr>
          </table>
        </form>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="934" border="0" align="center">
      <tr>
        <td width="292"><div align="center"><a href="newstudent.php">New student</a></div></td>
        <td width="351"><div align="center"><a href="newteacher.php">New teacher</a> </div></td>
        <td width="277" height="48"><div align="center"> <a href="trialexam.php">Trial exam</a></div></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
