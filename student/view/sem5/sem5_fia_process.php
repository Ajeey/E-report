<?php


include '../../admin_session.php';
include '../../connection.php';
$usn=$_SESSION['v_usn'];
//echo $usn;



$f10mca51_fia=$_POST['10mca51_fia'];
$f10mca52_fia=$_POST['10mca52_fia'];
$f10mca53_fia=$_POST['10mca53_fia'];


$f10mca541_fia=$_POST['10mca541_fia'];
$f10mca542_fia=$_POST['10mca542_fia'];
$f10mca543_fia=$_POST['10mca543_fia'];
$f10mca544_fia=$_POST['10mca544_fia'];
$f10mca545_fia=$_POST['10mca545_fia'];
$f10mca546_fia=$_POST['10mca546_fia'];


//elective
$f10mca551_fia=$_POST['10mca551_fia'];
$f10mca552_fia=$_POST['10mca552_fia'];
$f10mca553_fia=$_POST['10mca553_fia'];
$f10mca554_fia=$_POST['10mca554_fia'];
$f10mca555_fia=$_POST['10mca555_fia'];
$f10mca556_fia=$_POST['10mca556_fia'];


//lab
$f10mca56_fia=$_POST['10mca56_fia'];
$f10mca57_fia=$_POST['10mca57_fia'];
$f10mca58_fia=$_POST['10mca58_fia'];


// IA 1
$query1="update sem5_fia
set 10mca51_fia='$f10mca51_fia',
10mca52_fia='$f10mca52_fia',
10mca53_fia='$f10mca53_fia',

10mca541_fia='$f10mca541_fia',
10mca542_fia='$f10mca542_fia',
10mca543_fia='$f10mca543_fia',
10mca544_fia='$f10mca544_fia',
10mca545_fia='$f10mca545_fia',
10mca546_fia='$f10mca546_fia',

10mca551_fia='$f10mca551_fia',
10mca552_fia='$f10mca552_fia',
10mca553_fia='$f10mca553_fia',
10mca554_fia='$f10mca554_fia',
10mca555_fia='$f10mca555_fia',
10mca556_fia='$f10mca556_fia',
10mca56_fia='$f10mca56_fia',
10mca57_fia='$f10mca57_fia',
10mca58_fia='$f10mca58_fia'
where usn='$usn'
";

$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());