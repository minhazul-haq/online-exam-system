<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>Question Bank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">    
    <style type="text/css">
<!--
.style1 {font-size: 18px}
-->
    </style>
</head>

<body>
<?php
 	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	$result = mysql_query("select * from Question");
	$count=mysql_num_rows($result)+1;
	echo $count;
	mysql_query( "insert into Question values(".($count).",'".$_POST['select']."','".$_POST['select3']."','".$_POST['textarea']."','".$_POST['textarea2']."','".$_POST['textarea3']."','".$_POST['textarea4']."','".$_POST['textarea5']."',".$_POST['select2'].",".$_POST['select4'].",'".$_POST['textarea7']."','figure1.jpg',1)");

?>
<div align="center">
 
  <table width="800" border="0" align="center" class="tableBackground">
  <form name="form1" method="post" action="question.php">
    <tr>
      <td colspan="2"><img src="logo/oes.png" width="895" height="129"></td>
    </tr>
    <tr>
      <td width="266">Course:</td>
      <td width="625" height="26"><select name="select">
        <option value="CSE304">CSE304</option>
        <option value="CSE305">CSE305</option>
      </select></td>
    </tr>
    <tr>
  
  <td>Exam:</td>
    <td height="33">
        <select name="select3">
  <?php
	 	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	$result = mysql_query("select exam_name * from Exam");
	while($row = mysql_fetch_array($result))
	{
   		//echo  "<option value=".$row['exam_name'].">".$row['exam_name']."</option>";
		//echo "<option value="."'CSE304'".">CSE304</option>";
		
	}
  
?>
        </select>      </td>
		
    </tr>
    <tr>
      <td>Question:</td>
      <td height="33">
        <textarea name="textarea"></textarea>      </td>
    </tr>
    <tr>
      <td>Option 1: </td>
      <td>
        <textarea name="textarea2"></textarea>      </td>
    </tr>
    <tr>
      <td>Option 2: </td>
      <td>
        <textarea name="textarea3"></textarea>      </td>
    </tr>
    <tr>
      <td>Option 3: </td>
      <td>
        <textarea name="textarea4"></textarea>     </td>
    </tr>
    <tr>
      <td>Option 4: </td>
      <td>
        <textarea name="textarea5"></textarea>     </td>
    </tr>
    <tr>
      <td height="31">Right Answer: </td>
      <td>
        <select name="select2">
        	     <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
        </select>      </td>
    </tr>
    <tr>
      <td>Short Note: </td>
      <td height="46">
        <textarea name="textarea7"></textarea>      </td>
    </tr>
    <tr>
      <td>Hardness:</td>
      <td height="26">
        <select name="select4">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
        </select>      </td>
    </tr>
    <tr>
      <td>Image Location: </td>
      <td height="26">
        <input type="file" name="file">      </td>
    </tr>
    <tr>
      <td height="26" colspan="2">
        <div align="center">
          <input type="submit" name="Submit" value="Submit">
        </div>
      
      <div align="center"></div></td>
    </tr>
    </form>
  </table>
</div>
</body>
</html>
