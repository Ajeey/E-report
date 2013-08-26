<?php

//include 'prog_report_ia1';
require_once("../../../dompdf/dompdf_config.inc.php");

include '../../staff_session.php';
include '../../connection.php';
$usn=$_SESSION['s_usn'];

$query99="select email_id from father where usn='$usn' ";
$result99=mysql_query($query99);
if($result99)
{
	while($f=mysql_fetch_row($result99))
	{
		$q=$f[0];
	}
}
else
	die(mysql_error());
echo $q;

echo $usn;





$templateFile = 'prog_report_ia3.php';
$content = file_get_contents($templateFile);
$dompdf = new DOMPDF();


//$dompdf->set_paper( array(0,0, 21 * 72, 12 * 72), "portrait" );
$dompdf->load_html($content);

	//		$paperSize = array(0,0,100,100);
			
			//$dompdf->set_paper($paperSize);
			
	define('DEFAULT_PDF_PAPER_SIZE', 'a4');
	
 //$dompdf->set_paper("letter", "portrait" );
 
		$dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'letter');
		
//$dompdf->load_html_file( 'http://www.yahoo.com' );

	$dompdf->render();
	$_SESSION['pdf'] = $dompdf->output();
	//$pdf= $dompdf->output();
	//echo $pdf;
	//$dompdf->stream("sample.pdf");
	
	require("../../../PHPMailer/class.phpmailer.php");
	require("../../../PHPMailer/class.smtp.php");
	
	$mail = new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	//IsSMTP(); // send via SMTP
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "mcaereport@gmail.com"; // SMTP username
	$mail->Password = "klecetmca"; // SMTP password
	$webmaster_email = "mcaereport@gmail.com"; //Reply to this email ID
	$email="ajey.charantimath@gmail.com";
	
//	$email1="arjunrocksjgi@gmail.com";// Recipients email ID
	$name="Ajey"; // Recipient's name
	$mail->From = $webmaster_email;
	$mail->FromName = "Webmaster";
	$mail->AddAddress($email,$name);
	$mail->AddAddress($q,$name);
	$mail->AddReplyTo($webmaster_email,"Webmaster");
	$mail->WordWrap = 50; // set word wrap
	//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
	
	//$mail->AddAttachment($pdf,"new.pdf"); // attachment
	$mail->AddStringAttachment($_SESSION['pdf'], 'report.pdf');
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
		header('Location:database_updated.php');
		//echo "Message has been sent";
	}
	

?>