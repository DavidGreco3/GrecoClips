<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$messag = $_POST['message'];

	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'trey@grecoclips.com'; // Gmail address which you want to use as SMTP server
	$mail->Password = 'ddwhrzefdhcalsrb'; // Gmail address Password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port = 587;
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;

	$mail->setFrom($from);

	$mail->addAddress('trey030303@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

	$mail->Subject = 'New Message From '.$name;
    $mail->Body = "Email: ".$from."\nPhone: ".$phone."\nMessage: ".$messag;

    $result = $mail->send();

	if ($result) {
		header('Location: https://grecoclips.com/thankYou.html');
	
	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
	 	echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}
}

?>