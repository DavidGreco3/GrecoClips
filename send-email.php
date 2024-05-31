<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "Trey@grecoclips.com";
$mail->Password = "Asd4fghjkll5";

$mail->setFrom($email, $name);
$mail->addAddress("Trey@grecoclips.com");

$mail->Subject = "New Message from Contact Form";
$mail->isHTML(true);
$mail->Body = "Name: " . $name . "<br>Email: " . $email . "<br>Phone: " . $phone . "<br>Message: " . $message;

$mail->send();

echo "Message has been sent";