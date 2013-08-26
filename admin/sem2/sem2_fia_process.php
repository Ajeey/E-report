<?php

include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

$f10mca21_fia=$_POST['10mca21_fia'];
$f10mca22_fia=$_POST['10mca22_fia'];
$f10mca23_fia=$_POST['10mca23_fia'];
$f10mca24_fia=$_POST['10mca24_fia'];
$f10mca25_fia=$_POST['10mca25_fia'];
$f10mca26_fia=$_POST['10mca26_fia'];
$f10mca27_fia=$_POST['10mca27_fia'];
$f10mca28_fia=$_POST['10mca28_fia'];


// IA 3
$query1="insert into sem2_fia(usn,10mca21_fia,10mca22_fia,10mca23_fia,10mca24_fia,10mca25_fia,10mca26_fia,10mca27_fia,10mca28_fia) values
('$usn','$f10mca21_fia','$f10mca22_fia','$f10mca23_fia','$f10mca24_fia','$f10mca25_fia','$f10mca26_fia','$f10mca27_fia','$f10mca28_fia')";
$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());