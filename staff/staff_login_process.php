<?php 
include 'connection.php';
$name=$_POST['inputtext1'];
$pass=$_POST['inputtext2'];

$query2 = "select name,password from mentor where name='$name' && password='$pass' ";
$result2=mysql_query($query2);

$count=mysql_num_rows($result2);

if($count==1)
{
	session_start();
	$_SESSION['staff']=3;
	$_SESSION['staff_name']=$name;
	header('Location:stlogin.php');


}
else
{
	echo "Invalid Details";

//	die(mysql_error());
}


?>