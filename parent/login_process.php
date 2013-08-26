<?php
include 'connection.php';
$user=$_POST['inputtext2'];
//echo $user;
$query="select * from personal_information p,father f
where p.usn=f.usn
and f.email_id='$user'";


$result=mysql_query($query);




if($result)
{
	session_start();
	$_SESSION['parent']=5;
	$_SESSION['pname']=$user;
	header('Location:plogin.php');
	
		$f="select * from father where email_id='$user'";
		$r=mysql_query($f);
	
		while($i=mysql_fetch_array($r))
		{
			
			//echo $i['usn'];
		//	echo "<br>";
			//echo $i['password'];
		//	echo "<br>";
		//	echo $i['name'];
		//	echo "<br>";
			echo $i['email_id'];
			echo "<br>";
			
			
		}
}
else
	die(mysql_error());
