<?php 
include 'start_session.php';
$usn=$_SESSION['usn'];

//echo $usn;
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
		<a href=""><img src="logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>A Student Info System</span></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="slogin.php" title="">Home</a></li>
			<li><a href="end_session.php" title="">Logout</a></li>
		</ul>
	</div>
	
</div>
<div id="content">
	<div id="main3">
		<div id="welcome" class="post">
			<h2 class="title">Edit Background Details</h2>
			<div id="login" class="story">
				
				
				<?php
					
					include 'connection.php';

					$query="select * from study_details where usn='$usn'";
					$result=mysql_query($query);
					
					while($i=mysql_fetch_array($result))
					{
						
						/*echo $i['usn'];
						echo "<br>";
						echo "<br>";
						
						echo $i['sslc_school'];
						echo "<br>";
						echo "<br>";
						
						echo $i['sslc_year'];
						echo "<br>";
						echo "<br>";
						
						echo $i['sslc_percentage'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_college'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_year1'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_year2'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_year3'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_percentage1'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_percentage2'];
						echo "<br>";
						echo "<br>";
						
						echo $i['pu_percentage3'];
						echo "<br>";
						echo "<br>";
						
						echo $i['degree_college'];
						echo "<br>";
						echo "<br>";
						
						echo $i['degree_name'];
						echo "<br>";
						echo "<br>";
						
						echo $i['degree_year'];
						echo "<br>";
						echo "<br>";
						
						echo $i['degree_percentage'];
						echo "<br>";
						echo "<br>";*/
						
						$s=$i['sslc_year'];
						$p= $i['sslc_percentage'];
						
					}
				
				
				
				
				?>
				<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" />
							<tr>
							<th colspan="5">
							<label><div align="left"><font size="4" color="#4c84f7">Study Details</div></font></label>
							</th>
							</tr>
							
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
							<div align="center"><p><textarea name="schoolname" id="schoolname" cols="30" rows="2"  value="<?php echo $s;?>"></textarea>
							</div>
							</th>
							<th scope="col"><label>
							<div align="left">X std:</div></label>
							</th>
							<th width="364" scope="col">
							<div align="center"><p><input type="text"  name="sslc_year" id="sslc_year"  value="<?php echo $s;?>"/>
							</div>
							</th>
							<th width="364" scope="col">
							<div align="center"><p><input type="text"  name="sslc_per" id="sslc_per"  value="<?php echo $p;?>"/>
							</div>
							</th>
						</tr>
						<tr>
						<th scope="col" rowspan="3"><label>
						<div align="left">PU/Diploma:</div></label>
						</th>
						<th width="364" scope="col" rowspan="3">
						<div align="center"><p><textarea name="collegename" id="collegename" cols="30" rows="2"></textarea>
						</div>
						</th>
						<th scope="col"><label>
						<div align="left">Year I:</div></label>
						</th>
						<th width="364" scope="col">
						<div align="center"><p><input type="text"  name="pu_1year" id="pu_1year"/>
						</div>
						</th>
						<th width="364" scope="col">
						<div align="center"><p><input type="text"  name="pu_1per" id="pu_1per"/>
						</div>
						</th>
						</tr>
						<tr>
						<th scope="col"><label>
						<div align="left">Year II:</div></label>
						</th>
						<th width="364" scope="col">
						<div align="center"><p><input type="text"  name="pu_2year" id="pu_2year"/>
						</div>
						</th>
						<th width="364" scope="col">
						<div align="center"><p><input type="text"  name="pu_2per" id="pu_2per"/>
						</div>
						</th>
						</tr>
						<tr>
						<th scope="col"><label>
						<div align="left">Year III:</div></label>
						</th>
						<th width="364" scope="col">
						<div align="center"><p><input type="text"  name="pu_3year" id="pu_3year"/>
						</div>
						</th>
						<th width="364" scope="col">
						<div align="center"><p><input type="text"  name="pu_3per" id="pu_3per"/>
						</div>
						</th>
						</tr>
						
						<tr>
						<th scope="col" rowspan="3"><label>
						<div align="left">Degree:</div></label>
						</th>
						<th width="364" scope="col" rowspan="3">
						<div align="center"><p><textarea name="degree_college" id="degree_college" cols="30" rows="2"></textarea>
						</div>
						</th>
						<th scope="col" rowspan="3"><label>
						<div align="left">BCA/BSC<input type="text" name="bca" id="bca"/></div></label>
						</th>
						<th width="364" scope="col" rowspan="3">
						<div align="center"><p><input type="text"  name="degree_year" id="degree_year"/>
						</div>
						</th>
						<th width="364" scope="col" rowspan="3">
						<div align="center"><p><input type="text"  name="degree_per" id="degree_per"/>
						</div>
						</th>
						</tr>
						
						
						</table>
				
				
				<form id="form3" method="post" action="#">
				<input id="inputsubmit1" type="submit" value="Save"/>
				<a href="back.php"><input id="inputsubmit1" type="button" value="Cancel"/></a>
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
