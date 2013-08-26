<?php

include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;

$f10mca31_fia=$_POST['10mca31_fia'];
$f10mca32_fia=$_POST['10mca32_fia'];
$f10mca33_fia=$_POST['10mca33_fia'];
$f10mca34_fia=$_POST['10mca34_fia'];
$f10mca35_fia=$_POST['10mca35_fia'];
$f10mca36_fia=$_POST['10mca36_fia'];
$f10mca37_fia=$_POST['10mca37_fia'];
$f10mca38_fia=$_POST['10mca38_fia'];


// IA 3
$query1="update sem3_fia
		set 10mca31_fia='$f10mca31_fia',
		10mca32_fia='$f10mca32_fia',
		10mca33_fia='$f10mca33_fia',
		10mca34_fia='$f10mca34_fia',
		10mca35_fia='$f10mca35_fia',
		10mca36_fia='$f10mca36_fia',
		10mca37_fia='$f10mca37_fia',
		10mca38_fia='$f10mca38_fia'
		where usn='$usn'


";
$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());