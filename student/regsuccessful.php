<?php
include '../connection.php';
/*
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbdb = "ereport";

$connect = mysql_connect($dbhost, $dbuser, $dbpass);

mysql_select_db($dbdb);*/

$fusn=$_POST['usn'];
$fpassword=$_POST['password'];
$fcpassword=$_POST['cpassword'];
$ffname=$_POST['ffname'];
$fmentor_name=$_POST['mentor_name'];
$fdate=$_POST['date'];
$fgender=$_POST['gender'];
$fmtongue=$_POST['mtongue'];
$flknown=$_POST['lknown'];
$fpaddr=$_POST['paddr'];
$fp1addr=$_POST['p1addr'];
$femail=$_POST['email'];
//Personal information table

$insert_stud="insert into personal_information (usn,password,confrim_password,name,mentor_name,dob,gender,mother_tongue,languages_known,present_address,permanent_address,email_id)
values ('$fusn','$fpassword','$fcpassword','$ffname','$fmentor_name','$fdate','$fgender','$fmtongue','$flknown','$fpaddr','$fp1addr','$femail')";

$result_stud=mysql_query($insert_stud);


	

//Family Background Father
$fname=$_POST['fname'];
$foccup=$_POST['foccup'];
$finc=$_POST['fin'];
$fquali=$_POST['fqual'];
$fmobile=$_POST['fmob'];
$father_email=$_POST['femail'];

$insert_father="insert into father values('$fusn','$fname','$foccup','$finc','$fquali','$fmobile','$father_email')";
$result_father=mysql_query($insert_father);

$mname=$_POST['mname'];
$moccup=$_POST['moccup'];
$minc=$_POST['min'];
$mquali=$_POST['mqual'];
$mmobile=$_POST['mmob'];
$mother_email=$_POST['memail'];

$insert_mother="insert into mother values('$fusn','$mname','$moccup','$minc','$mquali','$mmobile','$mmobile')";
$result_mother=mysql_query($insert_mother);


//Special interest table

$fhobb=$_POST['hobb'];
$fcoo=$_POST['coo'];
$fguid=$_POST['guidance'];

$insert_spl="insert into special_interest(usn,hobbies,coo,guidance) values('$fusn','$fhobb','$fcoo','$fguid')";
$result_spl=mysql_query($insert_spl);

//About me tables
$fnow=$_POST['now'];
$ftom=$_POST['tom'];
$fstrength=$_POST['strength'];
$fweakness=$_POST['weakness'];
$fethics=$_POST['ethics'];
$fsuccess=$_POST['success'];

$insert_abt="insert into about_me values('$fusn','$fnow','$ftom','$fstrength','$fweakness','$fethics','$fsuccess')";
$result_abt=mysql_query($insert_abt);

 



//Study details table

$fschoolname=$_POST['schoolname'];
$fsslc_year=$_POST['sslc_year'];
$fsslc_per=$_POST['sslc_per'];
$fcollegename=$_POST['collegename'];
$fpu_1year=$_POST['pu_1year'];
$fpu_2year=$_POST['pu_2year'];
$fpu_3year=$_POST['pu_3year'];
$fpu_1per=$_POST['pu_1per'];
$fpu_2per=$_POST['pu_2per'];
$fpu_3per=$_POST['pu_3per'];
$fdegreename=$_POST['degree_college'];
$fbca=$_POST['bca'];
$fdegree_year=$_POST['degree_year'];
$fdegree_per=$_POST['degree_per'];

$insert_study="insert into study_details values('$fusn','$fschoolname','$fsslc_year','$fsslc_per','$fcollegename','$fpu_1year','$fpu_2year','$fpu_3year','$fpu_1per','$fpu_2per','$fpu_3per','$fdegreename','$fbca','$fdegree_year','$fdegree_per')";
$result_study=mysql_query($insert_study);


if($result_stud && $result_father && $result_mother && $result_spl && $insert_abt && $result_study)
	header('Location:record_added.html');
else
	die(mysql_error());

?>