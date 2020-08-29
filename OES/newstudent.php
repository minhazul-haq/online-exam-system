<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<title>OES :: New student</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">    
    <style type="text/css">
<!--
.style1 {font-size: 18px}
-->
    </style>
</head>

<body>
<table width="200" border="0" align="center" class="tableBackground">
  <tr>
    <td><img src="logo/oes.png" width="895" height="129"></td>
  </tr>
  <tr>
    <td height="22"><hr size="1">
      <form name="frmNewStudent" method="post" onsubmit="return validateNewStudentForm()"
	  enctype="multipart/form-data" action="studentcreated.php">
        <table width="511" border="0" align="center" cellpadding="2" cellspacing="2">
          <tr>
            <td width="138">Name:</td>
            <td width="371"><input name="sname" type="text" id="sname" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Department:</td>
            <td><select name="sdept" id="sdept">
			<?php 
				require('menu.php');
				createDeptList(); 
			?>			  
            </select></td>
          </tr>
          <tr>
            <td>Roll:</td>
            <td><input name="sroll" type="text" id="sroll" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Level:</td>
            <td><select name="slevel" id="slevel">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select></td>
          </tr>
          <tr>
            <td>Term:</td>
            <td><select name="sterm" id="sterm">
              <option>1</option>
              <option>2</option>
            </select></td>
          </tr>
          <tr>
            <td>Session:</td>
            <td><input name="ssession" type="text" id="ssession" size="15" maxlength="15"></td>
          </tr>
          <tr>
            <td>Sex:</td>
            <td><select name="ssex" id="ssex">
              <option value="m">Male</option>
              <option value="f">Female</option>
            </select></td>
          </tr>
          <tr>
            <td>Date of birth: </td>
            <td>day: 
              <select name="sday" id="sday">
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
            month:
            <select name="smonth" id="smonth">
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
            year: 
            <select name="syear" id="syear">
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
            </select></td>
          </tr>
          <tr>
            <td>Address:</td>
            <td><input name="saddress" type="text" id="saddress" size="50" maxlength="100"></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input name="semail" type="text" id="semail" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Mobile no: </td>
            <td><input name="smobile" type="text" id="smobile" size="50" maxlength="50"></td>
          </tr>
          <tr>
            <td>Profile picture: </td>
            <td><input name="sprofile" type="file" id="sprofile" size="40" maxlength="40">
            </td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><input name="susername" type="text" id="susername" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input name="spassword" type="password" id="spassword" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>Credit card serial: </td>
            <td><input name="screditsr" type="text" id="screditsr" size="20" maxlength="20"></td>
          </tr>
          <tr>
            <td>Credit card pin: </td>
            <td><input name="screditpin" type="text" id="screditpin" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Package:</td>
            <td><select name="spackage" id="spackage">
            <?php createPackageList(); ?>
            </select></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td height="59" colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Create student">
            </div></td>
          </tr>
        </table>
    </form></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
  </tr>
</table>
<table width="934" border="0" align="center">
  <tr>
    <td width="292"><div align="center"><a href="newteacher.php">New teacher</a></div></td>
    <td width="351"><div align="center"><a href="trialexam.php">Trial exam</a> </div></td>
    <td width="277" height="48"><div align="center"><a href="login.php">User login</a></div></td>
  </tr>
</table>
</body>
</html>
