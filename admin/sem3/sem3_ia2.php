<?php 
include '../admin_session.php';

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
			jQuery("#sem3_ia2").validationEngine();
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
					<li><a href="sem3_ia1.php" title="">IA-I</a></li>
					<li class="active"><a href="#" title="">IA-II</a></li>
					<li><a href="sem3_ia3.php" title="">IA-III</a></li>
					<li><a href="sem3_fia.php" title="">IA-Final Avg</a></li>
					<li><a href="sem3_ee.php" title="">Ext.Exam Marks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Examwise Entering Of Marks</h2>
			<div id="login" align="center" class="story">
					<form id="sem3_ia2" class="formular" method="post" action="sem3_ia2_process.php">
						<h2><font size="5" color="#4c84f7">Semester III:</font></h2>
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
										<div align="center">Int II</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">1.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA31</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Systems Software</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca31_ia2" id="10mca31_ia2" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca31_atd" id="10mca31_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">2.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA32</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Computer Networks</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca32_ia2" id="10mca32_ia2" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca32_atd" id="10mca32_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">3.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA33</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Programming with Java</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca33_ia2" id="10mca33_ia2" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca33_atd" id="10mca33_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">4.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA34</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Database Management Systems</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca34_ia2" id="10mca34_ia2" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca34_atd" id="10mca34_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">5.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA35</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Operating Systems</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca35_ia2" id="10mca35_ia2" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca35_atd" id="10mca35_atd" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
							</tr>
						</table>
						<pre>
						
						</pre>
					
						<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Save" />&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />&nbsp;&nbsp;&nbsp;<a href="enter_sem3.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="Cancel" /></a>&nbsp;&nbsp;&nbsp;
						
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
