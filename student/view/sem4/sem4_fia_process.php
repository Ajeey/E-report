<?php


include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];

//echo $usn;


$f10mca41_fia=$_POST['10mca41_fia'];
$f10mca42_fia=$_POST['10mca42_fia'];
$f10mca43_fia=$_POST['10mca43_fia'];
$f10mca44_fia=$_POST['10mca44_fia'];


//elective
$f10mca451_fia=$_POST['10mca451_fia'];
$f10mca452_fia=$_POST['10mca452_fia'];
$f10mca453_fia=$_POST['10mca453_fia'];
$f10mca454_fia=$_POST['10mca454_fia'];
$f10mca455_fia=$_POST['10mca455_fia'];
$f10mca456_fia=$_POST['10mca456_fia'];


//lab
$f10mca46_fia=$_POST['10mca46_fia'];
$f10mca47_fia=$_POST['10mca47_fia'];
$f10mca48_fia=$_POST['10mca48_fia'];


// IA 1
$query1="update sem4_fia
		set 10mca41_fia='$f10mca41_fia',
		10mca42_fia='$f10mca42_fia',
		10mca43_fia='$f10mca43_fia',
		10mca44_fia='$f10mca44_fia',
		10mca451_fia='$f10mca451_fia',
		10mca452_fia='$f10mca452_fia',
		10mca453_fia='$f10mca453_fia',
		10mca454_fia='$f10mca454_fia',
		10mca455_fia='$f10mca455_fia',
		10mca456_fia='$f10mca456_fia',
		10mca46_fia='$f10mca46_fia',
		10mca47_fia='$f10mca47_fia',
		10mca48_fia='$f10mca48_fia'
		where usn='$usn'
";

$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());