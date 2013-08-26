<?php

include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;

$f10mca21_ee=$_POST['10mca21_ee'];
$f10mca22_ee=$_POST['10mca22_ee'];
$f10mca23_ee=$_POST['10mca23_ee'];
$f10mca24_ee=$_POST['10mca24_ee'];
$f10mca25_ee=$_POST['10mca25_ee'];
$f10mca26_ee=$_POST['10mca26_ee'];
$f10mca27_ee=$_POST['10mca27_ee'];
$f10mca28_ee=$_POST['10mca28_ee'];


// IA  EE
$query1="update sem2_ee
		set 10mca21_ee='$f10mca21_ee',
		10mca22_ee='$f10mca22_ee',
		10mca23_ee='$f10mca23_ee',
		10mca24_ee='$f10mca24_ee',
		10mca25_ee='$f10mca25_ee',
		10mca26_ee='$f10mca26_ee',
		10mca27_ee='$f10mca27_ee',
		10mca28_ee='$f10mca28_ee'
		where usn='$usn' 
";
$result1=mysql_query($query1);

// IA PF

$f10mca21_pf=$_POST['10mca21_pf'];
$f10mca22_pf=$_POST['10mca22_pf'];
$f10mca23_pf=$_POST['10mca23_pf'];
$f10mca24_pf=$_POST['10mca24_pf'];
$f10mca25_pf=$_POST['10mca25_pf'];
$f10mca26_pf=$_POST['10mca26_pf'];
$f10mca27_pf=$_POST['10mca27_pf'];
$f10mca28_pf=$_POST['10mca28_pf'];


// IA PF
$query2="update sem2_pf
		set 10mca21_pf='$f10mca21_pf',
		10mca22_pf='$f10mca22_pf',
		10mca23_pf='$f10mca23_pf',
		10mca24_pf='$f10mca24_pf',
		10mca25_pf='$f10mca25_pf',
		10mca26_pf='$f10mca26_pf',
		10mca27_pf='$f10mca27_pf',
		10mca28_pf='$f10mca28_pf'
		where usn='$usn' 
";
$result2=mysql_query($query2);

// IA REMARKS



$fclass_obtained=$_POST['class_obtained'];
//$fremarks=$_POST['remarks'];
$fgoals=$_POST['goals'];

$query3="update sem2_remarks
		set class_obtained='$fclass_obtained',
		goals='$fgoals'
		where usn='$usn' 
";
$resultremarks=mysql_query($query3);

if($result1&&$result2&&$resultremarks)
	header('Location:../database_updated.php');
else
	die(mysql_error());


