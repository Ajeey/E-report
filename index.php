<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="index.js">
</script>
</head>
<body>
<div id="header">
	<div id="logo">
		&nbsp;
		<a href=""><img src="logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>Student Mentoring System</span></h2>
	</div>
	<div id="menu">
		<ul>
			<li class="active"><a href="#" title="">Homepage</a></li>
			<li><a href="staff/staff.php" title="">Staff Login</a></li>
			<li><a href="admin/admin.php" title="">Admin Login</a></li>
			<li><a href="about us/abt.php" title="">About Us</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="sidebar">
		<div id="login" class="boxed">
			<h2 class="title">Student Login</h2>
			<div class="content">
				<form id="form1" method="post" action="student/student_login_process.php">
					<fieldset>   <!-- for grouping related elements-->
					<legend>Sign-In</legend>  <!-- defines caption for fieldset-->
					<label for="inputtext1">USN:</label>
					<input id="inputtext1" type="text" name="inputtext1" value="Enter Usn Here" onFocus="clearFieldFirstTime(this);" />
					<label for="inputtext2">Password:</label>
					<input id="inputtext2" type="password" name="inputtext2" value="*********" onFocus="clearFieldFirstTime(this);"/>
					<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Sign In" />&nbsp;&nbsp;&nbsp;
					<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />
					<p><a href="student/forgot_password/forpass.php">Forgot your password</a></p>
					<p><a href="student/register.php">Sign Up</a></p>
					</fieldset>
				</form>
			</div>
		</div>
		<div id="login" class="boxed">
			<h2 class="title">Parent Login</h2>
			<div class="content">
				<form id="form1" method="post" action="parent/login_process.php">
					<fieldset>   <!-- for grouping related elements-->
					<legend>Sign-In</legend>  <!-- defines caption for fieldset-->
					<label for="inputtext2">Email-Id:</label>
					<input id="inputtext2" type="text" name="inputtext2" value="Enter email-id here" onFocus="clearFieldFirstTime(this);" />
					<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Sign In" />&nbsp;&nbsp;&nbsp;
					<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div id="main">
		<div id="welcome" class="post">
			<h2 class="title">KLESCET Master Of Computer Applications</h2>
			<!--<h3 class="date"><span class="month">Mar.</span> <span class="day">8</span><span class="year">, 2007</span></h3>-->
			<div class="story">
				
			<p>&nbsp;</p>
			<p><span class="title"><span class="meta"><img src="css/images/slide.gif" width="440" height="264" alt="" class="alignleft border" /></span></span></p>
			
			<p class="title">&nbsp;</p>

			</div>
			<div class="meta">
				
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
