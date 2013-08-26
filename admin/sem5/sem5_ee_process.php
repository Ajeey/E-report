<?php

include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

$f10mca51_ee=$_POST['10mca51_ee'];
$f10mca52_ee=$_POST['10mca52_ee'];
$f10mca53_ee=$_POST['10mca53_ee'];

$f10mca541_ee=$_POST['10mca541_ee'];
$f10mca542_ee=$_POST['10mca542_ee'];
$f10mca543_ee=$_POST['10mca543_ee'];
$f10mca544_ee=$_POST['10mca544_ee'];
$f10mca545_ee=$_POST['10mca545_ee'];
$f10mca546_ee=$_POST['10mca546_ee'];

$f10mca551_ee=$_POST['10mca551_ee'];
$f10mca552_ee=$_POST['10mca552_ee'];
$f10mca553_ee=$_POST['10mca553_ee'];
$f10mca554_ee=$_POST['10mca554_ee'];
$f10mca555_ee=$_POST['10mca555_ee'];
$f10mca556_ee=$_POST['10mca556_ee'];

$f10mca56_ee=$_POST['10mca56_ee'];
$f10mca57_ee=$_POST['10mca57_ee'];
$f10mca58_ee=$_POST['10mca58_ee'];


// IA  EE
$query1="insert into sem5_ee(usn,10mca51_ee,10mca52_ee,10mca53_ee,10mca541_ee,10mca542_ee,10mca543_ee,10mca544_ee,10mca545_ee,10mca546_ee,10mca551_ee,10mca552_ee,10mca553_ee,10mca554_ee,10mca555_ee,10mca556_ee,10mca56_ee,10mca57_ee,10mca58_ee) values
('$usn','$f10mca51_ee','$f10mca52_ee','$f10mca53_ee','$f10mca541_ee','$f10mca542_ee','$f10mca543_ee','$f10mca544_ee','$f10mca545_ee','$f10mca546_ee','$f10mca551_ee','$f10mca552_ee','$f10mca553_ee','$f10mca554_ee','$f10mca555_ee','$f10mca556_ee','$f10mca56_ee','$f10mca57_ee','$f10mca58_ee')";
$result1=mysql_query($query1);



$f10mca51_pf=$_POST['10mca51_pf'];
$f10mca52_pf=$_POST['10mca52_pf'];
$f10mca53_pf=$_POST['10mca53_pf'];

$f10mca541_pf=$_POST['10mca541_pf'];
$f10mca542_pf=$_POST['10mca542_pf'];
$f10mca543_pf=$_POST['10mca543_pf'];
$f10mca544_pf=$_POST['10mca544_pf'];
$f10mca545_pf=$_POST['10mca545_pf'];
$f10mca546_pf=$_POST['10mca546_pf'];

$f10mca551_pf=$_POST['10mca551_pf'];
$f10mca552_pf=$_POST['10mca552_pf'];
$f10mca553_pf=$_POST['10mca553_pf'];
$f10mca554_pf=$_POST['10mca554_pf'];
$f10mca555_pf=$_POST['10mca555_pf'];
$f10mca556_pf=$_POST['10mca556_pf'];

$f10mca56_pf=$_POST['10mca56_pf'];
$f10mca57_pf=$_POST['10mca57_pf'];
$f10mca58_pf=$_POST['10mca58_pf'];


// IA PF
$query2="insert into sem5_pf(usn,10mca51_pf,10mca52_pf,10mca53_pf,10mca541_pf,10mca542_pf,10mca543_pf,10mca544_pf,10mca545_pf,10mca546_pf,10mca551_pf,10mca552_pf,10mca553_pf,10mca554_pf,10mca555_pf,10mca556_pf,10mca56_pf,10mca57_pf,10mca58_pf) values
('$usn','$f10mca51_pf','$f10mca52_pf','$f10mca53_pf','$f10mca541_pf','$f10mca542_pf','$f10mca543_pf','$f10mca544_pf','$f10mca545_pf','$f10mca546_pf','$f10mca551_pf','$f10mca552_pf','$f10mca553_pf','$f10mca554_pf','$f10mca555_pf','$f10mca556_pf','$f10mca56_pf','$f10mca57_pf','$f10mca58_pf')";
$result2=mysql_query($query2);

// IA REMARKS



$fclass_obtained=$_POST['class_obtained'];
//$fremarks=$_POST['remarks'];
$fgoals=$_POST['goals'];

$queryremarks="insert into sem5_remarks(usn,class_obtained,goals) values('$usn','$fclass_obtained','$fgoals')";
$resultremarks=mysql_query($queryremarks);

if($result1&&$result2&&$resultremarks)
	header('Location:../database_updated.php');
else
	die(mysql_error());


