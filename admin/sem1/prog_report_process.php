<?php
include '../connection.php';
session_start();
$usn=$_SESSION['usn'];

echo $usn;

$query="select name,10mca11_ia1,10mca12_ia1,10mca13_ia1,10mca14_ia1,10mca15_ia1
from  sem1_ia1 a1 ,personal_information p,sem1_remarks r
where a1.usn=p.usn and r.usn=p.usn
and p.usn='2kl10mca01' and r.usn='2kl10mca01'";
$result=mysql_query($query);

if($result)
{
			while($i=mysql_fetch_array($result))
			{
				echo "<br>";
				echo $i['name'];
				$mname=$i['name'];
				echo "<br>";
				
				echo $i['10mca11_ia1'];
				$m1=$i['10mca11_ia1'];
				echo "<br>";
				
				
				echo $i['10mca12_ia1'];
				$m2=$i['10mca12_ia1'];
				echo "<br>";
				
				echo $i['10mca13_ia1'];
				$m3=$i['10mca13_ia1'];
				echo "<br>";
				
				echo $i['10mca14_ia1'];
				$m4=$i['10mca14_ia1'];
				echo "<br>";
				
				echo $i['10mca15_ia1'];
				$m5=$i['10mca15_ia1'];
				echo "<br>";
				
				
				
				$_SESSION['name']=$mname;
				$_SESSION['10mca11_ia1']=$m1;
				$_SESSION['10mca12_ia1']=$m2;
				$_SESSION['10mca13_ia1']=$m3;
				$_SESSION['10mca14_ia1']=$m4;
				$_SESSION['10mca15_ia1']=$m5;
				$_SESSION['remarks']=$i['remarks'];
				
				echo $_SESSION['remarks'];
			}
			//echo $musn,$m1,$m2,$m3,$m4,$m5;
			
			
			
			
			
			
			
			header('Location:prog_report.php');
			
			
}
else
	die(mysql_error());