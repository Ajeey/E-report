<?php

include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];

$f10mca21_ia3=$_POST['10mca21_ia3'];
$f10mca22_ia3=$_POST['10mca22_ia3'];
$f10mca23_ia3=$_POST['10mca23_ia3'];
$f10mca24_ia3=$_POST['10mca24_ia3'];
$f10mca25_ia3=$_POST['10mca25_ia3'];

$f10mca21_atd=$_POST['10mca21_atd'];
$f10mca22_atd=$_POST['10mca22_atd'];
$f10mca23_atd=$_POST['10mca23_atd'];
$f10mca24_atd=$_POST['10mca24_atd'];
$f10mca25_atd=$_POST['10mca25_atd'];



// IA 1
$query1="update sem2_ia3
		set 10mca21_ia3='$f10mca21_ia3',
		10mca22_ia3='$f10mca22_ia3',
		10mca23_ia3='$f10mca23_ia3',
		10mca24_ia3='$f10mca24_ia3',
		10mca25_ia3='$f10mca25_ia3',
		10mca21_atd='$f10mca21_atd',
		10mca22_atd='$f10mca22_atd',
		10mca23_atd='$f10mca23_atd',
		10mca24_atd='$f10mca24_atd',
		10mca25_atd='$f10mca25_atd'
		where usn='$usn'


";

$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());
	
	
	