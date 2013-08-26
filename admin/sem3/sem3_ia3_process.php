<?php

include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

$f10mca31_ia3=$_POST['10mca31_ia3'];
$f10mca32_ia3=$_POST['10mca32_ia3'];
$f10mca33_ia3=$_POST['10mca33_ia3'];
$f10mca34_ia3=$_POST['10mca34_ia3'];
$f10mca35_ia3=$_POST['10mca35_ia3'];


$f10mca31_atd=$_POST['10mca31_atd'];
$f10mca32_atd=$_POST['10mca32_atd'];
$f10mca33_atd=$_POST['10mca33_atd'];
$f10mca34_atd=$_POST['10mca34_atd'];
$f10mca35_atd=$_POST['10mca35_atd'];

// IA 3
$query1="insert into sem3_ia3(usn,10mca31_ia3,10mca32_ia3,10mca33_ia3,10mca34_ia3,10mca35_ia3,10mca31_atd,10mca32_atd,10mca33_atd,10mca34_atd,10mca35_atd) values
('$usn','$f10mca31_ia3','$f10mca32_ia3','$f10mca33_ia3','$f10mca34_ia3','$f10mca35_ia3','$f10mca31_atd','$f10mca32_atd','$f10mca33_atd','$f10mca34_atd','$f10mca35_atd')";
$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());