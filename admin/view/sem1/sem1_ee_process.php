<?php

include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;
//EE table
$f10mca11_ee=$_POST['10mca11_ee'];
$f10mca12_ee=$_POST['10mca12_ee'];
$f10mca13_ee=$_POST['10mca13_ee'];
$f10mca14_ee=$_POST['10mca14_ee'];
$f10mca15_ee=$_POST['10mca15_ee'];
$f10mca16_ee=$_POST['10mca16_ee'];
$f10mca17_ee=$_POST['10mca17_ee'];
$f10mca18_ee=$_POST['10mca18_ee'];

$query1="update sem1_ee
		set 10mca11_ee='$f10mca11_ee',
		10mca12_ee='$f10mca12_ee',
		10mca13_ee='$f10mca13_ee',
		10mca14_ee='$f10mca14_ee',
		10mca15_ee='$f10mca15_ee',
		10mca16_ee='$f10mca16_ee',
		10mca17_ee='$f10mca17_ee',
		10mca18_ee='$f10mca18_ee'
		where usn='$usn' 
";
$result1=mysql_query($query1);

// PF table

$f10mca11_pf=$_POST['10mca11_pf'];
$f10mca12_pf=$_POST['10mca12_pf'];
$f10mca13_pf=$_POST['10mca13_pf'];
$f10mca14_pf=$_POST['10mca14_pf'];
$f10mca15_pf=$_POST['10mca15_pf'];
$f10mca16_pf=$_POST['10mca16_pf'];
$f10mca17_pf=$_POST['10mca17_pf'];
$f10mca18_pf=$_POST['10mca18_pf'];


$query2="update sem1_pf
		set 10mca11_pf='$f10mca11_pf',
		10mca12_pf='$f10mca12_pf',
		10mca13_pf='$f10mca13_pf',
		10mca14_pf='$f10mca14_pf',
		10mca15_pf='$f10mca15_pf',
		10mca16_pf='$f10mca16_pf',
		10mca17_pf='$f10mca17_pf',
		10mca18_pf='$f10mca18_pf'
		where usn='$usn' 
";
$result2=mysql_query($query2);


//  REMARKS table



$fclass_obtained=$_POST['class_obtained'];
//$fremarks=$_POST['remarks'];
$fgoals=$_POST['goals'];

$query3="update sem1_remarks
		set class_obtained='$fclass_obtained',
		goals='$fgoals'
		where usn='$usn' 
";
$resultremarks=mysql_query($query3);

if($result1&&$result2&&$resultremarks)
	header('Location:../database_updated.php');
else
	die(mysql_error());


