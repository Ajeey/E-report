<?php

session_start();
if($_SESSION['admin']!=2)
{
	header('Location:admin.php');
}

$sem=$_POST['sems'];
$_SESSION['sem']=$sem;

echo $_SESSION['usn'];
echo $_SESSION['sem'];


switch($_SESSION['sem'])
{
	case 1:header('Location:sem1/enter_sem1.php');
			break;
		
	case 2:header('Location:sem2/enter_sem2.php');
			break;
		
	case 3:header('Location:sem3/enter_sem3.php');
			break;
	case 4:header('Location:sem4/enter_sem4.php');
			break;
	case 5:header('Location:sem5/enter_sem5.php');
			break;
	
}