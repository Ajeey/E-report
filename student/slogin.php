<?php 
include 'student_session.php';

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
			<li class="active"><a href="slogin.php" title="">Home</a></li>
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
					<li class="active"><a href="#" title="">Personal Details</a></li>
					<li><a href="back.php" title="">Background Details</a></li>
					<li><a href="academic.php" title="">Academic Records</a></li>
					
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Personal Details</h2>
			<div id="login" class="story">
					<form id="form3" method="post" action="pinfo_choice.php">
					<h2>Select Type of Information:</h2>
					<select name="info" size="1">
						<option value="0">Select Type of Information:</option>
						<option value="1">Personal Information</option>
						<option value="2">Family Background</option>
						<option value="3">Special Intrests</option>
						<option value="4">About Me</option>
					</select>
					&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" name="inputsubmit1" type="submit" value="  Next  "/></a>
					
					<?php 
					
						echo '<br>';
						echo "Welcome ". $_SESSION['stud_usn']; 
					
					?>
					
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
