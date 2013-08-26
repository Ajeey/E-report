<?php


include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];

//echo $usn;

$f10mca41_ia3=$_POST['10mca41_ia3'];
$f10mca42_ia3=$_POST['10mca42_ia3'];
$f10mca43_ia3=$_POST['10mca43_ia3'];
$f10mca44_ia3=$_POST['10mca44_ia3'];


//elective
$f10mca451_ia3=$_POST['10mca451_ia3'];
$f10mca452_ia3=$_POST['10mca452_ia3'];
$f10mca453_ia3=$_POST['10mca453_ia3'];
$f10mca454_ia3=$_POST['10mca454_ia3'];
$f10mca455_ia3=$_POST['10mca455_ia3'];
$f10mca456_ia3=$_POST['10mca456_ia3'];


//att
$f10mca41_atd=$_POST['10mca41_atd'];
$f10mca42_atd=$_POST['10mca42_atd'];
$f10mca43_atd=$_POST['10mca43_atd'];
$f10mca44_atd=$_POST['10mca44_atd'];


//elective att
$f10mca451_atd=$_POST['10mca451_atd'];
$f10mca452_atd=$_POST['10mca452_atd'];
$f10mca453_atd=$_POST['10mca453_atd'];
$f10mca454_atd=$_POST['10mca454_atd'];
$f10mca455_atd=$_POST['10mca455_atd'];
$f10mca456_atd=$_POST['10mca456_atd'];



// IA 1
$query1="update sem4_ia3
		set 10mca41_ia3='$f10mca41_ia3',
		10mca42_ia3='$f10mca42_ia3',
		10mca43_ia3='$f10mca43_ia3',
		10mca44_ia3='$f10mca44_ia3',
		10mca451_ia3='$f10mca451_ia3',
		10mca452_ia3='$f10mca452_ia3',
		10mca453_ia3='$f10mca453_ia3',
		10mca454_ia3='$f10mca454_ia3',
		10mca455_ia3='$f10mca455_ia3',
		10mca456_ia3='$f10mca456_ia3',
		
		10mca41_atd='$f10mca41_atd',
		10mca42_atd='$f10mca42_atd',
		10mca43_atd='$f10mca43_atd',
		10mca44_atd='$f10mca44_atd',
		10mca451_atd='$f10mca451_atd',
		10mca452_atd='$f10mca452_atd',
		10mca453_atd='$f10mca453_atd',
		10mca454_atd='$f10mca454_atd',
		10mca455_atd='$f10mca455_atd',
		10mca456_atd='$f10mca456_atd'
		
		where usn='$usn'
";
$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());
	