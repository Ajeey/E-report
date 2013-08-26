<?php
include 'start_session.php';

$ch=$_POST['info'];

switch($ch)
{
	case 0:header('Location:slogin.php');
	break;
	
	case 1:header('Location:pinfo.php');
	break;

	case 2:header('Location:finfo.php');
	break;

	case 3:header('Location:sinfo.php');
	break;
	
	case 4:header('Location:ainfo.php');
	break;
	
	

}