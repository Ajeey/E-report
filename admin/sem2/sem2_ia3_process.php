<?php

include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

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

// IA 3
$query1="insert into sem2_ia3(usn,10mca21_ia3,10mca22_ia3,10mca23_ia3,10mca24_ia3,10mca25_ia3,10mca21_atd,10mca22_atd,10mca23_atd,10mca24_atd,10mca25_atd) values
('$usn','$f10mca21_ia3','$f10mca22_ia3','$f10mca23_ia3','$f10mca24_ia3','$f10mca25_ia3','$f10mca21_atd','$f10mca22_atd','$f10mca23_atd','$f10mca24_atd','$f10mca25_atd')";
$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());