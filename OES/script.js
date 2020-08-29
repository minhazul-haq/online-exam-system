//by Mohammad Minhazul Haq

<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

function validatePackageForm()
{
	var name = document.forms["frmCreatePackage"]["pname"].value;
	var fee = document.forms["frmCreatePackage"]["pfee"].value;
	var vat = document.forms["frmCreatePackage"]["pvat"].value;
		
	if (name=="")
  	{
  		alert("You must type package name!");
  		return false;
  	}
	if (fee=="" || isNaN(fee) || fee<=0)
  	{
  		alert("You must type a number in package fee field!");
  		return false;
  	}
	if (vat=="" || isNaN(vat) || vat<0 || vat>100)
  	{
  		alert("You must type a valid number in package vat field!");
  		return false;
  	}
	
	return true;
}

function validateMessageForm()
{
	var receiver = document.forms["frmSendMessage"]["sendto"].value;
	var data = document.forms["frmSendMessage"]["messagedata"].value;
		
	if (receiver=="")
  	{
  		alert("You must type receiver name!");
  		return false;
  	}
	if (data=="")
  	{
  		alert("You must type message data!");
  		return false;
  	}
	
	return true;
}

function validateInstitutionForm()
{
	var name = document.forms["frmCreateInstitution"]["iname"].value;
	var address = document.forms["frmCreateInstitution"]["iaddress"].value;
	var rname = document.forms["frmCreateInstitution"]["rname"].value;
	var raddress = document.forms["frmCreateInstitution"]["raddress"].value;
	var remail = document.forms["frmCreateInstitution"]["remail"].value;
	var rmobile = document.forms["frmCreateInstitution"]["rmobile"].value;
	var rprofile = document.forms["frmCreateInstitution"]["rprofile"].value;
	var rusername = document.forms["frmCreateInstitution"]["rusername"].value;
	var rpassword = document.forms["frmCreateInstitution"]["rpassword"].value;
	
	if (name=="")
  	{
  		alert("You must type institution name!");
  		return false;
  	}
	if (address=="")
  	{
  		alert("You must type institution address!");
  		return false;
  	}
	if (rname=="")
  	{
  		alert("You must type registrar name!");
  		return false;
  	}
	if (raddress=="")
  	{
  		alert("You must type registrar address!");
  		return false;
  	}
	if (remail=="")
  	{
  		alert("You must type registrar email address!");
  		return false;
  	}
	if (rmobile=="")
  	{
  		alert("You must type registrar mobile no.!");
  		return false;
  	}
	if (rprofile=="")
  	{
  		alert("You must select registrar profile picture!");
  		return false;
  	}
	if (rusername=="")
  	{
  		alert("You must type registrar username!");
  		return false;
  	}
	if (rpassword=="")
  	{
  		alert("You must type registrar password!");
  		return false;
  	}
		
	return true;
}

function validateCourseForm()
{
	var no = document.forms["frmCreateCourse"]["cno"].value;
	var title = document.forms["frmCreateCourse"]["ctitle"].value;
	var type = document.forms["frmCreateCourse"]["ctype"].value;
	var desc = document.forms["frmCreateCourse"]["cdescription"].value;
	var prereq = document.forms["frmCreateCourse"]["cprereq"].value;
	var credithr = document.forms["frmCreateCourse"]["ccredithr"].value;	
	
	if (no=="")
  	{
  		alert("You must type course no.!");
  		return false;
  	}
	if (title=="")
  	{
  		alert("You must type course title!");
  		return false;
  	}
	if (type=="")
  	{
  		alert("You must select course type!");
  		return false;
  	}
	if (desc=="")
  	{
  		alert("You must type course description!");
  		return false;
  	}
	if (prereq=="")
  	{
  		alert("You must type prerequisite couse!");
  		return false;
  	}
	if (credithr=="")
  	{
  		alert("You must type credit hour!");
  		return false;
  	}
		
	return true;
}

function validateNewScholarshipForm()
{
	var name = document.forms["frmNewScholarship"]["scname"].value;
	var cgpa = document.forms["frmNewScholarship"]["sccgpa"].value;
	var amount = document.forms["frmNewScholarship"]["scamount"].value;
	
	if (name=="")
  	{
  		alert("You must type scholarship name!");
  		return false;
  	}
	if (cgpa=="")
  	{
  		alert("You must type scholarship cgpa!");
  		return false;
  	}
	if (amount=="")
  	{
  		alert("You must type scholarship amount!");
  		return false;
  	}
	
	return true;
}

function validateNewNoticeForm()
{
	var title = document.forms["frmNewNotice"]["noticeTitle"].value;
	var data = document.forms["frmNewNotice"]["noticeData"].value;
	
	if (title=="")
  	{
  		alert("You must type notice title!");
  		return false;
  	}
	if (data=="")
  	{
  		alert("You must type notice data!");
  		return false;
  	}
		
	return true;
}

function validatePasswordForm()
{
	var oldpw = document.forms["frmChangePassword"]["oldpassword"].value;
	var newpw1 = document.forms["frmChangePassword"]["newpassword1"].value;
	var newpw2 = document.forms["frmChangePassword"]["newpassword2"].value;
	
	if (oldpw=="")
  	{
  		alert("You must type your old password!");
  		return false;
  	}
	if (newpw1=="")
  	{
  		alert("You must type your new password!");
  		return false;
  	}
	if (newpw2=="")
  	{
  		alert("You must retype your new password!");
  		return false;
  	}
	if (newpw1!=newpw2)	
	{
  		alert("New passwords do not match!");
  		return false;
  	}
	
	return true;
}

function validateDepartmentForm()
{
	var dept = document.forms["frmCreateDepartment"]["deptname"].value;
	var credithr = document.forms["frmCreateDepartment"]["mincredithr"].value;
	
	if (dept=="")
  	{
  		alert("You must type department name!");
  		return false;
  	}
	if (credithr=="")
  	{
  		alert("You must type minimum credit hour!");
  		return false;
	}
		
	return true;
}

function validatePictureForm()
{
	var iLocation = document.forms["frmChangePicture"]["picturelocation"].value;
	
	if (iLocation=="")
  	{
  		alert("You must select a picture file!");
  		return false;
  	}
		
	return true;
}


function validateEditAdminProfileForm()
{
	var aName = document.forms["frmEditAdminProfile"]["newName"].value;
	var aAddress = document.forms["frmEditAdminProfile"]["newAddress"].value;
	var aEmail = document.forms["frmEditAdminProfile"]["newEmail"].value;
	var aMobile = document.forms["frmEditAdminProfile"]["newMobile"].value;
	
	if (aName=="")
  	{
  		alert("You must type admin name!");
  		return false;
  	}
	if (aAddress=="")
  	{
  		alert("You must select admin address!");
  		return false;
  	}
	if (aEmail=="")
  	{
  		alert("You must type admin email!");
  		return false;
  	}
	if (aMobile=="")
  	{
  		alert("You must select admin mobile no.!");
  		return false;
  	}
		
	return true;
}

function validateCreateCourseForm()
{
	var no = document.forms["frmCreateCourse"]["cno"].value;
	var title = document.forms["frmCreateCourse"]["ctitle"].value;
	var type = document.forms["frmCreateCourse"]["ctype"].value;
	var desc = document.forms["frmCreateCourse"]["cdescription"].value;
	var prereq = document.forms["frmCreateCourse"]["cprereq"].value;
	var credithr = document.forms["frmCreateCourse"]["ccredithr"].value;
	
	if (no=="")
  	{
  		alert("You must type course no.!");
  		return false;
  	}
	if (title=="")
  	{
  		alert("You must type course title!");
  		return false;
  	}
	if (type=="")
  	{
  		alert("You must type course type!");
  		return false;
  	}
	if (desc=="")
  	{
  		alert("You must type course desctiption!");
  		return false;
  	}
	if (prereq=="")
  	{
  		alert("You must type course pre-requisite courses!");
  		return false;
  	}
	if (credithr=="")
  	{
  		alert("You must type credit hour!");
  		return false;
  	}
	
	return true;
}

function validateUploadContentsForm()
{
	var title = document.forms["frmUploadContent"]["ctitle"].value;
	var belongs = document.forms["frmUploadContent"]["cbelongs"].value;
	var location = document.forms["frmUploadContent"]["clocation"].value;
	
	if (title=="")
  	{
  		alert("You must type content title!");
  		return false;
  	}
	if (belongs=="")
  	{
  		alert("You must select belongs to course!");
  		return false;
  	}
	if (location=="")
  	{
  		alert("You must select content file!");
  		return false;
  	}
	
	return true;
}

function validateUploadEbookForm()
{
	var title = document.forms["frmUploadEbook"]["etitle"].value;
	var author = document.forms["frmUploadEbook"]["eauthor"].value;
	var belongs = document.forms["frmUploadEbook"]["ebelongs"].value;
	var location = document.forms["frmUploadEbook"]["elocation"].value;
	
	if (title=="")
  	{
  		alert("You must type Ebook title!");
  		return false;
  	}
	if (author=="")
  	{
  		alert("You must type Ebook author!");
  		return false;
  	}
	if (belongs=="")
  	{
  		alert("You must select belongs to course!");
  		return false;
  	}
	if (location=="")
  	{
  		alert("You must select Ebook file!");
  		return false;
  	}
	
	return true;
}

function validateNewTeacherForm()
{
	var name = document.forms["frmNewTeacher"]["tname"].value;
	var dept = document.forms["frmNewTeacher"]["tdept"].value;
	var desig = document.forms["frmNewTeacher"]["tdesig"].value;
	var address = document.forms["frmNewTeacher"]["taddress"].value;
	var email = document.forms["frmNewTeacher"]["temail"].value;
	var mobile = document.forms["frmNewTeacher"]["tmobile"].value;
	var propic = document.forms["frmNewTeacher"]["tprofile"].value;
	var idcard = document.forms["frmNewTeacher"]["tidcard"].value;
	var username = document.forms["frmNewTeacher"]["tusername"].value;
	var password = document.forms["frmNewTeacher"]["tpassword"].value;	
	
	if (name=="")
  	{
  		alert("You must type name!");
  		return false;
  	}
	if (dept=="")
  	{
  		alert("You must select a department!");
  		return false;
  	}
	if (desig=="")
  	{
  		alert("You must type designation!");
  		return false;
  	}
	if (address=="")
  	{
  		alert("You must type address!");
  		return false;
  	}
	if (email=="")
  	{
  		alert("You must type email address!");
  		return false;
  	}
	if (mobile=="")
  	{
  		alert("You must type mobile no.!");
  		return false;
  	}
	if (propic=="")
  	{
  		alert("You must select a profile picture!");
  		return false;
  	}
	if (idcard=="")
  	{
  		alert("You must select a id card photo!");
  		return false;
  	}
	if (username=="")
  	{
  		alert("You must type a username!");
  		return false;
  	}
	if (password=="")
  	{
  		alert("You must type a password!");
  		return false;
  	}
	
	return true;
}

function validateNewStudentForm()
{
	var name = document.forms["frmNewStudent"]["sname"].value;
	var dept = document.forms["frmNewStudent"]["sdept"].value;
	var roll = document.forms["frmNewStudent"]["sroll"].value;
	var level = document.forms["frmNewStudent"]["slevel"].value;
	var term = document.forms["frmNewStudent"]["sterm"].value;
	var session = document.forms["frmNewStudent"]["ssession"].value;
	var sex = document.forms["frmNewStudent"]["ssex"].value;
	var day = document.forms["frmNewStudent"]["sday"].value;
	var month = document.forms["frmNewStudent"]["smonth"].value;
	var year = document.forms["frmNewStudent"]["syear"].value;	
	var address = document.forms["frmNewStudent"]["saddress"].value;
	var email = document.forms["frmNewStudent"]["semail"].value;
	var mobile = document.forms["frmNewStudent"]["smobile"].value;
	var propic = document.forms["frmNewStudent"]["sprofile"].value;
	var idcard = document.forms["frmNewStudent"]["sidcard"].value;		
	var creditserial = document.forms["frmNewStudent"]["screditsr"].value;
	var creditpin = document.forms["frmNewStudent"]["screditpin"].value;	
	var package = document.forms["frmNewStudent"]["spackage"].value;
	var username = document.forms["frmNewStudent"]["susername"].value;
	var password = document.forms["frmNewStudent"]["spassword"].value;	
	
	if (name=="") { alert("You must type name!"); return false; }
	if (dept=="") { alert("You must type department name!"); return false; }
	if (roll=="") { alert("You must type roll!"); return false; }
	if (level=="") { alert("You must select level!"); return false; }
	if (term=="") { alert("You must select term!"); return false; }
	if (session=="") { alert("You must type session!"); return false; }
	if (day=="") { alert("You must select day of birth!"); return false; }
	if (month=="") { alert("You must select month of birth!"); return false; }
	if (year=="") { alert("You must select year of birth!"); return false; }
	if (address=="") { alert("You must type address!"); return false; }
	if (email=="") { alert("You must type email!"); return false; }
	if (mobile=="") { alert("You must type mobile no.!"); return false; }
	if (propic=="") { alert("You must select profile picture!"); return false; }
	if (idcard=="") { alert("You must select ID card photo!"); return false; }
	if (creditserial=="") { alert("You must type credit card serial!"); return false; }
	if (creditpin=="") { alert("You must type credit card pin!"); return false; }
	if (package=="") { alert("You must type package!"); return false; }
	if (username=="") { alert("You must type a username!"); return false; }
	if (password=="") {	alert("You must type a password!"); return false; }
	
	return true;
}


//extra

function locName(txt)
{
	if (txt!=0) 
		document.getElementById("desc").innerHTML="You are now pointing to:  " + txt;
	else
		document.getElementById("desc").innerHTML="";
}

function mouseOver(name)
{
	for(var id=1;id<=8;id++)
		document.getElementById("menu"+id).className="menuStyle";	
	
	document.getElementById(name).className="menuSelected";	
}

function mouseOut(name)
{
	document.getElementById(name).className="menuStyle";	
}

//image viewer code
var i=-1;
var A = [1,2,3,4,5,6,7,8,9,10,11,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32]; 
var isStop=0;
//recur();
		
function recur()
{
	var t = setTimeout("recur()",5000);
	
	if (isStop==0)
	{
		if (i==26) i=0;
		else i++;
		
		document.getElementById("iHolder").src="plot_images/"+A[i]+".jpg";
						
		var t1 = setTimeout("recurOp(1)",0);
		var t2 = setTimeout("recurOp(2)",80);
		var t3 = setTimeout("recurOp(3)",170);
		var t4 = setTimeout("recurOp(4)",300);
		var t5 = setTimeout("recurOp(5)",400);
	}
}
	
function recurOp(f)
{
	if (f==1) 
		document.getElementById("iHolder").className="fade1";
	else if (f==2) 
		document.getElementById("iHolder").className="fade2";
	else if (f==3) 
		document.getElementById("iHolder").className="fade3";
	else if (f==4) 
		document.getElementById("iHolder").className="fade4";
	else if (f==5) 
		document.getElementById("iHolder").className="fade5";
}

function start()
{
	isStop=0;
}

function stop()
{
	isStop=1;	
}

function goDetails()
{		
	var s=A[i];
	window.open('details.php?plot='+s,'_newtab');
}