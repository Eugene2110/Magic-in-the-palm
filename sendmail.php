<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'mailer/Exception.php';
	require 'mailer/PHPMailer.php';
	require 'mailer/SMTP.php';

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'yourmail@gmail.com';                 // SMTP username
	    $mail->Password = 'yourpassword';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('yourmail@gmail.com', 'From WEBSITE');
	    $mail->addAddress('yourmail@gmail.com');               // Name is optional

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $_POST['subject'];

	    $mailtext = '<b>Name : </b>'.$_POST['name'];
	    $mailtext = $mailtext.'<br><b>Email : </b>'.$_POST['email'];
	    $mailtext = $mailtext.'<br><b>Message : </b>'.$_POST['message'];

	    $mail->Body  = $mailtext;

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}

?>