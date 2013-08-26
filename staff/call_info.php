<?php

session_start();
if($_SESSION['staff']!=3)
{
	header('Location:../index.php');
}



//echo $_SESSION['s_usn'];
//echo $_SESSION['s_sem'];
$sem=$_POST['call_sems'];
//echo  $sem;

switch($sem)
{
	case 1:header('Location:pinfo.php');
			break;
		
	case 2:header('Location:finfo.php');
			break;
		
	case 3:header('Location:sinfo.php');
			break;
	case 4:header('Location:ainfo.php');
			break;
	
	
}