<?php

session_start();
if($_SESSION['admin']!=2)
{
	header('Location:admin.php');
}


$f10mca11_ia1=$_POST['10mca11_ia1'];
$f10mca12_ia1=$_POST['10mca12_ia1'];
$f10mca13_ia1=$_POST['10mca13_ia1'];
$f10mca14_ia1=$_POST['10mca14_ia1'];
$f10mca15_ia1=$_POST['10mca15_ia1'];
$f10mca16_ia1=$_POST['10mca16_ia1'];
$f10mca17_ia1=$_POST['10mca17_ia1'];
$f10mca18_ia1=$_POST['10mca18_ia1'];

$f10mca11_ia2=$_POST['10mca11_ia2'];
$f10mca12_ia2=$_POST['10mca12_ia2'];
$f10mca13_ia2=$_POST['10mca13_ia2'];
$f10mca14_ia2=$_POST['10mca14_ia2'];
$f10mca15_ia2=$_POST['10mca15_ia2'];
$f10mca16_ia2=$_POST['10mca16_ia2'];
$f10mca17_ia2=$_POST['10mca17_ia2'];
$f10mca18_ia2=$_POST['10mca18_ia2'];

$f10mca11_ia3=$_POST['10mca11_ia3'];
$f10mca12_ia3=$_POST['10mca12_ia3'];
$f10mca13_ia3=$_POST['10mca13_ia3'];
$f10mca14_ia3=$_POST['10mca14_ia3'];
$f10mca15_ia3=$_POST['10mca15_ia3'];
$f10mca16_ia3=$_POST['10mca16_ia3'];
$f10mca17_ia3=$_POST['10mca17_ia3'];
$f10mca18_ia3=$_POST['10mca18_ia3'];

$f10mca11_fia=$_POST['10mca11_fia'];
$f10mca12_fia=$_POST['10mca12_fia'];
$f10mca13_fia=$_POST['10mca13_fia'];
$f10mca14_fia=$_POST['10mca14_fia'];
$f10mca15_fia=$_POST['10mca15_fia'];
$f10mca16_fia=$_POST['10mca16_fia'];
$f10mca17_fia=$_POST['10mca17_fia'];
$f10mca18_fia=$_POST['10mca18_fia'];

$f10mca11_ee=$_POST['10mca11_ee'];
$f10mca12_ee=$_POST['10mca12_ee'];
$f10mca13_ee=$_POST['10mca13_ee'];
$f10mca14_ee=$_POST['10mca14_ee'];
$f10mca15_ee=$_POST['10mca15_ee'];
$f10mca16_ee=$_POST['10mca16_ee'];
$f10mca17_ee=$_POST['10mca17_ee'];
$f10mca18_ee=$_POST['10mca18_ee'];

$f10mca11_pf=$_POST['10mca11_pf'];
$f10mca12_pf=$_POST['10mca12_pf'];
$f10mca13_pf=$_POST['10mca13_pf'];
$f10mca14_pf=$_POST['10mca14_pf'];
$f10mca15_pf=$_POST['10mca15_pf'];
$f10mca16_pf=$_POST['10mca16_pf'];
$f10mca17_pf=$_POST['10mca17_pf'];
$f10mca18_pf=$_POST['10mca18_pf'];

$fclass_obtained=$_POST['class_obtained'];
$fremarks=$_POST['remarks'];
$fgoals=$_POST['goals'];

$usn=$_SESSION['usn'];


include 'connection.php';
// IA 1
$query1="insert into sem1_ia1(usn,10mca11_ia1,10mca12_ia1,10mca13_ia1,10mca14_ia1,10mca15_ia1) values
			('$usn','$f10mca11_ia1','$f10mca12_ia1','$f10mca13_ia1','$f10mca14_ia1','$f10mca15_ia1')";
$result1=mysql_query($query1);
if($result1)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";


// IA 2
$query2="insert into sem1_ia2(usn,10mca11_ia2,10mca12_ia2,10mca13_ia2,10mca14_ia2,10mca15_ia2) values
('$usn','$f10mca11_ia2','$f10mca12_ia2','$f10mca13_ia2','$f10mca14_ia2','$f10mca15_ia2')";
$result2=mysql_query($query2);
if($result2)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";


//IA 3

$query3="insert into sem1_ia3(usn,10mca11_ia3,10mca12_ia3,10mca13_ia3,10mca14_ia3,10mca15_ia3) values
('$usn','$f10mca11_ia3','$f10mca12_ia3','$f10mca13_ia3','$f10mca14_ia3','$f10mca15_ia3')";
$result3=mysql_query($query3);
if($result3)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";

//FIA
 
$queryfia="insert into sem1_fia(usn,10mca11_fia,10mca12_fia,10mca13_fia,10mca14_fia,10mca15_fia,10mca16_fia,10mca17_fia,10mca18_fia) values
('$usn','$f10mca11_fia','$f10mca12_fia','$f10mca13_fia','$f10mca14_fia','$f10mca15_fia','$f10mca16_fia','$f10mca17_fia','$f10mca18_fia')";
$resultfia=mysql_query($queryfia);
if($resultfia)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";

// EE

$queryee="insert into sem1_ee(usn,10mca11_ee,10mca12_ee,10mca13_ee,10mca14_ee,10mca15_ee,10mca16_ee,10mca17_ee,10mca18_ee) values
('$usn','$f10mca11_ee','$f10mca12_ee','$f10mca13_ee','$f10mca14_ee','$f10mca15_ee','$f10mca16_ee','$f10mca17_ee','$f10mca18_ee')";
$resultee=mysql_query($queryee);
if($resultee)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";

// PF
$querypf="insert into sem1_pf(usn,10mca11_pf,10mca12_pf,10mca13_pf,10mca14_pf,10mca15_pf,10mca16_pf,10mca17_pf,10mca18_pf) values
('$usn','$f10mca11_pf','$f10mca12_pf','$f10mca13_pf','$f10mca14_pf','$f10mca15_pf','$f10mca16_pf','$f10mca17_pf','$f10mca18_pf')";
$resultpf=mysql_query($querypf);
if($resultpf)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";

// Remarks

$queryremarks="insert into sem1_remarks(usn,class_obtained,remarks,goals) values('$usn','$fclass_obtained','$fremarks','$fgoals')";
$resultremarks=mysql_query($queryremarks);
if($resultremarks)
	header('Location:database_updated.php');
else
	echo "ERRRRRRORRRRRRRRRRRR>!!!!!!!!";
?>