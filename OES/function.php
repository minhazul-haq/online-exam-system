<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
function courseResult($std_id,$crs_id)
{
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	$result = mysql_query("select obtained_marks,exam_id from Course_exam where student_id='".$std_id."' and
	course_id="'".$course_id."'");
	$obt_mark=0;
	while($row = mysql_fetch_array($result))
	{
		$result1=mysql_query("select total_marks,exam_type from exam where exam_id='".$row['exam_id']."'");
		$row1 = mysql_fetch_array($result1)
		$result2=mysql_query("select ". $row1['exam_type']."_percentage from Course_result_policy where course_id='".$crs_id."'");
		$row2= mysql_fetch_array($result2);
		$temp=(floatval($row['obtained_marks'])*100)/floatval($row1['total_marks']);
		$temp=($temp*floatval($row2[0]))/100;
		$obt_mark+=$temp;
	}
	$grade=0.0;
	if($obt_mark>40 && $obt_mark<50)
		$grade=2.0;
	else if($obt_mark>50 && $obt_mark<60)
		$grade=3.0;
	else if($obt_mark>60 && $obt_mark<70)
		$grade=3.5;
	else if($obt_mark>70 && $obt_mark<80)
		$grade=3.75;
	else
		$grade=4.0;
	return $grade;
}
function termResult($level,$term,$stdid,$flag)
{
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	$result=mysql_query("select course_id from ongoing_courses where student_id='".$stdid."' and level
	=".$level." and term= ".$term);
	$crdthr=0.0;
	$grdcrdt=0.0;
	while($row = mysql_fetch_array($result))
	{
		$result1=mysql_query("select credit_hour from courses where course_id='".$row[0]."'");
		$row1=mysql_fetch_array($result1);
		$grade=courseResult($stdid,$row[0]);
		$grdcrdt+=$grade*floatval($row1[0]);
		$crdthr+=floatval($row1[0]);
	}
	$gpa=0;
	if($flag==0)
		$gpa=$grdcrdt/$crdthr;
	else if($flag==1)
		$gpa=$grdcrdt;
	else
		$gpa=crdthr;
	return $gpa;

}
function finalResult($stdid)
{
	$tgrdcrdt=0.0;
	$tcrdthr=0.0;
	for($i=1;i<=4;i++)
	{
		for($j=1;j<=2;j++)
		{
		$tgrdcrdt+=termResult($i,$j,$stdid,1);
		$tcrdthr+=termResult($i,$j,$stdid,2);
		}
	}
	$cgpa=$tgrdcrdt/$tcrdthr;
	return $cgpa;
	
}
function timeChehk($exm)
{
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("Online_Exam_System",$conn);
	$result=mysql_query("select start_date,start_hour,start_minute,exam_hour,exam_minute from exam where exam_id='".$exm."'");
	$decision=0;
	$row = mysql_fetch_array($result);
	//checking exam is upcoming or going or gone
	$today=date('d-m-Y');
	$exm_date= new DateTime($row[0]);
	if($today>$exm_date)
	{
		//exm is upcoming;
		$decision=1;
	}
	else if($today<$exm_date)
	{
		//exm is past;
		$decision=2;
	}
	else
	{
		//exm is today;
		$now=intval(gettimeofday(true));
		$exmstime=intval($row['start_hour'])*60*60+intval($row['start_minute'])*60;
		$exmetime=intval($row['start_hour'])*60*60+intval($row['exam_hour'])*60*60+intval($row['start_minute'])*60+intval($row['exam_minute'])*60;
		$diff1=$now-$exmstime;
		$diff2=$now-$exmetime;
		if($diff1<0)
		{
			//exm is upcoming;
			$decision=1;
		}
		if($diff2>0)
		{
			//exm is past;
			$decision=2;
		}
		if($diff1>=0 && $diff2<=0)
		{
			//exam is going;
			$decision=3;
		}
	}
	return $decision;

}
?>
</body>
</html>
