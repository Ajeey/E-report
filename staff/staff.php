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
			<li ><a href="../index.php" title="">Homepage</a></li>
			<li class="active"><a href="#" title="">Staff Login</a></li>
			<li><a href="../admin/admin.php" title="">Admin Login</a></li>
			<li><a href="../about us/abt.php" title="">About Us</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="sidebar">
		<div id="login" class="boxed">
			<h2 class="title">Staff Login</h2>
			<div class="content">
				<form id="form1" method="post" action="staff_login_process.php">
					<fieldset><!-- for grouping related elements-->
					<legend>Sign-In</legend> <!-- defines caption for fieldset-->
					<label for="inputtext1">Staff ID:</label>
					<?php 
					include 'connection.php';
					
					$query="select name from mentor";
					$result1=mysql_query($query);
					
					
					
						

					$dropdown = "<select name='inputtext1' width='700px' >";
					while($row = mysql_fetch_assoc($result1)) 
					{
						$dropdown .= "\r\n<option value='{$row['name']}'>{$row['name']}</option>";
					}
					$dropdown .= "\r\n</select>";
					echo $dropdown;
					
					?>
					<!--  <input id="inputtext1" type="text" name="inputtext1" value="Enter Staff ID Here" onFocus="clearFieldFirstTime(this);" />-->
					<label for="inputtext2">Password:</label>
					<input id="inputtext2" type="password" name="inputtext2" value="*********" onFocus="clearFieldFirstTime(this);"/>
					<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Sign In" />&nbsp;&nbsp;&nbsp;
					<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />
					<p><a href="#">Forgot your password?</a></p>
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
			<p><span class="title"><span class="meta"><img src="../css/images/slide.gif" width="440" height="264" alt="" class="alignleft border" /></span></span></p>
			
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
