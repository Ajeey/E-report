<?php 
include '../../staff_session.php';
include '../../connection.php';

$usn=$_SESSION['s_usn'];
//echo $_SESSION['v_sem'];

$query="select * from sem4_ee where usn='$usn'";
$result=mysql_query($query);

while ($i=mysql_fetch_row($result))
{
	$a1=$i[1];
	$a2=$i[2];
	$a3=$i[3];
	$a4=$i[4];
	$a5=$i[5];
	$a6=$i[6];
	$a7=$i[7];
	$a8=$i[8];
	$a9=$i[9];
	$a10=$i[10];
	$a11=$i[11];
	$a12=$i[12];
	$a13=$i[13];
}
$query1="select * from sem4_pf where usn='$usn'";
$result1=mysql_query($query1);

while ($j=mysql_fetch_row($result1))
{
	$p1=$j[1];
	$p2=$j[2];
	$p3=$j[3];
	$p4=$j[4];
	$p5=$j[5];
	$p6=$j[6];
	$p7=$j[7];
	$p8=$j[8];
	$p9=$j[9];
	$p10=$j[10];
	$p11=$j[11];
	$p12=$j[12];
	$p13=$j[13];
}
$query2="select * from sem4_remarks where usn='$usn'";
$result2=mysql_query($query2);
while ($m=mysql_fetch_row($result2))
{
	$r1=$m[1];
	$r2=$m[2];
}
?>
<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../../../css/default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../../css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="../../../css/template.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript">
	</script>
	<script src="../../../js/jquery-1.6.min.js" type="text/javascript">
	</script>
	<script src="../../../js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="../../../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#sem4_ee").validationEngine();
		});
	</script>
<script type="text/javascript" src="index.js">
</script>
</head>
<body>
<div id="header">
	<div id="logo">
		&nbsp;
		<a href=""><img src="../../../logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>A Student Info System</span></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="../stlogin.php" title="">Staff Panel</a></li>
			<li><a href="../../end_session.php" title="">LogOut</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div id="sidebar1">
		<div id="login" class="boxed">
			<h2 class="title">Student Academics</h2>
			<div class="content">
				<div id="smenu">
				<ul>
					<li><a href="sem4_ia1.php" title="">IA-I</a></li>
					<li><a href="sem4_ia2.php" title="">IA-II</a></li>
					<li><a href="sem4_ia3.php" title="">IA-III</a></li>
					<li ><a href="sem4_fia.php" title="">IA-Final Avg</a></li>
					<li class="active"><a href="#" title="">Ext.Exam Marks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Examwise Marks</h2>
			<div id="login" align="center" class="story">
					<form id="sem4_ee" class="formular" method="post" action="sem4_ee_process.php">
						<h2><font size="5" color="#4c84f7">Semester IV:</font></h2>
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
							<tr>
									<th scope="col" ><label>
										<div align="center">SI No.</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Subject Code</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Subjects</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Ext Exam Marks</div></label>
									</th>
									<th scope="col"><label>
										<div align="center">Pass/Fail</div></label>
									</th>
									<th scope="col" ><label>
										<div align="center">Exam/Class Obtained</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">1.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA41</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Topics in Enterprise Architectures -I</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca41_ee" id="10mca41_ee" disabled="disabled" value="<?php echo $a1?>"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca41_pf" id="10mca41_pf" disabled="disabled" value="<?php echo $p1?>"/>
										</div>
									</th>
									<th width="364" scope="col" rowspan="15"><?php echo $r1?>
										<!--<div align="center"><textarea name="class_obtained" id="class_obtained" cols="10" rows="15" class="validate[required] text-input" data-prompt-position="topLeft:-50"></textarea>
										</div>-->
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">2.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA42</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Software Engineering</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca42_ee" id="10mca42_ee" disabled="disabled" value="<?php echo $a2?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca42_pf" id="10mca42_pf" disabled="disabled" value="<?php echo $p2?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">3.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA43</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Web Programming</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca43_ee" id="10mca43_ee" disabled="disabled" value="<?php echo $a3?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca43_pf" id="10mca43_pf" disabled="disabled" value="<?php echo $p3?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">4.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA44</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Design and Analysis of Algorithms</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca44_ee" id="10mca44_ee"disabled="disabled" value="<?php echo $a4?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca44_pf" id="10mca44_pf"disabled="disabled" value="<?php echo $p4?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th width="364" scope="col" colspan="5">
									<label>
										<div align="center">Elective-I</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">5.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA451</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Computer Graphics and Visualization</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca451_ee" id="10mca451_ee"disabled="disabled" value="<?php echo $a5?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca451_pf" id="10mca451_pf"disabled="disabled" value="<?php echo $p5?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">6.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA452</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">UNIX system Programming</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca452_ee" id="10mca452_ee"disabled="disabled" value="<?php echo $a6?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca452_pf" id="10mca452_pf"disabled="disabled" value="<?php echo $p6?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">7.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA453</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Multimedia Systems</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca453_ee" id="10mca453_ee"disabled="disabled" value="<?php echo $a7?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca453_pf" id="10mca453_pf"disabled="disabled" value="<?php echo $p7?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">8.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA454</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Pattern Recognition</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca454_ee" id="10mca454_ee"disabled="disabled" value="<?php echo $a8?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca454_pf" id="10mca454_pf"disabled="disabled" value="<?php echo $p8?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">9.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA455</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Principles of User Interface Design</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca455_ee" id="10mca455_ee"disabled="disabled" value="<?php echo $a9?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca455_pf" id="10mca455_pf"disabled="disabled" value="<?php echo $p9?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">10.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA456</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Advanced Computer Networks</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca456_ee" id="10mca456_ee"disabled="disabled" value="<?php echo $a10?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca456_pf" id="10mca456_pf"disabled="disabled" value="<?php echo $p10?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th width="364" scope="col" colspan="5">
									<label>
										<div align="center">LABORATORY</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">11.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA46</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">J2EE Laboratory</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca46_ee" id="10mca46_ee"disabled="disabled" value="<?php echo $a11?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca46_pf" id="10mca46_pf"disabled="disabled" value="<?php echo $p11?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">12.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA47</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Web programming Laboratory</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca47_ee" id="10mca47_ee"disabled="disabled" value="<?php echo $a12?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca47_pf" id="10mca47_pf"disabled="disabled" value="<?php echo $p12?>"/>
										</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">13.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA48</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Algorithms Laboratory</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca48_ee" id="10mca48_ee"disabled="disabled" value="<?php echo $a13?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca48_pf" id="10mca48_pf"disabled="disabled" value="<?php echo $p13?>"/>
										</div>
									</th>
							</tr>
						</table>
						<pre>


						</pre>
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
						<tr>
								<th scope="col"><label>
									<div align="left">Goals/Achievements During Semester:</div></label>
								</th>
						</tr>
						<tr>
								<th width="364" scope="col"><?php echo $r2?>
									<!--<div align="left">
									<textarea name="goals" id="goals" cols="75" rows="5" class="validate[required] text-input" data-prompt-position="topLeft:-50"></textarea>
									</div>-->
								</th>
						</tr>
						</table>
						<pre>
						
						</pre>
					</form>
					
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
