<?php 

include 'student_session.php';
include 'connection.php';

$usn=$_SESSION['stud_usn'];
//echo $usn;
$query1="select * from father where usn='$usn'";
$result1=mysql_query($query1);

while($i=mysql_fetch_row($result1))
{
	//$a0=$i[0];
	$a1=$i[1];
	$a2=$i[2];
	$a3=$i[3];
	$a4=$i[4];
	$a5=$i[5];
	$a6=$i[6];
	
	//$a10=$i[10];
	
	
}


$query2="select * from mother where usn='$usn'";
$result2=mysql_query($query2);

while($j=mysql_fetch_row($result2))
{
	//$a0=$i[0];
	$z1=$j[1];
	$z2=$j[2];
	$z3=$j[3];
	$z4=$j[4];
	$z5=$j[5];
	$z6=$j[6];

	//$a10=$i[10];


}


?>


<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="index.js">
</script>
</head>
<body>
<div id="header">
	<div id="logo">
		&nbsp;
		<a href=""><img src="../logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>A Student Info System</span></h2>
	</div>
	<div id="menu">
		<ul>
				<li><a href="slogin.php" title="">Student Panel</a></li>
			<li><a href="end_session.php" title="">Logout</a></li>
		</ul>
	</div>
	
</div>
<div id="content">
	<div id="main3">
		<div id="welcome" class="post">
			<h2 class="title">Family Background</h2>
			<div id="login" class="story">
				<pre>
				
				</pre>
			<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
				<tr>
					<th scope="col"><label>
						<div align="center">Particulars</div></label>
					</th>
					<th scope="col"><label>
						<div align="center">Father</div></label>
					</th>
					<th scope="col"><label>
						<div align="center">Mother</div></label>
					</th>
				</tr>
				<tr>
				<th colspan="3">
				<pre></pre>
				
				</th>
				
				</tr>
				<tr>
					<th scope="col"><label>
						<div align="left">Name:</div></label>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $a1;?>
						</div>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $z1;?>
						</div>
					</th>
				</tr>
				<tr>
					<th scope="col"><label>
						<div align="left">Occupation:</div></label>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $a2;?>
						</div>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $z2;?>
						</div>
					</th>
				</tr>
				<tr>
					<th scope="col"><label>
						<div align="left">Income:</div></label>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $a3;?>
						</div>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $z3;?>
						</div>
					</th>
				</tr>
				<tr>
					<th scope="col"><label>
						<div align="left">Qualification:</div></label>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $a4;?>
						</div>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $z4;?>
						</div>
					</th>
				</tr>
				<tr>
					<th scope="col"><label>
						<div align="left">Mobile No:</div></label>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $a5;?>
						</div>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $z5;?>
						</div>
					</th>
				</tr>
				<tr>
					<th scope="col"><label>
						<div align="left">EMail ID:</div></label>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $a6;?>
						</div>
					</th>
					<th width="364" scope="col">
						<div align="center"><?php echo $z6;?>
						</div>
					</th>
				</tr>
			</table>
			<pre>
			
			
			</pre>	
				<form id="form3" method="post" action="#">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				<a href="slogin.php"><input id="inputsubmit1" type="button" value="  Back  "/></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="finfo_edit.php"><input id="inputsubmit1" type="button" value="  Edit  "/></a>
				</form>
			</div>
			
		</div>
		
	</div>
</div>
<div>

<pre>




















<pre>

</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2012-13 E-reprot. All Rights Reserved. Designed by <a href="http://www.klescet.ac.in/">KLESCET</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
