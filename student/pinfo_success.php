<?php 

include 'connection.php';
include 'student_session.php';

$usn=$_SESSION['stud_usn'];

//$fusn=$usn

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

$query1="update personal_information
		set name='$ffname',
		mentor_name='$fmentor_name',
		dob='$fdate',
		gender='$fgender',
		mother_tongue='$fmtongue',
		languages_known='$flknown',
		present_address='$fpaddr',
		permanent_address='$fp1addr',
		email_id='$femail'
		where usn='$usn' ";

$result1=mysql_query($query1);
if($result1)
{
	header('Location:database_updated.php');
}
else
	die(mysql_error());


?>