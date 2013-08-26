<?php
require("../../PHPMailer/class.phpmailer.php");
require("../../PHPMailer/class.smtp.php");
session_start();
		$mail = new PHPMailer();
		$mail->IsSMTP(); // send via SMTP
		//IsSMTP(); // send via SMTP
		$mail->Host = "smtp.gmail.com";
		
		$mail->SMTPAuth = true; // turn on SMTP authentication
		$mail->Username = "prince.lampard@gmail.com"; // SMTP username
		$mail->Password = "#drifter##"; // SMTP password
		
		$webmaster_email = "prince.lampard@gmail.com"; //Reply to this email ID
		$email="ajey.charantimath@gmail.com";
	//	$email1="arjunrocksjgi@gmail.com";// Recipients email ID
		$name="Ajey"; // Recipient's name
		$mail->From = $webmaster_email;
		$mail->FromName = "Webmaster";
		
		$mail->AddAddress($email,$name);
		//$mail->AddAddress($email1,$name);
		$mail->AddReplyTo($webmaster_email,"Webmaster");
		$mail->WordWrap = 50; // set word wrap
		//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
		
		//$mail->AddAttachment($pdf,"new.pdf"); // attachment
		//$mail->AddStringAttachment($_SESSION['pdf'], 'report.pdf');
		$mail->IsHTML(true); // send as HTML
		
		$msg="Hi, ".$_SESSION['name'] ." your Password is ".$_SESSION['password'];
		$mail->Subject = "You'r requested Password from E-Report";
		$mail->Body=$msg; //HTML Body
		$mail->AltBody = "This is the body when user views in plain text format"; //Text Body
		if(!$mail->Send())
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		}
		else
		{
			echo header('Location:forsuccess.php');
		}
	?>