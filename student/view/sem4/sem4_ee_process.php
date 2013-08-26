<?php

include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;

$f10mca41_ee=$_POST['10mca41_ee'];
$f10mca42_ee=$_POST['10mca42_ee'];
$f10mca43_ee=$_POST['10mca43_ee'];
$f10mca44_ee=$_POST['10mca44_ee'];
$f10mca451_ee=$_POST['10mca451_ee'];
$f10mca452_ee=$_POST['10mca452_ee'];
$f10mca453_ee=$_POST['10mca453_ee'];
$f10mca454_ee=$_POST['10mca454_ee'];
$f10mca455_ee=$_POST['10mca455_ee'];
$f10mca456_ee=$_POST['10mca456_ee'];
$f10mca46_ee=$_POST['10mca46_ee'];
$f10mca47_ee=$_POST['10mca47_ee'];
$f10mca48_ee=$_POST['10mca48_ee'];


// IA  EE
$query1="update sem4_ee
		set 10mca41_ee='$f10mca41_ee',
		10mca42_ee='$f10mca42_ee',
		10mca43_ee='$f10mca43_ee',
		10mca44_ee='$f10mca44_ee',
		10mca451_ee='$f10mca451_ee',
		10mca452_ee='$f10mca452_ee',
		10mca453_ee='$f10mca453_ee',
		10mca454_ee='$f10mca454_ee',
		10mca455_ee='$f10mca455_ee',
		10mca456_ee='$f10mca456_ee',
		10mca46_ee='$f10mca46_ee',
		10mca47_ee='$f10mca47_ee',
		10mca48_ee='$f10mca48_ee'
		where usn='$usn'
";
$result1=mysql_query($query1);

// IA PF

$f10mca41_pf=$_POST['10mca41_pf'];
$f10mca42_pf=$_POST['10mca42_pf'];
$f10mca43_pf=$_POST['10mca43_pf'];
$f10mca44_pf=$_POST['10mca44_pf'];
$f10mca451_pf=$_POST['10mca451_pf'];
$f10mca452_pf=$_POST['10mca452_pf'];
$f10mca453_pf=$_POST['10mca453_pf'];
$f10mca454_pf=$_POST['10mca454_pf'];
$f10mca455_pf=$_POST['10mca455_pf'];
$f10mca456_pf=$_POST['10mca456_pf'];
$f10mca46_pf=$_POST['10mca46_pf'];
$f10mca47_pf=$_POST['10mca47_pf'];
$f10mca48_pf=$_POST['10mca48_pf'];


// IA PF
$query2="update sem4_pf
		set 10mca41_pf='$f10mca41_pf',
		10mca42_pf='$f10mca42_pf',
		10mca43_pf='$f10mca43_pf',
		10mca44_pf='$f10mca44_pf',
		10mca451_pf='$f10mca451_pf',
		10mca452_pf='$f10mca452_pf',
		10mca453_pf='$f10mca453_pf',
		10mca454_pf='$f10mca454_pf',
		10mca455_pf='$f10mca455_pf',
		10mca456_pf='$f10mca456_pf',
		10mca46_pf='$f10mca46_pf',
		10mca47_pf='$f10mca47_pf',
		10mca48_pf='$f10mca48_pf'
		where usn='$usn'
";
$result2=mysql_query($query2);

// IA REMARKS



$fclass_obtained=$_POST['class_obtained'];
//$fremarks=$_POST['remarks'];
$fgoals=$_POST['goals'];

$query3="update sem4_remarks
		set class_obtained='$fclass_obtained',
		goals='$fgoals'
		where usn='$usn' 
";
$resultremarks=mysql_query($query3);

if($result1&&$result2&&$resultremarks)
	header('Location:../database_updated.php');
else
	die(mysql_error());


