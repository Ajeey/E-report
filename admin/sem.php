<?php 
session_start();
if($_SESSION['admin']!=2)
{
	header('Location:admin.php');
}

//if (isset($_POST['users']))
//{
$_SESSION['usn']=$_POST['users'];

echo $_SESSION['usn'];
//}
//else
//	echo "ERRor..!";
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
	
</div>
<div id="content">
	<div id="sidebar">
		<div id="login" class="boxed">
			<h2 class="title">ADMIN</h2>
			<div class="content">
				<form id="form1" method="post" action="#">
					<fieldset>
					<legend>sem</legend> <!-- for grouping related elements-->
				
					<!-- <a href="mdata1.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="Next"/></a>&nbsp;&nbsp;&nbsp; -->
					<a href="select.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="  Back  "/></a>&nbsp;&nbsp;&nbsp;
					<a href="end_session.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="LogOut" /></a>&nbsp;&nbsp;&nbsp;
					</fieldset>
				</form>
			</div>
		</div>
		
	</div>
	<div id="main">
		<div id="welcome" class="post" >
			<h2 class="title">Select Semester Of the Student:</h2>
			<div id="login" class="story">
			<form name="semform" method="post" action="call_form.php">
				
				<h2>SEMESTER</h2>
				<select name="sems" size="1">
					<option value="0">Select The Semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" type="submit" name="inputsubmit1" value="  Next  "/>
			</form>
			</div>
		</div>
		
	</div>
</div>
<pre>






























</pre>
<div id="footer">
	<p id="legal">Copyright &copy; 2012-13 E-reprot. All Rights Reserved. Designed by <a href="http://www.klescet.ac.in/">KLESCET</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>

