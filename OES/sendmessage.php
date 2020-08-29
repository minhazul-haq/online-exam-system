<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Send a message</title>
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
    <td height="296"><div align="center">
      <table width="534" border="0">
       <form name="frmSendMessage" method="post" onsubmit="return validateMessageForm()"
	  action="messagesent.php?uid=<?php echo $_GET['uid']; ?>">
        <tr>
          <td width="129" height="24">Send to:</td>
          <td width="395"><label>
          <select name="sendto" id="sendto">
          <?php 
		  	createSenderList(); 
		  ?>
		  </select>
</label></td>
        </tr>
        <tr>
          <td>Message:</td>
          <td><textarea name="messagedata" cols="30" rows="3" id="messagedata"></textarea>            &nbsp;</td>
        </tr>
        <tr>
          <td colspan="2"><label>
              <div align="center">
                <input type="submit" name="button" id="button" value="Send message">
              </div>
            </label></td>
          </tr>
       </form>   
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>
