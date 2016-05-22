<?php
require '../lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'equipe.discipuluz@gmail.com';
$mail->Password = 'Setembro!01';
$mail->SMTPSecure = 'ssl';

$mail->From = 'equipe@discipuluz.com';
$mail->FromName = 'Discipuluz';
$mail->addAddress('hbanhete@gmail.com');

$mail->isHTML(true);

$mail->Subject = 'Test Mail Subject!';
$mail->Body    = 'This is SMTP Email Test';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
}
?>
