<?php
	require_once('PHPMailer/class.phpmailer.php');
	$mail             = new PHPMailer();
	$mail->IsSMTP();  // telling the class to use SMTP
	$mail->Host       = "mail.hunnycoders.com"; // SMTP server
	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = 'tls';
	$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
	$mail->Username   = "info@hunnycoders.com"; // SMTP account username
	$mail->Password   = "rahman9alone";        // SMTP account password
	$mail->SetFrom('info@hunnycoders.com', 'Hunny Coders');
	$mail->Subject    = "TEST";
	$mail->AltBody    = "TEST";
	$mail->MsgHTML("TEST");
	$mail->AddAddress('md.rahman0296@gmail.com', 'BEST');
	if(!$mail->Send()) {
  		echo "Mailer Error";
	} else {
  		echo "Success";
	}
?>
