<?php
if($_POST['submit']!=NULL)
{
	function getQuestionNo()
	{
		static $count=0;
		$count+=1;
		return $count;
	}
	echo "successful";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>Answer Sheet</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">    
    <style type="text/css">
<!--
.style1 {font-size: 18px}
-->
    </style>
</head>

<body>
<div align="center">
  <table width="600" border="1">
 
if($_POST['submit'])
{
} 

<form name="form1" method="post" action="answer.php">
    <tr>
      <td height="51"><img src="logo/oes.png" width="895" height="129"></td>
    </tr>
    <tr>
      <td height="53"><div align="center">
        
          <textarea name="textarea" cols="120" rows="5"></textarea>
        
      </div></td>
    </tr>
    <tr>
      <td>        
          
          <div align="center">
            <table width="204" height="447">
              <tr>
                <td height="114"><p>
                    <label>
                    <input type="radio" name="RadioGroup1" value="radio">
                    </label>
                    <label>
                    <textarea name="textarea2" cols="90"></textarea>
                    </label>
                </p>                </td>
              </tr>
              <tr>
                <td height="25"><label>
                  <input type="radio" name="RadioGroup1" value="radio">
                  <textarea name="textarea3" cols="90"></textarea>
  </label></td>
              </tr>
              <tr>
                <td><div align="left">
                    <label>
                    <input type="radio" name="RadioGroup1" value="radio">
                    <textarea name="textarea4" cols="90"></textarea>
                    </label>
                </div></td>
              </tr>
              <tr>
                <td height="105"><p>
                    <label>                    </label>
                    <label>                  </label>
                    <label>
                    <input type="radio" name="RadioGroup1" value="radio">
                    <textarea name="textarea5" cols="90"></textarea>
                    </label>
                </p>                </td>
              </tr>
              <tr>
                <td><label></label></td>
              </tr>
            </table> 
            <img src="question%20figures/figure1.jpg" width="274" height="252" align="middle"> </div>
          <p align="center">&nbsp;          </p>
          <p align="center">
            <textarea name="textarea6" cols="100"></textarea> 
          </p>
          <p align="center">
            <input type="submit" name="submit" value="submit">    
            </p>
      </td></tr>
	  </form>
  </table>
</div>
</body>
</html>
