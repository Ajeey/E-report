<?php 
include '../../staff_session.php';
include '../../connection.php';

$usn=$_SESSION['s_usn'];
//echo $_SESSION['v_sem'];

$query="select * from sem5_ia2 where usn='$usn'";
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
	$a19=$i[19];
	$a20=$i[20];
	$a21=$i[21];
	$a22=$i[22];
	$a23=$i[23];
	$a24=$i[24];
	$a25=$i[25];
	$a26=$i[26];
	$a27=$i[27];
	$a28=$i[28];
	$a29=$i[29];
	$a30=$i[30];
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
			jQuery("#sem5_ia2").validationEngine();
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
					<li class="active"><a href="#" title="">IA-II</a></li>
					<li><a href="sem5_ia3.php" title="">IA-III</a></li>
					<li><a href="sem5_fia.php" title="">IA-Final Avg</a></li>
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
					<form id="sem5_ia2" class="formular" method="post" action="sem5_ia2_process.php">
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
									<th scope="col" rowspan="2"><label>
										<div align="center">Attendance(%)</div></label>
									</th>
							</tr>
							<tr>
									<th scope="col" ><label>
										<div align="center">Int II</div></label>
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
										<div align="center"><input type="text" size="5" name="10mca51_ia1" id="10mca51_ia1" disabled="disabled" value="<?php echo $a1?>"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca51_atd" id="10mca51_atd" disabled="disabled" value="<?php echo $a16?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca52_ia1" id="10mca52_ia1" disabled="disabled" value="<?php echo $a2?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca52_atd" id="10mca52_atd" disabled="disabled" value="<?php echo $a17?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca53_ia1" id="10mca53_ia1" disabled="disabled" value="<?php echo $a3?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca53_atd" id="10mca53_atd" disabled="disabled" value="<?php echo $a18?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca541_ia1" id="10mca541_ia1" disabled="disabled" value="<?php echo $a4?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca541_atd" id="10mca541_atd" disabled="disabled" value="<?php echo $a19?>" />
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
										<div align="center"><input type="text" size="5" name="10mca542_ia1" id="10mca542_ia1" disabled="disabled" value="<?php echo $a5?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca542_atd" id="10mca542_atd" disabled="disabled" value="<?php echo $a20?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca543_ia1" id="10mca543_ia1" disabled="disabled" value="<?php echo $a6?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca543_atd" id="10mca543_atd" disabled="disabled" value="<?php echo $a21?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca544_ia1" id="10mca544_ia1" disabled="disabled" value="<?php echo $a7?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca544_atd" id="10mca544_atd" disabled="disabled" value="<?php echo $a22?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca545_ia1" id="10mca545_ia1" disabled="disabled" value="<?php echo $a8?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca545_atd" id="10mca545_atd" disabled="disabled" value="<?php echo $a23?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca546_ia1" id="10mca546_ia1" disabled="disabled" value="<?php echo $a9?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca546_atd" id="10mca546_atd" disabled="disabled" value="<?php echo $a24?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca551_ia1" id="10mca551_ia1" disabled="disabled" value="<?php echo $a10?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca551_atd" id="10mca551_atd" disabled="disabled" value="<?php echo $a25?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca552_ia1" id="10mca552_ia1" disabled="disabled" value="<?php echo $a11?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca552_atd" id="10mca552_atd" disabled="disabled" value="<?php echo $a26?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca553_ia1" id="10mca553_ia1" disabled="disabled" value="<?php echo $a12?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca553_atd" id="10mca553_atd" disabled="disabled" value="<?php echo $a27?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca554_ia1" id="10mca554_ia1" disabled="disabled" value="<?php echo $a13?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca554_atd" id="10mca554_atd" disabled="disabled" value="<?php echo $a28?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca555_ia1" id="10mca555_ia1" disabled="disabled" value="<?php echo $a14?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca555_atd" id="10mca555_atd" disabled="disabled" value="<?php echo $a29?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca556_ia1" id="10mca556_ia1" disabled="disabled" value="<?php echo $a15?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca556_atd" id="10mca556_atd" disabled="disabled" value="<?php echo $a30?>"/>
										</div>
									</th>
							</tr>
						</table>
						<pre>
						
						</pre>
					
						<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3" >
						<tr>
								<th scope="col"><label>
									<div align="left">Remarks:</div></label>
								</th>
						</tr>
						<tr>
								<th width="364" scope="col">
									<div align="left">
									<textarea name="remarks_sem5_ia2" id="remarks_sem5_ia2" cols="80" rows="5"></textarea>
									</div>
								</th>
						</tr>
						</table></br>
						
						<input id="inputsubmit1" type="submit" name="inputsubmit1" value="  Add Remarks   " />&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" type="submit" name="inputsubmit1" value="  Send mail  " />&nbsp;&nbsp;&nbsp;
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
