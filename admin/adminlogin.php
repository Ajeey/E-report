<?php
include 'connection.php';

$username=mysql_real_escape_string($_POST['inputtext1']);
$password=mysql_real_escape_string($_POST['inputtext2']);

$query="select username,password from admin where username='$username' && password='$password'";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count==1)
{
	echo "Welcome $username";
	//include 'select.html';
	session_start();
	$_SESSION['admin']=2;
	$_SESSION['user']=$username;
	header('Location:select.php');
}
else
	echo "Invalid Details";




/*if($username=='username' && $password=='password')
	echo "WELCOME $username";
else
	echo "Invalid Details";*/

?>