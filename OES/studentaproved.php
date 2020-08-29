<?php	
	header("Refresh: 2; URL=newstudentrequest.php?uid=".$_GET['uid']);
	
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	
	$result = mysql_query("select transaction_id,credit_card_serial from money_transactions where student_id='".$_GET['sid'].
	"' and is_transacted=0");
	$row = mysql_fetch_array($result);
	$trans_id=$row['transaction_id'];
	$credit_sr=$row['credit_card_serial'];
	
	$result = mysql_query("select total_fee from package_offer where  package_id=".
	"(select package_id from money_transactions where transaction_id='".$trans_id."')");
	$row = mysql_fetch_array($result);
	$totalMoney=$row['total_fee'];
	
	$result = mysql_query("select total_money_on_card from credit_card_info where credit_card_serial='".$credit_sr."'");
	$row = mysql_fetch_array($result);
	$money_on_card=$row['total_money_on_card'];
	
	if ($money_on_card>=$totalMoney)
	{
		$result = mysql_query("update credit_card_info set total_money_on_card=".($money_on_card-$totalMoney).
		" where credit_card_serial='".(string)($credit_sr)."'");
	
		$currentDateTime = date('y-m-j H-i-s'); 
		
		mysql_query("update money_transactions set transacted_money=".$totalMoney.
		",is_transacted=1,transaction_date_time='".$currentDateTime."' where student_id='".$_GET['sid']."'");
	
		mysql_query("update student set is_registered=1 where student_id='".$_GET['sid']."'");
	
		$currentTimeStamp = date('y-m-j H-i-s'); 
		writeLogFile($currentTimeStamp." : ".$_GET['uid']." aproved student ".$_GET['sid'].".");
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: Student aproved</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="899" border="0" align="center" cellpadding="1" cellspacing="1" class="tableBackground">
  <tr>
    <td width="897"><div align="center"><img src="logo/oes.png" width="895" height="129"></div></td>
  </tr>
  <tr>
    <td height="20">
	<?php 
	  	require('menu.php');
		createRegistrarMenu(); 
	?>
        <div align="center"></div></td>
  </tr>
  <tr>
    <td height="296"><div align="center">Student aproved! 
      </div>      </td>
  </tr>
</table>
</body>
</html>
