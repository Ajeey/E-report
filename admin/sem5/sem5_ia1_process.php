<?php






include '../admin_session.php';
include '../connection.php';
$usn=$_SESSION['usn'];
//echo $usn;

$f10mca51_ia1=$_POST['10mca51_ia1'];
$f10mca52_ia1=$_POST['10mca52_ia1'];
$f10mca53_ia1=$_POST['10mca53_ia1'];

//elective
$f10mca541_ia1=$_POST['10mca541_ia1'];
$f10mca542_ia1=$_POST['10mca542_ia1'];
$f10mca543_ia1=$_POST['10mca543_ia1'];
$f10mca544_ia1=$_POST['10mca544_ia1'];
$f10mca545_ia1=$_POST['10mca545_ia1'];
$f10mca546_ia1=$_POST['10mca546_ia1'];


//elective
$f10mca551_ia1=$_POST['10mca551_ia1'];
$f10mca552_ia1=$_POST['10mca552_ia1'];
$f10mca553_ia1=$_POST['10mca553_ia1'];
$f10mca554_ia1=$_POST['10mca554_ia1'];
$f10mca555_ia1=$_POST['10mca555_ia1'];
$f10mca556_ia1=$_POST['10mca556_ia1'];


//att
$f10mca51_atd=$_POST['10mca51_atd'];
$f10mca52_atd=$_POST['10mca52_atd'];
$f10mca53_atd=$_POST['10mca53_atd'];

//ele
$f10mca541_atd=$_POST['10mca541_atd'];
$f10mca542_atd=$_POST['10mca542_atd'];
$f10mca543_atd=$_POST['10mca543_atd'];
$f10mca544_atd=$_POST['10mca544_atd'];
$f10mca545_atd=$_POST['10mca545_atd'];
$f10mca546_atd=$_POST['10mca546_atd'];


//elective att
$f10mca551_atd=$_POST['10mca551_atd'];
$f10mca552_atd=$_POST['10mca552_atd'];
$f10mca553_atd=$_POST['10mca553_atd'];
$f10mca554_atd=$_POST['10mca554_atd'];
$f10mca555_atd=$_POST['10mca555_atd'];
$f10mca556_atd=$_POST['10mca556_atd'];



// IA 1
$query1="insert into sem5_ia1(usn,10mca51_ia1,10mca52_ia1,10mca53_ia1,10mca541_ia1,10mca542_ia1,10mca543_ia1,10mca544_ia1,10mca545_ia1,10mca546_ia1,10mca551_ia1,10mca552_ia1,10mca553_ia1,10mca554_ia1,10mca555_ia1,10mca556_ia1,10mca51_atd,10mca52_atd,10mca53_atd,10mca541_atd,10mca542_atd,10mca543_atd,10mca544_atd,10mca545_atd,10mca546_atd,10mca551_atd,10mca552_atd,10mca553_atd,10mca554_atd,10mca555_atd,10mca556_atd) values
('$usn','$f10mca51_ia1','$f10mca52_ia1','$f10mca53_ia1','$f10mca541_ia1','$f10mca542_ia1','$f10mca543_ia1','$f10mca544_ia1','$f10mca545_ia1','$f10mca546_ia1','$f10mca551_ia1','$f10mca552_ia1','$f10mca553_ia1','$f10mca554_ia1','$f10mca555_ia1','$f10mca556_ia1','$f10mca51_atd','$f10mca52_atd','$f10mca53_atd','$f10mca541_atd','$f10mca542_atd','$f10mca543_atd','$f10mca544_atd','$f10mca545_atd','$f10mca546_atd','$f10mca551_atd','$f10mca552_atd','$f10mca553_atd','$f10mca554_atd','$f10mca555_atd','$f10mca556_atd')";
$result1=mysql_query($query1);
if($result1)
	header('Location:../database_updated.php');
else
	die(mysql_error());
	
	
	