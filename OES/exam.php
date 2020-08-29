
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>Exam</title>
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
	$result = mysql_query("select * from Exam");
	$count=mysql_num_rows($result)+1;
	echo $count;
	mysql_query( "insert into Exam values(".($count).",'".$_POST['textarea']."','".$_POST['select9']."','".$_POST['select2']."',".$_POST['select4'].",".$_POST['select'].","."STR_TO_DATE('".$_POST['select3'].",".$_POST['select5'].",".$_POST['select6']."','%d,%m,%Y')".",".$_POST['select7'].",".$_POST['select8'].",".$_POST['textfield'].",".$_POST['textfield3'].",".$_POST['textfield2'].",1,'".$_POST['textarea2']."')");

?>
<table width="200" border="0" align="center" class="tableBackground">
<form name="form5" method="post" action="exam.php">
  <tr>
    <td height="66" colspan="2"><img src="logo/oes.png" width="895" height="129"></td>
  </tr>
  <tr>
    <td>Level:</td>
    <td>
      <select name="select4">
	            <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
      </select> 
      Term:
      <select name="select">
	  	            <option value="1">1</option>
                <option value="2">2</option>
      </select>
   </td>
	
  </tr>
  <tr>
    <td>Course:</td>
    <td>
      <select name="select2">
              <option value="CSE304">CSE304</option>
        <option value="CSE305">CSE305</option>
      </select>
    </td>
  </tr>

  <tr>
    <td width="241">Name:</td>
    <td width="650">
      <textarea name="textarea"></textarea>
   </td>
  </tr>
  <tr>
    <td>Type:</td>
    <td>
      <select name="select9">
        <option value="Academic">Academic</option>
        <option value="Trial">Trial</option>
      </select>
</td>
  </tr>
  <tr>
    <td height="33">Date:</td>
    <td>Day:
      <select name="select3">
  
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
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
    Month:
    <select name="select5">
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
              <option value="11">11</option>
              <option value="12">12</option>
      </select> 
    Year:
    <select name="select6">
	              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
      </select>    </td>
  </tr>
  <tr>
    <td height="35">Duration:</td>
    <td>Hour:
      <select name="select7">
	  <option value="0">0</option>
	  	       <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
      </select> 
      Minute:
      <select name="select8">
	  	  <option value="0">0</option>
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
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
				              <option value="32">32</option>
              <option value="33">33</option>
              <option value="34">34</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
			   <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
                <option value="47">47</option>
                <option value="48">48</option>
                <option value="49">49</option>
                <option value="50">50</option>
                <option value="51">51</option>
                <option value="52">52</option>
                <option value="53">53</option>
                <option value="54">54</option>
                <option value="55">55</option>
                <option value="56">56</option>
                <option value="57">57</option>
                <option value="58">58</option>
                <option value="59">59</option>
                <option value="60">60</option>
      </select>      </td>
  </tr>
  <tr>
    <td>Total Question: </td>
    <td><input type="text" name="textfield3"></td>
  </tr>
  <tr>
    <td>Total Marks: </td>
    <td>
      <input name="textfield" type="text" size="8">
   </td>
  </tr>
  <tr>
    <td>Penalty Percentage:</td>
    <td>
      <input name="textfield2" type="text" size="5">  
    </td>
  </tr>
  <tr>
    <td>Review:</td>
    <td>
      <textarea name="textarea2"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div>
    </td>
  </tr>
 </form>
</table>
</body>
</html>
