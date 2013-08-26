<html >
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="../../css/template.css" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript">
	</script>
	<script src="../../js/jquery-1.6.min.js" type="text/javascript">
	</script>
	<script src="../../js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="../../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
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
		<a href=""><img src="logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>A Student Info System</span></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="../select.php" title="">Home</a></li>
			<li><a href="../end_session.php" title="">LogOut</a></li>
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
										<div align="center"><input type="text" size="5" name="10mca51_ee" id="10mca51_ee" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca51_pf" id="10mca51_pf" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
										</div>
									</th>
									<th width="364" scope="col" rowspan="22">
										<div align="center"><textarea name="class_obtained" id="class_obtained" cols="10" rows="15" class="validate[required] text-input" data-prompt-position="topLeft:-50"></textarea>
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
										<div align="center"><input type="text" size="5" name="10mca52_ee" id="10mca52_ee" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca52_pf" id="10mca52_pf" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca53_ee" id="10mca53_ee" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca53_pf" id="10mca53_pf" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca541_ee" id="10mca541_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca541_pf" id="10mca541_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca542_ee" id="10mca542_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca542_pf" id="10mca542_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca543_ee" id="10mca543_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca543_pf" id="10mca543_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca544_ee" id="10mca544_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca544_pf" id="10mca544_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca545_ee" id="10mca545_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca545_pf" id="10mca545_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca546_ee" id="10mca546_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca546_pf" id="10mca546_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca551_ee" id="10mca551_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca551_pf" id="10mca551_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca552_ee" id="10mca552_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca552_pf" id="10mca552_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca553_ee" id="10mca553_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca553_pf" id="10mca553_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca554_ee" id="10mca554_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca554_pf" id="10mca554_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca555_ee" id="10mca555_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca555_pf" id="10mca555_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca556_ee" id="10mca556_ee" />
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca556_pf" id="10mca556_pf" />
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
										<div align="center"><input type="text" size="5" name="10mca56_ee" id="10mca56_ee"class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca56_pf" id="10mca56_pf" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca57_ee" id="10mca57_ee"class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca57_pf" id="10mca57_pf" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
										<div align="center"><input type="text" size="5" name="10mca58_ee" id="10mca58_ee"class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
									</div>
									</th>
									<th width="364" scope="col">
										<div align="center"><input type="text" size="5" name="10mca58_pf" id="10mca58_pf" class="validate[required] text-input" data-prompt-position="topLeft:-50"/>
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
								<th width="364" scope="col">
									<div align="left">
									<textarea name="goals" id="goals" cols="75" rows="5"></textarea>
									</div>
								</th>
						</tr>
						</table>
						<pre>
						
						</pre>
					
						<input id="inputsubmit1" type="submit" name="inputsubmit1" value="Save" />&nbsp;&nbsp;&nbsp;<input id="inputsubmit1" type="Reset" name="inputsubmit1" value="Reset" />&nbsp;&nbsp;&nbsp;<a href="enter_sem5.php"><input id="inputsubmit1" type="button" name="inputsubmit1" value="Cancel" /></a>&nbsp;&nbsp;&nbsp;
						
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
