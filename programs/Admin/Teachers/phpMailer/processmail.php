﻿<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.att.sch.gr';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vapapado';                            // SMTP username
$mail->Password = 'vas1l1s@';                           // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'vapapado@sch.gr';
$mail->FromName = 'Mailer';
//$mail->AddAddress('vapapado@sch.gr', 'Josh Adams');  // Add a recipient
$mail->AddAddress('vapapado@sch.gr');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
?>