<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../index.js">
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
			<li><a href="plogin.php" title="">Home</a></li>
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
					<li><a href="plogin.php" title="">Personal Details</a></li>
					<li><a href="pback.php" title="">Background Details</a></li>
					<li class="active"><a href="#" title="">Academic Records</a></li>
					<li><a href="premarks.php" title="">Mentor Remarks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Academic Records</h2>
			<div id="login" class="story">
				<form id="form3" method="post" action="#">
				<h2>Select The Semester:</h2>
				<select name="sems" size="1">
					<option value="1">Select The Semester:</option>
					<option value="2">1</option>
					<option value="3">2</option>
					<option value="4">3</option>
					<option value="5">4</option>
					<option value="6">5</option>
					<option value="7">6</option>
				</select>
				<a href="psemdata.php"><input id="inputsubmit1" type="button" value="Next"/></a>
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
