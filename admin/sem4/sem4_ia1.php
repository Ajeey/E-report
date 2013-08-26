<?php 
include '../admin_session.php';
//echo $_SESSION['usn'];
//echo $_SESSION['sem'];
?>

<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
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
			jQuery("#sem4_ia1").validationEngine();
		});
	</script>
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
			<li><a href="../select.php" title="">Home</a></li>
			<li><a href="../end_session.php" title="">LogOut</a></li>
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
					<li class="active"><a href="#" title="">IA-I</a></li>
					<li><a href="sem4_ia2.php" title="">IA-II</a></li>
					<li><a href="sem4_ia3.php" title="">IA-III</a></li>
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
					<form id="sem4_ia1" class="formular" method="post" action="sem4_ia1_process.php">
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
										<div align="center">Int I</div></label>
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
										<div align="center"><input type="text" size="5" name="10mca41_ia1" id="10mca41_ia1" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca41_atd" id="10mca41_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca42_ia1" id="10mca42_ia1" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca42_atd" id="10mca42_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca43_ia1" id="10mca43_ia1" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca43_atd" id="10mca43_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca44_ia1" id="10mca44_ia1" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca44_atd" id="10mca44_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca451_ia1" id="10mca451_ia1"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca451_atd" id="10mca451_atd" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">5.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA452</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">UNIX system Programming</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca452_ia1" id="10mca452_ia1" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca452_atd" id="10mca452_atd" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">6.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA453</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Multimedia Systems</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca453_ia1" id="10mca453_ia1" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca453_atd" id="10mca453_atd" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">7.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA454</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Pattern Recognition</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca454_ia1" id="10mca454_ia1" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca454_atd" id="10mca454_atd" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">8.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA455</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Principles of User Interface Design</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca455_ia1" id="10mca455_ia1" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca455_atd" id="10mca455_atd" />
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">9.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA456</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Advanced Computer Networks</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca456_ia1" id="10mca456_ia1" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca456_atd" id="10mca456_atd"/>
										</div>
									</th>
							</tr>
						</table>
						
						<pre>
						
						</pre>
						<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Save" />&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />&nbsp;&nbsp;&nbsp;<a href="enter_sem4.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="Cancel" /></a>&nbsp;&nbsp;&nbsp;
						
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
