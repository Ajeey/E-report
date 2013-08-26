<?php

session_start();
if($_SESSION['student']!=3)
{
	header('Location:../index.php');
}

$sem=$_POST['student_sems'];
$_SESSION['stud_sems']=$sem;

echo $_SESSION['stud_usn'];
echo $_SESSION['stud_sems'];


switch($_SESSION['stud_sems'])
{
	case 1:header('Location:view/sem1/enter_sem1.php');
			break;
		
	case 2:header('Location:view/sem2/enter_sem2.php');
			break;
		
	case 3:header('Location:view/sem3/enter_sem3.php');
			break;
	case 4:header('Location:view/sem4/enter_sem4.php');
			break;
	case 5:header('Location:view/sem5/enter_sem5.php');
			break;
	
}