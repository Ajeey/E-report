<?php 
include '../../student_session.php';
include '../../connection.php';

$usn=$_SESSION['stud_usn'];
//echo $_SESSION['v_sem'];

$query="select * from sem1_ee where usn='$usn'";
$result=mysql_query($query);
while ($i=mysql_fetch_row($result))
{
	$a1=$i[1];
	$a2=$i[2];
	$a3=$i[3];
	$a4=$i[4];
	$a5=$i[5];
	$a6=$i[6];
	$a7=$i[7];
	$a8=$i[8];
}

$query1="select * from sem1_pf where usn='$usn'";
$result1=mysql_query($query1);
while ($j=mysql_fetch_row($result1))
{
	$p1=$j[1];
	$p2=$j[2];
	$p3=$j[3];
	$p4=$j[4];
	$p5=$j[5];
	$p6=$j[6];
	$p7=$j[7];
	$p8=$j[8];
}

$query2="select * from sem1_remarks where usn='$usn' ";
$result2=mysql_query($query2);
while ($m=mysql_fetch_row($result2))
{
	$r1=$m[1];
	$r2=$m[2];
}

?>
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="../../../css/default.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="../../css/template.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript">
	</script>
	<script src="../../js/jquery-1.6.min.js" type="text/javascript">
	</script>
	<script src="../../js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="../../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#sem1_ee").validationEngine();
		});
	</script>
</head>
<body>
<div id="header">
	<div id="logo">
		&nbsp;
		<a href=""><img src="../../../logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>A Student Info System</span></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="../../slogin.php" title="">Student Panel</a></li>
			
			<li><a href="../../end_session.php" title="">LogOut</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="sidebar1">
		<div id="login" class="boxed">
			<h2 class="title">Student Academics</h2>
			<div class="content">
				<div id="smenu">
				<ul>
					<li><a href="sem1_ia1.php" title="">IA-I</a></li>
					<li><a href="sem1_ia2.php" title="">IA-II</a></li>
					<li><a href="sem1_ia3.php" title="">IA-III</a></li>
					<li ><a href="sem1_fia.php" title="">IA-Final Avg</a></li>
					<li class="active"><a href="#" title="">Ext.Exam Marks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Examwise Marks</h2>
			<div id="login" align="center" class="story">
					<form id="sem1_ee" class="formular" method="post" action="sem1_ee_process.php">
						<h2><font size="5" color="#4c84f7">Semester I:</font></h2>
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
							<tr>
									<th scope="col" ><label>
										<div align="center">SI No.</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Subject Code</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Subjects</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Ext Exam Marks</div></label>
									</th>
									<th scope="col"><label>
										<div align="center">Pass/Fail</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Exam/Class Obtained</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">1.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA11</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Problem Solving Using C</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $a1;?>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p1;?>
										</div>
									</th>
									<th width="364" scope="col" rowspan="8"><?php echo $r1;?>
										
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">2.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA12</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Discrete Mathematics</div></label>
									</th>
									<th scope="col">
										<div align="center"><?php echo $a2;?>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p2;?>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">3.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA13</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Fundamentals of Computer Organization</div></label>
									</th>
									<th scope="col">
										<div align="center"><?php echo $a3;?>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p3;?>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">4.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA14</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Introduction to unix</div></label>
									</th>
									<th scope="col">
										<div align="center"><?php echo $a4;?>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p4;?>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">5.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA15</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Professional Communication & ethics</div></label>
									</th>
									<th scope="col">
										<div align="center"><?php echo $a5;?>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p5;?>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">6.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA16</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">C Programming Laboratory</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $a6;?>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p6;?>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">7.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA17</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Unix Laboratory</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $a7;?>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p7;?>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">8.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA18</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">IT & digital electronics Laboratory</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $a8;?>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><?php echo $p8;?>
										</div>
									</th>
							</tr>
						</table>
						<pre>


						</pre>
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
						<tr>
								<th scope="col"><label>
									<div align="left">Goals/Achievements During Semester:</div></label>
								</th>
						</tr>
						<tr>
								<th width="364" scope="col">
									<div align="left"><?php echo $r2;?>
									</div>
								</th>
						</tr>
						</table>
						<pre>
						
						</pre>
					
					</form>
					
			</div>
		</div>
		
	</div>
</div>

<div id="footer">
	<p id="legal">Copyright &copy; 2012-13 E-reprot. All Rights Reserved. Designed by <a href="http://www.klescet.ac.in/">KLESCET</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
