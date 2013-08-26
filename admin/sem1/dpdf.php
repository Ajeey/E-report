<?php
require_once("../../dompdf/dompdf_config.inc.php");


$html =
  '<html><body>'.
  '<p>Put your html here, or generate it with your favourite '.
  'templating system.</p>'.
   '<?php $a="10"; 
    echo "hello ".$a; ?>'.
  '</body></html>';


/*$html1 =
'<html><body>'.
'<p>Put your html here, or generate it with your favourite '.
'templating system.</p>'.
'<?php 	$dbhost = "localhost";$dbuser = "root";$dbpass = "";$dbdb = "mobiledb";$connect = mysql_connect($dbhost, $dbuser, $dbpass);mysql_select_db($dbdb);$query="select * from androidlogin";$result=mysql_query($query);while($i = mysql_fetch_array($result)){echo "<h3>". $i['user']. "&&" . $i['pass']. "</h3>";}?>'.
'</body></html>';
*/
$templateFile = 'prog_report.php';
$content = file_get_contents($templateFile);
$dompdf = new DOMPDF();


//$dompdf->set_paper( array(0,0, 21 * 72, 12 * 72), "portrait" );
$dompdf->load_html($content);

	//		$paperSize = array(0,0,100,100);
			
			//$dompdf->set_paper($paperSize);
			
	define('DEFAULT_PDF_PAPER_SIZE', 'a2');
 //$dompdf->set_paper("letter", "portrait" );
		$dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'landscape');
//$dompdf->load_html_file( 'http://www.yahoo.com' );
	$dompdf->render();
	$_SESSION['pdf'] = $dompdf->output();
	$pdf= $dompdf->output();
	//echo $pdf;
	//$dompdf->stream("sample.pdf");
	header('Location:mail.php');

	//mail
	
/*	require("../../PHPMailer/class.phpmailer.php");
	
	$mail = new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	//IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "prince.lampard@gmail.com"; // SMTP username
	$mail->Password = "#drifter##"; // SMTP password
	$webmaster_email = "prince.lampard@gmail.com"; //Reply to this email ID
	$email="ajey.charantimath@gmail.com"; // Recipients email ID
	$name="Ajey"; // Recipient's name
	$mail->From = $webmaster_email;
	$mail->FromName = "Webmaster";
	$mail->AddAddress($email,$name);
	$mail->AddReplyTo($webmaster_email,"Webmaster");
	$mail->WordWrap = 50; // set word wrap
	//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
	
	//$mail->AddAttachment($pdf,"new.pdf"); // attachment
	$mail->AddStringAttachment($pdf, 'some_filename.pdf');
	$mail->IsHTML(true); // send as HTML
	
	$mail->Subject = "This is the subject";
	$mail->Body = "Hi, Ajey
	This is the HTML BODY "; //HTML Body
	$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
	if(!$mail->Send())
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
		echo "Message has been sent";
	}
	


*/













//header('Location:mail.php');

?>