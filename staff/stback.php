<?php 

include 'staff_session.php';
$usn=$_SESSION['s_usn'];


include 'connection.php';

$query="select * from study_details where usn='$usn'";
$result=mysql_query($query);

while($i=mysql_fetch_row($result))
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
	$a12=$i[12];
	$a13=$i[13];
	$a14=$i[14];
	
	
	
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
			<li><a href="stlogin.php" title="">Staff Panel</a></li>
			<li><a href="end_session.php" title="">Logout</a></li>
		</ul>
	</div>
	
</div>
<div id="content">
	<div id="sidebar1">
		<div id="login" class="boxed">
			<h2 class="title">Student Details</h2>
			<div class="content">
				<div id="smenu">
				<ul>
					<li><a href="stlogin1.php" title="">Personal Details</a></li>
					<li class="active"><a href="#" title="">Background Details</a></li>
					<li><a href="stacademic.php" title="">Academic Records</a></li>
					
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Background Details</h2>
			<div id="main" class="story">
			<pre>
			
			
			
			</pre>
				<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
	
	<tr>
		<th scope="col"><label>
			<div align="center">Particulars</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">School/College</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">classe/std.</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">Year</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">Percentage</div></label>
		</th>
	</tr>
	
	<tr>
		<th scope="col"><label>
			<div align="left">SSLC:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a1;?>
			</div>
		</th>
		<th scope="col"><label>
			<div align="left">X std:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a2;?>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a3;?>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col" rowspan="3"><label>
			<div align="left">PU/Diploma:</div></label>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><?php echo $a4;?>
			</div>
		</th>
		<th scope="col"><label>
			<div align="left">Year I:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a5;?>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a8;?>
			</div>
		</th>
	</tr>
	<tr>	
		<th scope="col"><label>
			<div align="left">Year II:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a6;?>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a9;?>
			</div>
		</th>	
	</tr>
	 <tr>	
		<th scope="col"><label>
			<div align="left">Year III:</div></label>
		</th>
		<th width="364" scope="col"><?php echo $a7;?>
			<div align="center">
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><?php echo $a10;?>
			</div>
		</th>	
	</tr>
	
	<tr>
		<th scope="col" rowspan="3"><label>
			<div align="left">Degree:</div></label>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><?php echo $a11;?>
			</div>
		</th>
		<th scope="col" rowspan="3"><label>
			<div align="left"><?php echo $a12;?></div></label>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><?php echo $a13;?>
			</div>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><?php echo $a14;?>
			</div>
		</th>
	</tr>
	
	
</table>

			</div>
			<div class="meta">
				
			</div>
		</div>
		
	</div>
</div>
<div>

<pre>




































</pre>

</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2012-13 E-reprot. All Rights Reserved. Designed by <a href="http://www.klescet.ac.in/">KLESCET</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
