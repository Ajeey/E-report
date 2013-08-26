<?php
include '../../connection.php';
//include '../../staff_session.php';

//$remarks=$_POST['remarks_ia1'];
//session_start();
$usn=$_SESSION['s_usn'];
//echo $usn;

$query1="select usn,name from personal_information where usn='$usn'";
$result1=mysql_query($query1);

while($j=mysql_fetch_row($result1))
{
	$z1=$j[0];
	$z2=$j[1];
	
	
}
//echo $a1;
//echo $a2;

$query2="select * from sem1_ia1 where usn='$usn'";
$result2=mysql_query($query2);
while($i=mysql_fetch_row($result2))
{
	$a1=$i[1];
	$a2=$i[2];
	$a3=$i[3];
	$a4=$i[4];
	$a5=$i[5];
	$a6=$i[6];
	$a7=$i[7];
	$a8=$i[8];
	$a9=$i[9];
	$a10=$i[10];
	$a11=$i[11];
}
$name=$_SESSION['staff_name'];
//echo $name;
$query3="select name,mobile,email from mentor where name='$name'";
$result3=mysql_query($query3);

while($k=mysql_fetch_row($result3))
{
	$m1=$k[0];
	$m2=$k[1];
	$m3=$k[2];

}




?>



<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

</head>
<body>


	
		
<div align="center"><h2> KLE Dr. M.S SHESHGIRI COLLEGE OF ENGINEERING & TECHNOLOGY ,BELGAUM</h2>
<hr></hr>
<h3>PROGRESS REPORT</h3></br>
<h3>Department Of MCA</h3></br></div>
<div id="login" class="story">
<form name="" action="">
		<table>
				<tr>
					<td>Name Of the Student:<b><?php echo $z2;?></b></td>
					
					
				</tr>	
				<tr>					
					<td>USN:<b><?php echo $z1;?></b></td>
					
				</tr>	
		</table></br>
			<p>
				Dear Parent/Guardian,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am sending here with the progress report of your ward in the various subjects during the semester as follows.
			</p></br>
		<table align="left" border="1"s width="50%" >
			<tr>
				<th  rowspan="2"><label>SI No.</label>
				</th>
				<th  rowspan="2"><label>Sub.Code</label>
				</th>
				<th  rowspan="2"><label>Subjects</label>
				</th>
				<th  colspan="2"><label>I Internal Assessment</label>
				</th>
				<th  rowspan="2"><label>Attendance[%] as on </br><?php echo date("d-m-Y");?></label>
				</th>
				<th  rowspan="2"><label>Contact Details of MENTOR</label>
				</th>
			</tr>
			<tr>
				<th  ><label>Max.<br>Marks</label>
				</th>
				<th  ><label>Marks Obtained</label>
				</th>
			</tr>
			</tr>
				<th ><label>1.</label>
				</th>
				<th width="100" >10mca11					
				</th>
				<th  >
					Problem Solving Using C 					
				</th>
				<th ><label>50</label>
				</th>
				<th  >
					<?php echo $a1;   ?>
				</th>
				<th  >
					<?php echo $a6;   ?>
				</th>
				<th rowspan="5" >				
					<?php 
						echo $m1;
						echo '<br>';
						echo $m2;
						echo '<br>';
						echo $m3;
						echo '<br>';					
					?>
				</th>
			</tr>
			</tr>
				<th ><label>2.</label>
				</th>
				<th  >
					10mca12					
				</th>
				<th  >
					Discrete Mathematics					
				</th>
				<th ><label>50</label>
				</th>
				<th  >
					<?php echo $a2;   ?>
				</th>
				<th  >
					<?php echo $a7;   ?>
				</th>
			</tr>
			</tr>
				<th ><label>
					3.</label>
				</th>
				<th  >
					10mca13					
				</th>
				<th  >
					Fundamentals of Computer Organization					
				</th>
				<th ><label>50</label>
				</th>
				<th  >
					<?php echo $a3;   ?>
				</th>
				<th  >
					<?php echo $a8;   ?>
				</th>
			</tr>
			</tr>
				<th ><label>4.</label>
				</th>
				<th  >
					10mca14					
				</th>
				<th  >
					Introduction to unix
					
				</th>
				<th ><label>50</label>
				</th>
				<th  >
					<?php echo $a4;   ?>
				</th>
				<th  >
					<?php echo $a9;   ?>
				</th>
			</tr>
			</tr>
				<th ><label>5.</label>
				</th>
				<th  >
					10mca15					
				</th>
				<th  >
					Professional Communication & ethics					
				</th>
				<th ><label>50</label>
				</th>
				<th  >
					<?php echo $a5;   ?>
				</th>
				<th  >
					<?php echo $a10;   ?>
				</th>
			</tr>
			<tr>
				<th  colspan="2"><label>
					Remarks by mentor:</label>
				</th>
				<th   colspan="5">
					<?php echo $a11;   ?>					
				</th>
			</tr>
		</th>
		</table>			
		<!-- <a href="dpdf.php"><input id="report" type="button" name="report" value="send" /></a>
		<a href="mail.php"><input id="report1" type="button" name="report1" value="mail" /></a>		 -->

				
				
				
			
			
			
		
		
	

<div>

<pre>




















<pre>



</body>
</html>
