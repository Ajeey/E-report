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
<form id="formID" class="formular" method="post" action="finfo_success.php">
<h2><font size="5" color="#4c84f7">Re-enter Details</font></h2>

<pre>


</pre>
<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
	<tr> 
		<th colspan="3">
			<label><div align="left"><font size="4" color="#4c84f7">Family Background</font></div></label>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="center">Particulars</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">Father</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">Mother</div></label>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Name:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="fname" id="fname" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="mname" id="mname" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Occupation:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="foccup" id="foccup" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="moccup" id="moccup" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Income:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="fin" id="fin"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="min" id="min"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Qualification:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="fqual" id="fqual"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="mqual" id="mqual"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Mobile No:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="fmob" id="fmob" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="mmob" id="mmob" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">EMail ID:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="email"  name="femail" id="femail" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="email"  name="memail" id="memail" class="validate[required] text-input"/>
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
