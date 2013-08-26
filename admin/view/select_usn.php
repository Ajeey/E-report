<?php 

include '../admin_session.php';

?>
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../css/default.css" rel="stylesheet" type="text/css" />
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
			<li><a href="../select.php" >Select</a></li>
			
			<li class="active"><a href="#">View</a></li>
			<li><a href="../remove/select_usn.php">Remove</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="sidebar">
		<div id="login" class="boxed">
			<h2 class="title">ADMIN</h2>
			<div class="content">
				<form id="form1" method="post" action="#">
					<fieldset>
					<legend>student</legend> <!-- for grouping related elements-->
					
					<a href="../end_session.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="  Logout  " /></a>&nbsp;&nbsp;&nbsp;
					</fieldset>
				</form>
			</div>
		</div>
		
	</div>
	<div id="main">
		<div id="welcome" class="post">
			<h2 class="title">Select the Student:</h2>
			<div id="login" class="story">
			<form name="" action="select_sem.php" method="post">
				
				<h2>USN</h2>
				<?php 
					include '../connection.php';
					
					$query="select usn from personal_information";
					$result1=mysql_query($query);
					
					
					
						

					$dropdown = "<select name='v_user'>";
					while($row = mysql_fetch_assoc($result1)) 
					{
						$dropdown .= "\r\n<option value='{$row['usn']}'>{$row['usn']}</option>";
					}
					$dropdown .= "\r\n</select>";
					echo $dropdown;
					
					?>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input id="inputsubmit1" type="submit" name="inputsubmit1" value="  Next  "/>&nbsp;&nbsp;&nbsp;
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

