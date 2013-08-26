<?php 

session_start();






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
		<a href=""><img src="../../logo1.png" width="200px" height="80px"/></a>
		<!--<h1><a href="#">E-Report</a></h1>-->
		<h2><span>A Student Info System</span></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="slogin.html" title="">Home</a></li>
			<li><a href="../../index.php" title="">Logout</a></li>
		</ul>
	</div>
	
</div>
<div id="content">
	<div id="main3">
		<div id="welcome" class="post">
			<div align="center"><h2 class="title">KLE Dr. M.S SHESHGIRI COLLEGE OF ENGINEERING & TECHNOLOGY ,BELGAUM</h2></div>
			<div id="login" class="story">
			<div align="center"><h3>PROGRESS REPORT</h3></div></br>
			<div align="center"><h3>Department Of MCA</h3></div></br>
			<form name="" action="">
			<table>
				<tr>
					<td>Name Of the Student:<b><?php echo $_SESSION['name'];?></b></td>
					
					
				</tr>	
				<tr>					
					<td>USN:<b><?php echo $_SESSION['usn'];?></b></td>
					
				</tr>	
			</table></br>
			<p>
				<div align="left">Dear Parent/Guardian,</div>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am sending here with the progress report of your ward in the various subjects during the semester as follows.
			</p></br>
		<table border="1" bordercolor="#4c84f7" width="80%" cellspacing="2" cellpadding="3">
			<tr>
				<th scope="col" rowspan="2"><label>
					<div align="center">SI No.</div></label>
				</th>
				<th scope="col" rowspan="2"><label>
					<div align="center">Sub. Code</div></label>
				</th>
				<th scope="col" rowspan="2"><label>
					<div align="center">Subjects</div></label>
				</th>
				<th scope="col" colspan="2"><label>
					<div align="center">I/II/III Internal Assessment</div></label>
				</th>
				<th scope="col" rowspan="2"><label>
					<div align="center">Attendance[%]</div></label>
				</th>
			</tr>
			<tr>
				<th scope="col" ><label>
					<div align="center">Max.Marks</div></label>
				</th>
				<th scope="col" ><label>
					<div align="center">Marks Obtained</div></label>
				</th>
			</tr>
			</tr>
				<th scope="col"><label>
					<div align="left">1.</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="10" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="35" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th scope="col"><label>
					<div align="left">50</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text"  value="<?php echo $_SESSION['10mca11_ia1'];   ?>" size="15" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="5" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
			</tr>
			</tr>
				<th scope="col"><label>
					<div align="left">2.</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="10" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="35" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th scope="col"><label>
					<div align="left">50</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" value="<?php echo  $_SESSION['10mca12_ia1'];  ?>" size="15" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="5" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
			</tr>
			</tr>
				<th scope="col"><label>
					<div align="left">3.</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="10" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="35" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th scope="col"><label>
					<div align="left">50</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" value="<?php echo $_SESSION['10mca13_ia1'];   ?>" size="15" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="5" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
			</tr>
			</tr>
				<th scope="col"><label>
					<div align="left">4.</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="10" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="35" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th scope="col"><label>
					<div align="left">50</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" value="<?php echo $_SESSION['10mca14_ia1'];   ?>" size="15" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="5" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
			</tr>
			</tr>
				<th scope="col"><label>
					<div align="left">5.</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="10" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="35" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th scope="col"><label>
					<div align="left">50</div></label>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" value="<?php echo $_SESSION['10mca15_ia1'];   ?>" size="15" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
				<th width="364" scope="col">
					<div align="center"><input type="text" size="5" name="10mca21_ia2" id="10mca21_ia2"/>
					</div>
				</th>
			</tr>
			<tr>
				<th scope="col" colspan="2"><label>
					<div align="left">Remarks:</div></label>
				</th>
				<th width="364" scope="col" colspan="4">
					<div align="left"><?php echo $_SESSION['remarks'];   ?>
						<!--<input type="text" size="100" value="<?php echo $_SESSION['remarks'];   ?>" name="10mca21_ia2" id="10mca21_ia2"/>
						  <textarea name="r" id="r" cols="100" rows="5" value="" ></textarea> -->
					</div>
				</th>
			</tr>
		</th>
		</table>			
		<a href="mpdf_mail.php"><input id="report" type="button" name="report" value="send" /></a>		
				
				
				
				
			
			</div>
			
		</div>
		
	</div>
</div>
<div>

<pre>




















<pre>

</div>
<div id="footer">
	<p id="legal">Copyright &copy; 2012-13 E-reprot. All Rights Reserved. Designed by <a href="http://www.klescet.ac.in/">KLESCET</a>.</p>
	<p id="links"><a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
</div>
</body>
</html>
