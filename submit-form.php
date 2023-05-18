<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "learndigitallywithme@gmail.com";

    // Set email subject
    $subject = "New Enquiry";

    // Compose email content
    $email_content = "Name: $name \n";
    $email_content .= "Email: $email \n";
    $email_content .= "Message: $message \n";

    // Set additional headers
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your enquiry!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>

