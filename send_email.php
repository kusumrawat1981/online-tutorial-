<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';
require 'path/to/PHPMailer/src/Exception.php';

require 'vendor/autoload.php'; // Path to PHPMailer autoloader

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->Port = 587; // Replace with your SMTP port
        $mail->SMTPAuth = true;
        $mail->Username = 'learndigitallywithme@gmail.com'; // Replace with your email address
        $mail->Password = 'pkbd@2408'; // Replace with your email password
        $mail->SMTPSecure = 'tls';

        // Sender and recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('learndigitallywithme@gmail.com'); // Replace with recipient's email address

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'New Enquiry';
        $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

        // Send email
        $mail->send();
        echo 'Thank you for your enquiry!';
    } catch (Exception $e) {
        echo 'Oops! Something went wrong.';
        echo 'Error: ' . $mail->ErrorInfo;
    }
}
?>
