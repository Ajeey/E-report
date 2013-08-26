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
			<li ><a href="../index.php" title="">Homepage</a></li>
			<li><a href="../staff/staff.php" title="">Staff Login</a></li>
			<li ><a href="../admin/admin.php" title="">Admin Login</a></li>
			<li><a href="../about us/abt.php" title="">About Us</a></li>
		</ul>
	</div>
	
</div>
<div id="login" align="center">
<form id="formID" class="formular" method="post" action="regsuccessful.php">
<h2><font size="5" color="#4c84f7">REGISTRATION FORM:</font></h2>
<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
	<tr>
		<th colspan="2">
		&nbsp;
		</th>
	</tr>
	<tr> 
	<th colspan="2">
		<label><div align="left"><font size="4" color="#4c84f7">PERSONAL INFORMATION</font></div></label>
	</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">USN:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="text" name="usn" id="usn" class="validate[required,custom[usn]] text-input" />
			<!-- <input value="" class="validate[required,custom[noSpecialCaracters],length[0,10]]" type="text" name="usn" id="usn" />-->
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Password:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="password"  name="password" id="password" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
		<tr>
		<th scope="col"><label>
			<div align="left">Confirm Password:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left"><p><input type="password"  name="cpassword" id="cpassword" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
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
	<tr>
		<th colspan="2">
		&nbsp;
		</th>
	</tr>
</table>
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
<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
	<tr> 
		<th colspan="2">
			<label><div align="left"><font size="4" color="#4c84f7">Special Interest</font></div></label>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Tick Your Places Of Interest:</div></label>
		</th>
		<th>	
			<label><div align="left">Reading:<input type="checkbox" name="reading" value="1"/></label>&nbsp;&nbsp;<label>Sports:<input type="checkbox" name="sports" value="2"/></label>&nbsp;&nbsp;<label>Literary:<input type="checkbox" name="Literary" value="3"/></label>
			<label><div align="left">Dance:<input type="checkbox" name="Dance" value="4"/></label>&nbsp;&nbsp;<label>Music:<input type="checkbox" name="Music" value="5"/></label>&nbsp;&nbsp;<label>Acting:<input type="checkbox" name="Acting" value="6"/></label>
			<label><div align="left">Politics:<input type="checkbox" name="Politics" value="7"/></label>&nbsp;&nbsp;<label>Social Service:<input type="checkbox" name="interest" value="8"/></label>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Hobbies:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="hobb" id="hobb" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Details of Extra/Co-curricular Achievments:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="coo" id="coo" cols="30" rows="2"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Career Guidance Required in which Fields:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="guidance" id="guidance" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
</table>
<pre>


</pre>
<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
	<tr> 
		<th colspan="2">
			<label><div align="left"><font size="4" color="#4c84f7">About ME</font></div></label>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">What am I now:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="now" id="now" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">What I want to be Tommorrow:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="tom" id="tom" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Strengths:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="strength" id="strength" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">Weaknesses:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="weakness" id="weakness" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">According to me, the 3 important Work Ethics are:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="ethics" id="ethics" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="left">According to me SUCCESS is:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="left">
				<textarea name="success" id="success" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
	</tr>
</table>	
<pre>


</pre>
<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
	<tr> 
		<th colspan="5">
			<label><div align="left"><font size="4" color="#4c84f7">Study Details</div></font></label>
		</th>
	</tr>
	<tr>
		<th scope="col"><label>
			<div align="center">Particulars</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">School/College</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">classe/std.</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">Year</div></label>
		</th>
		<th scope="col"><label>
			<div align="center">Percentage</div></label>
		</th>
	</tr>
	
	<tr>
		<th scope="col"><label>
			<div align="left">SSLC:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><textarea name="schoolname" id="schoolname" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
		<th scope="col"><label>
			<div align="left">X std:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="sslc_year" id="sslc_year" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="sslc_per" id="sslc_per" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>
		<th scope="col" rowspan="3"><label>
			<div align="left">PU/Diploma:</div></label>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><p><textarea name="collegename" id="collegename" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
		<th scope="col"><label>
			<div align="left">Year I:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="pu_1year" id="pu_1year" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="pu_1per" id="pu_1per" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	<tr>	
		<th scope="col"><label>
			<div align="left">Year II:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="pu_2year" id="pu_2year" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="pu_2per" id="pu_2per" class="validate[required] text-input"/>
			</div>
		</th>	
	</tr>
	 <tr>	
		<th scope="col"><label>
			<div align="left">Year III:</div></label>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="pu_3year" id="pu_3year" />
			</div>
		</th>
		<th width="364" scope="col">
			<div align="center"><p><input type="text"  name="pu_3per" id="pu_3per" />
			</div>
		</th>	
	</tr>
	
	<tr>
		<th scope="col" rowspan="3"><label>
			<div align="left">Degree:</div></label>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><p><textarea name="degree_college" id="degree_college" cols="30" rows="2" class="validate[required] text-input"></textarea>
			</div>
		</th>
		<th scope="col" rowspan="3"><label>
			<div align="left">BCA/BSC<input type="text" name="bca" id="bca" class="validate[required] text-input"/></div></label>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><p><input type="text"  name="degree_year" id="degree_year" class="validate[required] text-input"/>
			</div>
		</th>
		<th width="364" scope="col" rowspan="3">
			<div align="center"><p><input type="text"  name="degree_per" id="degree_per" class="validate[required] text-input"/>
			</div>
		</th>
	</tr>
	
	
</table>
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
