<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'us2.smtp.mailhostbox.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'noreply@j404.tech';
   $mail->Password = 'YEbT!Atm5';
   $mail->setFrom('noreply@j404.tech', 'J404');
   $mail->addReplyTo('noreply@j404.tech', 'J404');
   $mail->addAddress('soraiyaparvin@gmail.com', 'Soraiya');
   $mail->Subject = 'Checking if PHPMailer works';
//    $mail->msgHTML(file_get_contents('message.html'), __DIR__);
   $mail->Body = 'This is just a plain text message body';
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email message was sent.';
   }
?>