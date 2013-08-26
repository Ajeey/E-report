<?php
include '../connection.php';

$name=$_POST['inputtext1'];
$pass=$_POST['inputtext2'];
//$pass=$_POST['inputtext2'];
$query="select usn,password from personal_information where usn='$name' && password='$pass' ";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count==1)
{
	session_start();
	$_SESSION['student']=1;
	$_SESSION['stud_usn']=$name;	
	
	header('Location:slogin.php');
	
	
}
else
{
	echo 'error';
	
	echo $name;
	echo '<br>';
	echo $pass;
	
	die(mysql_error());
}
?>