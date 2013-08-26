<?php 
include '../../admin_session.php';
include '../../connection.php';

$usn=$_SESSION['v_usn'];
//echo $_SESSION['v_sem'];

$query="select * from sem5_ee where usn='$usn'";
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
$query1="select * from sem5_pf where usn='$usn'";
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
	$p14=$j[14];
	$p15=$j[15];
	$p16=$j[16];
	$p17=$j[17];
	$p18=$j[18];
}
$query2="select * from sem5_remarks where usn='$usn'";
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
			jQuery("#sem5_ee").validationEngine();
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
			<li><a href="../select_usn.php" title="">Home</a></li>
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
					<li ><a href="sem5_fia.php" title="">IA-Final Avg</a></li>
					<li class="active"><a href="#" title="">Ext.Exam Marks</a></li>
				</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="main1">
		<div id="welcome" class="post">
			<h2 class="title">Examwise Entering Of Marks</h2>
			<div id="login" align="center" class="story">
					<form id="sem5_ee" class="formular" method="post" action="sem5_ee_process.php">
						<h2><font size="5" color="#4c84f7">Semester V:</font></h2>
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
										<div align="left">10MCA51</div></label>
									</th>
									<th scope="col"><label>
										<div align="left">Object-Oriented Modeling and Design Patterns</div></label>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca51_ee" id="10mca51_ee" disabled="disabled" value="<?php echo $a1?>"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca51_pf" id="10mca51_pf" disabled="disabled" value="<?php echo $p1?>"/>
										</div>
									</th>
									<th width="364" scope="col" rowspan="22"><?php echo $r1?>
										<!--<div align="center"><textarea name="class_obtained" id="class_obtained" cols="10" rows="15" class="validate[required] text-input" data-prompt-position="topLeft:-50"></textarea>
										</div>-->
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
										<div align="center"><input type="text" size="5" name="10mca52_ee" id="10mca52_ee" disabled="disabled" value="<?php echo $a2?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca52_pf" id="10mca52_pf" disabled="disabled" value="<?php echo $p2?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca53_ee" id="10mca53_ee" disabled="disabled" value="<?php echo $a3?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca53_pf" id="10mca53_pf" disabled="disabled" value="<?php echo $p3?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca541_ee" id="10mca541_ee" disabled="disabled" value="<?php echo $a4?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca541_pf" id="10mca541_pf" disabled="disabled" value="<?php echo $p4?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca542_ee" id="10mca542_ee" disabled="disabled" value="<?php echo $a5?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca542_pf" id="10mca542_pf" disabled="disabled" value="<?php echo $p5?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca543_ee" id="10mca543_ee" disabled="disabled" value="<?php echo $a6?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca543_pf" id="10mca543_pf" disabled="disabled" value="<?php echo $p6?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca544_ee" id="10mca544_ee" disabled="disabled" value="<?php echo $a7?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca544_pf" id="10mca544_pf" disabled="disabled" value="<?php echo $p7?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca545_ee" id="10mca545_ee" disabled="disabled" value="<?php echo $a8?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca545_pf" id="10mca545_pf" disabled="disabled" value="<?php echo $p8?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca546_ee" id="10mca546_ee" disabled="disabled" value="<?php echo $a9?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca546_pf" id="10mca546_pf" disabled="disabled" value="<?php echo $p9?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca551_ee" id="10mca551_ee" disabled="disabled" value="<?php echo $a10?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca551_pf" id="10mca551_pf" disabled="disabled" value="<?php echo $p10?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca552_ee" id="10mca552_ee" disabled="disabled" value="<?php echo $a11?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca552_pf" id="10mca552_pf" disabled="disabled" value="<?php echo $p11?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca553_ee" id="10mca553_ee" disabled="disabled" value="<?php echo $a12?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca553_pf" id="10mca553_pf"disabled="disabled" value="<?php echo $p12?>" />
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
										<div align="center"><input type="text" size="5" name="10mca554_ee" id="10mca554_ee"disabled="disabled" value="<?php echo $a13?>" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca554_pf" id="10mca554_pf" disabled="disabled" value="<?php echo $p13?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca555_ee" id="10mca555_ee" disabled="disabled" value="<?php echo $a14?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca555_pf" id="10mca555_pf" disabled="disabled" value="<?php echo $p14?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca556_ee" id="10mca556_ee" disabled="disabled" value="<?php echo $a15?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca556_pf" id="10mca556_pf" disabled="disabled" value="<?php echo $p15?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca56_ee" id="10mca56_ee"disabled="disabled" value="<?php echo $a16?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca56_pf" id="10mca56_pf" disabled="disabled" value="<?php echo $p16?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca57_ee" id="10mca57_ee"disabled="disabled" value="<?php echo $a17?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca57_pf" id="10mca57_pf" disabled="disabled" value="<?php echo $p17?>"/>
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
										<div align="center"><input type="text" size="5" name="10mca58_ee" id="10mca58_ee"disabled="disabled" value="<?php echo $a18?>"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca58_pf" id="10mca58_pf" disabled="disabled" value="<?php echo $p18?>"/>
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
									<textarea name="goals" id="goals" cols="75" rows="5"></textarea>
									</div>-->
								</th>
						</tr>
						</table>
						<pre>
						
						</pre>
					<a href="sem5_ee_edit.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="   Edit   " /></a>&nbsp;&nbsp;&nbsp;				
					
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
