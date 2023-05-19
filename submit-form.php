<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'learndigitallywithme@gmail.com';
$mail->Password = 'pkbd@2408';
$mail->SMTPSecure = 'tls';
$mail->setFrom('your-email@gmail.com', 'Your Name');
$mail->addAddress('learndigitallywithme@gmail.com', 'Recipient Name');
$mail->Subject = 'New Enquiry';
$mail->Body = 'This is a test email from the enquiry form.';

if (!$mail->send()) {
    echo 'Oops! Something went wrong.';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Thank you for your enquiry!';
}

?>
