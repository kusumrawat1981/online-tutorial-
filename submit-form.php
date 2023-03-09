<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Create the email body
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  // Set the recipient email address(es)
  $to = 'you@example.com';

  // Set the email subject
  $subject = "Contact Form Submission - $subject";

  // Set the email headers
  $headers = "From: $name <$email>\r\nReply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Thank you for your message!";
  } else {
    // Error sending email
    echo "Sorry, there was an error sending your message. Please try again later.";
  }
} else {
  // Form not submitted
  echo "Sorry, the form was not submitted.";
}
?>
