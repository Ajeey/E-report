<?php

include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;

$f10mca11_ia2=$_POST['10mca11_ia2'];
$f10mca12_ia2=$_POST['10mca12_ia2'];
$f10mca13_ia2=$_POST['10mca13_ia2'];
$f10mca14_ia2=$_POST['10mca14_ia2'];
$f10mca15_ia2=$_POST['10mca15_ia2'];

$f10mca11_atd=$_POST['10mca11_atd'];
$f10mca12_atd=$_POST['10mca12_atd'];
$f10mca13_atd=$_POST['10mca13_atd'];
$f10mca14_atd=$_POST['10mca14_atd'];
$f10mca15_atd=$_POST['10mca15_atd'];


$query1="update sem1_ia2
		set 10mca11_ia2='$f10mca11_ia2',
		10mca12_ia2='$f10mca12_ia2',
		10mca13_ia2='$f10mca13_ia2',
		10mca14_ia2='$f10mca14_ia2',
		10mca15_ia2='$f10mca15_ia2',
		10mca11_atd='$f10mca11_atd',
		10mca12_atd='$f10mca12_atd',
		10mca13_atd='$f10mca13_atd',
		10mca14_atd='$f10mca14_atd',
		10mca15_atd='$f10mca15_atd'
		where usn='$usn'


";

// IA 1

$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());
	
	
	