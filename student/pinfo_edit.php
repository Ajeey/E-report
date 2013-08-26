

<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
	<link href="../css/default.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="../css/template.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript">
	</script>
	<script src="../js/jquery-1.6.min.js" type="text/javascript">
	</script>
	<script src="../js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#formID").validationEngine();
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
			<li><a href="slogin.php" title="">Student Panel</a></li>
			<li><a href="end_session.php" title="">Logout</a></li>
		</ul>
	</div>
	
</div>
<div id="login" align="center">
<form id="formID" class="formular" method="post" action="pinfo_success.php">
<pre>

</pre>
<h2><font size="5" color="#4c84f7">Re-enter Personal Information Details</font></h2>
<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
	
	
	<tr>
		<th scope="col"> <label> 
			<div align="left">Full Name:</div> </label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="text" name="ffname" id="fname" class="validate[required] text-input"/>
			<font color="#FF0033" size="1" face="Arial">(Only characters are allowed)</font><font size="2"><font color="#FF0033" face="Arial"></font></p>
		</div></th>
	</tr>
	<tr>
		<th scope="col"> <label> 
			<div align="left">Mentor Name:</div> </label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><?php 
					include 'connection.php';
					
					$query="select name from mentor";
					$result1=mysql_query($query);
					
					
					
						

					$dropdown = "<select name='mentor_name' id='login'>";
					while($row = mysql_fetch_assoc($result1)) 
					{
						$dropdown .= "\r\n<option value='{$row['name']}'>{$row['name']}</option>";
					}
					$dropdown .= "\r\n</select>";
					echo $dropdown;
					
					?></p>
		</div></th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Date Of Birth:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="date"  name="date" id="date" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Gender(M/F):</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="text"  name="gender" id="gender" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Mother Tongue:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="text"  name="mtongue" id="mtongue" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Languages Known:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="lknown" id="lknown" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Present Address:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
			<textarea name="paddr" id="paddr" cols="30" rows="3" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Permanent Address:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="p1addr" id="p1addr" cols="30" rows="3" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Email ID:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="email"  name="email" id="email" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	
</table>
<pre>


</pre>


<pre>


</pre>
          <input id="inputsubmit1" type="submit" name="inputsubmit1" value="Submit" />&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />&nbsp;&nbsp;&nbsp;<a href="../index.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="Cancel" /></a>&nbsp;&nbsp;&nbsp;
</div>
</form>
<pre>

</pre>
<div id="footer">
	<p id="legal">Copyright &copy; 2012-13 E-reprot. All Rights Reserved. Designed by <a href="http://www.klescet.ac.in/">KLESCET</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
