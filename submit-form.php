<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

// Enable verbose debug output (optional)
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

// Set the mailer to use SMTP
$mail->isSMTP();

// Specify the SMTP server
$mail->Host = 'smtp.gmail.com';

// Enable SMTP authentication
$mail->SMTPAuth = true;

// Set the username and password for your Gmail account
$mail->Username = 'learndigitallywithme@gmail.com';
$mail->Password = 'pkbd@2408';

// Enable TLS encryption
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

// Set the SMTP port (587 for TLS, 465 for SSL)
$mail->Port = 587;

// Set the sender and recipient email addresses
$mail->setFrom('kusumrawat1981@gmail.com', 'Your Name');
$mail->addAddress('kusumrawat1981@gmail.com', 'Recipient Name');
// Set email subject and body
$mail->Subject = 'Enquiry';
$mail->Body = 'This is the content of the enquiry email.';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}

?>

