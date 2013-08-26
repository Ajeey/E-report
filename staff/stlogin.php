




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
			<li class="active"><a href="#" title="">Staff Panel</a></li>
			<li><a href="end_session.php" title="">Logout</a></li>
		</ul>
	</div>
</div>
<div id="content">	
	<div id="main3">
		<div id="welcome" class="post">
			<h2 class="title">List Of Registered Students:</h2>
			<div id="login" class="story">
			<form method="post" action="enter_staff.php">
			<?php 
					include 'connection.php';
					include 'staff_session.php';
					//session_start();
					
					$name=$_SESSION['staff_name'];
					//echo $name;
					$query1="select usn from personal_information
							where mentor_name='$name'
					";
					$result1=mysql_query($query1);
					
					
					
						

					$dropdown = "<select name='staff_usn'>";
					while($row = mysql_fetch_assoc($result1)) 
					{
						$dropdown .= "\r\n<option value='{$row['usn']}'>{$row['usn']}</option>";
					}
					$dropdown .= "\r\n</select>";
					echo $dropdown;
					
					?>
					
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

