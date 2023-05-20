<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require 'path/to/PHPMailer/src/Exception.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configure SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your@gmail.com'; // Your Gmail email address
        $mail->Password   = 'your_password'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Set sender and recipient
        $mail->setFrom('your@gmail.com', 'Your Name'); // Your Gmail email address and your name
        $mail->addAddress('recipient@example.com'); // Recipient's email address

        // Set email subject and body
        $mail->Subject = 'New message from contact form';
        $mail->Body    = "Name: $name\n\nEmail: $email\n\nMessage: $message";

        // Send the email
        $mail->send();

        // Redirect after successful submission
        header('Location: thank_you.html');
        exit();
    } catch (Exception $e) {
        // Something went wrong, display the error message
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
