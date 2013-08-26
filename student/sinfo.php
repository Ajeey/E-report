<?php 

include 'student_session.php';
include 'connection.php';

$usn=$_SESSION['stud_usn'];
//echo $usn;
$query1="select hobbies,coo,guidance from special_interest where usn='$usn'";
$result1=mysql_query($query1);

while($i=mysql_fetch_row($result1))
{
	$a0=$i[0];
	$a1=$i[1];
	$a2=$i[2];
	
	
	
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
			<h2 class="title">Special Interests</h2>
			<div id="login" class="story">
				<pre>
				
				
				</pre>
				<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
					<tr>
						<th scope="col"><label>
							<div align="left">Hobbies:</div></label>
						</th>
						<th width="364" scope="col">
							<div align="left"><?php echo $a0;?>
								
							</div>
						</th>
					</tr>
					<tr>
						<th scope="col"><label>
							<div align="left">Details of Extra/Co-curricular Achievments:</div></label>
						</th>
						<th width="364" scope="col">
							<div align="left"><?php echo $a1;?>
								
							</div>
						</th>
					</tr>
					<tr>
						<th scope="col"><label>
							<div align="left">Career Guidance Required in which Fields:</div></label>
						</th>
						<th width="364" scope="col">
							<div align="left"><?php echo $a2;?>
								
							</div>
						</th>
					</tr>
</table>
<pre>


</pre>
				
				<form id="form3" method="post" action="#">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="slogin.php"><input id="inputsubmit1" type="button" value="  Back  "/></a>
				</form>
			</div>
			<div class="meta">
				
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
