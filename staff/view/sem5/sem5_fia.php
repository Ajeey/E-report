<?php 
include '../../staff_session.php';
include '../../connection.php';

$usn=$_SESSION['s_usn'];
//echo $_SESSION['v_sem'];

$query="select * from sem5_fia where usn='$usn'";
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
	$a14=$i[14];
	$a15=$i[15];
	$a16=$i[16];
	$a17=$i[17];
	$a18=$i[18];
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
			jQuery("#sem5_fia").validationEngine();
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
					<li><a href="sem5_ia1.php" title="">IA-I</a></li>
					<li><a href="sem5_ia2.php" title="">IA-II</a></li>
					<li><a href="sem5_ia3.php" title="">IA-III</a></li>
					<li class="active"><a href="#" title="">IA-Final Avg</a></li>
					<li><a href="sem5_ee.php" title="">Ext.Exam Marks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Examwise Marks</h2>
			<div id="login" align="center" class="story">
					<form id="sem5_fia" class="formular" method="post" action="sem5_fia_process.php">
						<h2><font size="5" color="#4c84f7">Semester V:</font></h2>
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
							<tr>
									<th scope="col" rowspan="2"><label>
										<div align="center">SI No.</div></label>
									</th>
									<th scope="col" rowspan="2"><label>
										<div align="center">Subject Code</div></label>
									</th>
									<th scope="col" rowspan="2"><label>
										<div align="center">Subjects</div></label>
									</th>
									<th scope="col"><label>
										<div align="center">Marks Obtained</div></label>
									</th>
									
							</tr>
							<tr>
									<th scope="col" ><label>
										<div align="center">IA-Final Avg</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">1.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA51</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Object-Oriented Modeling and Design Patterns</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca51_fia" id="10mca51_fia" disabled="disabled" value="<?php echo $a1?>"/>
										</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">2.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA52</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">System Simulation and Modeling</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca52_fia" id="10mca52_fia" disabled="disabled" value="<?php echo $a2?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">3.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA53</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Topics in Enterprise Architectures -II</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca53_fia" id="10mca53_fia" disabled="disabled" value="<?php echo $a3?>"/>
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
										<div align="left">4.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA541</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Information Retrieval</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca541_fia" id="10mca541_fia" disabled="disabled" value="<?php echo $a4?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">5.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA542</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Data Warehousing & Data Mining</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca542_fia" id="10mca542_fia" disabled="disabled" value="<?php echo $a5?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">6.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA543</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Supply Chain Management</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca543_fia" id="10mca543_fia" disabled="disabled" value="<?php echo $a6?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">7.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA544</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Advanced Topics in DBMS</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca544_fia" id="10mca544_fia" disabled="disabled" value="<?php echo $a7?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">8.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA545</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Graph Theory & Applications</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca545_fia" id="10mca545_fia" disabled="disabled" value="<?php echo $a8?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">9.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA546</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Software Architectures</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca546_fia" id="10mca546_fia" disabled="disabled" value="<?php echo $a9?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th width="364" scope="col" colspan="5">
									<label>
										<div align="center">Elective-II</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">10.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA551</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Information & Network Security</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca551_fia" id="10mca551_fia" disabled="disabled" value="<?php echo $a10?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">11.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA552</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">UNIX system Programming</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca552_fia" id="10mca552_fia" disabled="disabled" value="<?php echo $a11?>"/>
									</div>
									</th>
								
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">12.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA553</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Software Testing</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca553_fia" id="10mca553_fia" disabled="disabled" value="<?php echo $a12?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">13.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA554</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Services Oriented Architecture</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca554_fia" id="10mca554_fia" disabled="disabled" value="<?php echo $a13?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">14.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA555</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Wireless Networks & Mobile Computing</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca555_fia" id="10mca555_fia" disabled="disabled" value="<?php echo $a14?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">15.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA556</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Storage Area Networks</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca556_fia" id="10mca556_fia" disabled="disabled" value="<?php echo $a15?>"/>
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
										<div align="left">16.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA56</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Software Design Laboratory</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca56_fia" id="10mca56_fia"disabled="disabled" value="<?php echo $a16?>"/>
									</div>
									</th>
									
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">17.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA57</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">.Net Laboratory</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca57_fia" id="10mca57_fia"disabled="disabled" value="<?php echo $a17?>"/>
									</div>
									</th>
							</tr>
							<tr>
									<th scope="col"><label>
										<div align="left">18.</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">10MCA58</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Mini Project</div></label>
									</th>
									<th scope="col">
										<div align="center"><input type="text" size="5" name="10mca58_fia" id="10mca58_fia"disabled="disabled" value="<?php echo $a18?>"/>
									</div>
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
