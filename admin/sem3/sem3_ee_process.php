<?php

include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

$f10mca31_ee=$_POST['10mca31_ee'];
$f10mca32_ee=$_POST['10mca32_ee'];
$f10mca33_ee=$_POST['10mca33_ee'];
$f10mca34_ee=$_POST['10mca34_ee'];
$f10mca35_ee=$_POST['10mca35_ee'];
$f10mca36_ee=$_POST['10mca36_ee'];
$f10mca37_ee=$_POST['10mca37_ee'];
$f10mca38_ee=$_POST['10mca38_ee'];


// IA  EE
$query1="insert into sem3_ee(usn,10mca31_ee,10mca32_ee,10mca33_ee,10mca34_ee,10mca35_ee,10mca36_ee,10mca37_ee,10mca38_ee) values
('$usn','$f10mca31_ee','$f10mca32_ee','$f10mca33_ee','$f10mca34_ee','$f10mca35_ee','$f10mca36_ee','$f10mca37_ee','$f10mca38_ee')";
$result1=mysql_query($query1);

// IA PF

$f10mca31_pf=$_POST['10mca31_pf'];
$f10mca32_pf=$_POST['10mca32_pf'];
$f10mca33_pf=$_POST['10mca33_pf'];
$f10mca34_pf=$_POST['10mca34_pf'];
$f10mca35_pf=$_POST['10mca35_pf'];
$f10mca36_pf=$_POST['10mca36_pf'];
$f10mca37_pf=$_POST['10mca37_pf'];
$f10mca38_pf=$_POST['10mca38_pf'];


// IA PF
$query2="insert into sem3_pf(usn,10mca31_pf,10mca32_pf,10mca33_pf,10mca34_pf,10mca35_pf,10mca36_pf,10mca37_pf,10mca38_pf) values
('$usn','$f10mca31_pf','$f10mca32_pf','$f10mca33_pf','$f10mca34_pf','$f10mca35_pf','$f10mca36_pf','$f10mca37_pf','$f10mca38_pf')";
$result2=mysql_query($query2);

// IA REMARKS



$fclass_obtained=$_POST['class_obtained'];
//$fremarks=$_POST['remarks'];
$fgoals=$_POST['goals'];

$queryremarks="insert into sem3_remarks(usn,class_obtained,goals) values('$usn','$fclass_obtained','$fgoals')";
$resultremarks=mysql_query($queryremarks);

if($result1&&$result2&&$resultremarks)
	header('Location:../database_updated.php');
else
	die(mysql_error());


