<?php
$fusn=$_POST['fusn'];
$femail=$_POST['femail'];

//echo $femail;
//echo $fusn;

include '../../connection.php';

$query="select name,password,email_id from personal_information where usn='$fusn'";
$result=mysql_query($query);




if($result)
{
	$row=mysql_fetch_row($result);
	$name=$row[0];
	$pass=$row[1];
	$email=$row[2];
	
	if($femail===$email)
	{
		
		session_start();
		$_SESSION['name']=$name;
		$_SESSION['password']=$pass;
		
		echo $email;
		echo $pass;
		header('Location:mail_password.php');
		
		
		
		
		
	}
	else
	{
		echo "Invalid details";
	}
	
	
	
	
	
	
}
else
{
	die(mysql_error());
	
}
