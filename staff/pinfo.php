<?php 

include 'staff_session.php';
include 'connection.php';

$usn=$_SESSION['s_usn'];
//echo $usn;
$query1="select usn,name,mentor_name,dob,gender,mother_tongue,languages_known,present_address,permanent_address,email_id
 from personal_information where usn='$usn'";
$result1=mysql_query($query1);

while($i=mysql_fetch_row($result1))
{
	$a0=$i[0];
	$a1=$i[1];
	$a2=$i[2];
	$a3=$i[3];
	$a4=$i[4];
	$a5=$i[5];
	$a6=$i[6];
	$a7=$i[7];
	$a8=$i[8];
	$a9=$i[9];
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
			<li><a href="stlogin.php" title="">Home</a></li>
			<li><a href="end_session.php" title="">Logout</a></li>
		</ul>
	</div>
	
</div>
<div id="content">
	<div id="main3">
		<div id="welcome" class="post">
			<h2 class="title">Personal Details</h2>
			<div id="login" class="story">
				<pre>
				
				
				
				</pre>
				<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="5">
	
	<tr>
		<th scope="col"><label>
			<div align="left">USN:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a0;?>
			</div>
		</th>
	</tr>
	
		
	<tr>
		<th scope="col"> <label> 
			<div align="left">Full Name:</div> </label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a1;?>
		</div></th>
	</tr>
	<tr>
		<th scope="col"> <label> 
			<div align="left">Mentor Name:</div> </label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p></p><?php echo $a2;?>
		</div></th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Date Of Birth:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a3;?>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Gender(M/F):</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a4;?>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Mother Tongue:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a5;?>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Languages Known:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a6;?>				
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Present Address:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a7;?>			
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Permanent Address:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a8;?>				
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Email ID:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><?php echo $a9;?>
			</div>
		</th>
	</tr>
	</table>
	<pre>
	
	
	</pre>
	
				<form id="form3" method="post" action="#">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="stlogin1.php"><input id="inputsubmit1" type="button" value="  Back  "/></a>
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
