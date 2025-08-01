<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'bbitalex@gmail.com';
    $mail->Password   = 'lbxd hxbb sgde aknq';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('bbitalex@gmail.com', 'Alex Okama');
    $mail->addAddress('benjamin.mundama@strathmore.edu', 'Benjamin Mundama');

    $mail->isHTML(true);
    $mail->Subject = 'Implementing signup and signin forms';
    $mail->Body    = 'Hi Benja, I am just testing something here <b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>