<?php	

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	if (strcmp($_POST['searchfield'],"")==0)
	{
		$result = mysql_query("SELECT * FROM ebooks");
	}
	else
	{
		if (strcmp($_POST['selectoption'],"title")==0)
		{
			$result = mysql_query("SELECT * FROM ebooks where ebook_title like '%".$_POST['searchfield']."%'");
		}
		else if (strcmp($_POST['selectoption'],"author")==0)
		{
			$result = mysql_query("SELECT * FROM ebooks where ebook_author like '%".$_POST['searchfield']."%'");
		}		
	}	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Ebooks</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

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
    <td height="296"><table width="595" border="0" align="center">
	 <form name="frmEBook" method="post" action="ebooks.php?uid=<?php echo $_GET['uid']; ?>">
      <tr>
        <td width="94" height="26">Search for :</td>
        <td width="315">
          <label>
          <input name="searchfield" type="text" id="textfield" size="50">
		  </label>
        </td>
        <td width="97"><select name="selectoption" id="select">
          <option value="title">Tiitle</option>
          <option value="author">Author</option>
        </select></td>
        <td width="71">
          <label></label>
          <div align="center">
            <label>
            <input type="submit" name="button" id="button" value="Search">
            </label>
          </div></td>
      </tr>
	 </form> 
    </table>
    <p>&nbsp;</p>
    <table width="900" border="0" align="center">
      <tr bgcolor="#CCCCCC">
        <td width="234"><div align="left"><strong>Title</strong></div></td>
        <td width="150"><div align="left"><strong>Author</strong></div></td>
        <td width="150"><div align="left"><strong>Upload date</strong></div></td>
        <td width="138"><div align="left"><strong>Size</strong></div></td>
		<td width="206"><div align="left"><strong>Download</strong></div></td>
      </tr>
	  
	  <?php
      while($row = mysql_fetch_array($result))
      {
	  ?>
		<tr>
        	<td><?php echo ($row['ebook_title']); ?>&nbsp;</td>
        	<td><?php echo ($row['ebook_author']); ?>&nbsp;</td>
        	<td><?php echo ($row['uploading_date_time']); ?>&nbsp;</td>
        	<td><?php echo (round($row['ebook_size']/1000))." KB"; ?>&nbsp;</td>
			<td>
			<form name="frmDownload" method="post" action=<?php echo "ebooks/".$row['ebook_id'].".pdf" ?>>
			  <input type="submit" name="Submit" value="Download">
		    </form>
		    </td>
      	</tr>
 	  <?php
	  }
	  ?>
	</table></td>   
	
  </tr>
</table>
</body>
</html>
