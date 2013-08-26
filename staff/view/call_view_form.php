<?php

include '../admin_session.php';

$_SESSION['v_sem']=$_POST['v_sems'];


//echo $_SESSION['v_usn'];
//echo $_SESSION['sem'];


switch($_SESSION['v_sem'])
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
