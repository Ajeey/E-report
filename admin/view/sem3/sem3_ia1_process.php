<?php






include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;

$f10mca31_ia1=$_POST['10mca31_ia1'];
$f10mca32_ia1=$_POST['10mca32_ia1'];
$f10mca33_ia1=$_POST['10mca33_ia1'];
$f10mca34_ia1=$_POST['10mca34_ia1'];
$f10mca35_ia1=$_POST['10mca35_ia1'];

$f10mca31_atd=$_POST['10mca31_atd'];
$f10mca32_atd=$_POST['10mca32_atd'];
$f10mca33_atd=$_POST['10mca33_atd'];
$f10mca34_atd=$_POST['10mca34_atd'];
$f10mca35_atd=$_POST['10mca35_atd'];


$query1="update sem3_ia1
		set 10mca31_ia1='$f10mca31_ia1',
		10mca32_ia1='$f10mca32_ia1',
		10mca33_ia1='$f10mca33_ia1',
		10mca34_ia1='$f10mca34_ia1',
		10mca35_ia1='$f10mca35_ia1',
		10mca31_atd='$f10mca31_atd',
		10mca32_atd='$f10mca32_atd',
		10mca33_atd='$f10mca33_atd',
		10mca34_atd='$f10mca34_atd',
		10mca35_atd='$f10mca35_atd'
		where usn='$usn'


";

// IA 3

$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());
	
	
	