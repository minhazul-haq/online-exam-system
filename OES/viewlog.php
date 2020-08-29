<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Create package</title>
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
		createAdminMenu(); 
	?></td>
  </tr>
  <tr>
    <td height="296"><div align="center">    
      <table width="600" height="162" border="0">
        <tr>
          <td height="22" bgcolor="#CCCCCC"><div align="center">Todays log file</div></td>
        </tr>
        <tr>
          <td height="134" bordercolor="#000000">
		  <?php 
		  	$curDate = date('d-m-y');
			
			$fp=fopen("log_files/".$curDate.".txt",'r');
		
			if (!$fp)
			{
				echo "File can't be found!";
				exit;
			}
			else
			{
				while(!feof($fp))
				{
					$string = fgets($fp,100);
					echo $string.'<br>';
				}
			
				fclose($fp);
			}
		?>
        
		<div align="left"></div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
