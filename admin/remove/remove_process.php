<?php

$usn=$_POST['r_user'];
//echo $usn;

include '../connection.php';

$query="delete from personal_information where usn='$usn'";
$result=mysql_query($query);

if($result)
{
	header('Location:remove_success.php');
	
}
else
{
	die(mysql_error());
	
}