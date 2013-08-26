<?php 
include '../../admin_session.php';
include '../../connection.php';

$usn=$_SESSION['v_usn'];
//echo $_SESSION['v_sem'];

$query="select * from sem4_ia3 where usn='$usn'";
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
	$a9=$i[9];
	$a10=$i[10];
	$a11=$i[11];
	$a12=$i[12];
	$a13=$i[13];
	$a14=$i[14];
	$a15=$i[15];
	$a16=$i[16];
	$a17=$i[17];
	$a18=$i[18];
	$a19=$i[19];
	$a20=$i[20];
}

?>
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../../css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../../css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="../../../css/template.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript">
	</script>
	<script src="../../../js/jquery-1.6.min.js" type="text/javascript">
	</script>
	<script src="../../../js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="../../../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#sem4_ia3").validationEngine();
		});
	</script>
<script type="text/javascript" src="index.js">
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
			<li><a href="../select_usn.php" title="">Home</a></li>
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
					<li><a href="sem4_ia1.php" title="">IA-I</a></li>
					<li ><a href="sem4_ia2.php" title="">IA-II</a></li>
					<li class="active"><a href="#" title="">IA-III</a></li>
					<li><a href="sem4_fia.php" title="">IA-Final Avg</a></li>
					<li><a href="sem4_ee.php" title="">Ext.Exam Marks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Examwise Entering Of Marks</h2>
			<div id="login" align="center" class="story">
					<form id="sem4_ia3" class="formular" method="post" action="sem4_ia3_process.php">
						<h2><font size="5" color="#4c84f7">Semester IV:</font></h2>
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
							<tr>
									<th scope="col" rowspan="2"><label>
										<div align="center">SI No.</div></label>
									</th>
									<th scope="col" rowspan="2"><label>
										<div align="center">Subject Code</div></label>
									</th>
									<th scope="col" rowspan="2"><label>
										<div align="center">Subjects</div></label>
									</th>
									<th scope="col"><label>
										<div align="center">Marks Obtained</div></label>
									</th>
									<th scope="col" rowspan="2"><label>
										<div align="center">Attendance(%)</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col" ><label>
										<div align="center">Int III</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">1.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA41</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Topics in Enterprise Architectures -I</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca41_ia3" id="10mca41_ia3" disabled="disabled" value="<?php echo $a1?>"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca41_atd" id="10mca41_atd" disabled="disabled" value="<?php echo $a11?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">2.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA42</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Software Engineering</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca42_ia3" id="10mca42_ia3" disabled="disabled" value="<?php echo $a2?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca42_atd" id="10mca42_atd" disabled="disabled" value="<?php echo $a12?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">3.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA43</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Web Programming</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca43_ia3" id="10mca43_ia3" disabled="disabled" value="<?php echo $a3?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca43_atd" id="10mca43_atd" disabled="disabled" value="<?php echo $a13?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">4.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA44</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Design and Analysis of Algorithms</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca44_ia3" id="10mca44_ia3" disabled="disabled" value="<?php echo $a4?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca44_atd" id="10mca44_atd" disabled="disabled" value="<?php echo $a14?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th width="364" scope="col" colspan="5">
									<label>
										<div align="center">Elective-I</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">5.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA451</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Computer Graphics and Visualization</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca451_ia3" id="10mca451_ia3"disabled="disabled" value="<?php echo $a5?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca451_atd" id="10mca451_atd" disabled="disabled" value="<?php echo $a15?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">6.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA452</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">UNIX system Programming</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca452_ia3" id="10mca452_ia3" disabled="disabled" value="<?php echo $a6?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca452_atd" id="10mca452_atd"disabled="disabled" value="<?php echo $a16?>" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">7.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA453</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Multimedia Systems</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca453_ia3" id="10mca453_ia3" disabled="disabled" value="<?php echo $a7?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca453_atd" id="10mca453_atd"disabled="disabled" value="<?php echo $a17?>" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">8.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA454</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Pattern Recognition</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca454_ia3" id="10mca454_ia3" disabled="disabled" value="<?php echo $a8?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca454_atd" id="10mca454_atd" disabled="disabled" value="<?php echo $a18?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">9.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA455</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Principles of User Interface Design</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca455_ia3" id="10mca455_ia3" disabled="disabled" value="<?php echo $a9?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca455_atd" id="10mca455_atd" disabled="disabled" value="<?php echo $a19?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">10.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA456</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Advanced Computer Networks</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca456_ia3" id="10mca456_ia3" disabled="disabled" value="<?php echo $a10?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca456_atd" id="10mca456_atd"disabled="disabled" value="<?php echo $a20?>"/>
										</div>
									</th>
							</tr>
						</table>
						<pre>
						
						</pre>
					
						<a href="sem4_ia3_edit.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="   Edit   " /></a>&nbsp;&nbsp;&nbsp;
						
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
