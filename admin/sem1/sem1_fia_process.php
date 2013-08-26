<?php

include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

$f10mca11_fia=$_POST['10mca11_fia'];
$f10mca12_fia=$_POST['10mca12_fia'];
$f10mca13_fia=$_POST['10mca13_fia'];
$f10mca14_fia=$_POST['10mca14_fia'];
$f10mca15_fia=$_POST['10mca15_fia'];
$f10mca16_fia=$_POST['10mca16_fia'];
$f10mca17_fia=$_POST['10mca17_fia'];
$f10mca18_fia=$_POST['10mca18_fia'];


// IA 3
$query1="insert into sem1_fia(usn,10mca11_fia,10mca12_fia,10mca13_fia,10mca14_fia,10mca15_fia,10mca16_fia,10mca17_fia,10mca18_fia) values
('$usn','$f10mca11_fia','$f10mca12_fia','$f10mca13_fia','$f10mca14_fia','$f10mca15_fia','$f10mca16_fia','$f10mca17_fia','$f10mca18_fia')";
$result1=mysql_query($query1);
if($result1)
	header('Location:database_updated.php');
else
	die(mysql_error());