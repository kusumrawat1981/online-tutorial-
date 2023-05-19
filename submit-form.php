<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set up email
  $to = "your-email@example.com"; // Replace with your email address
  $subject = "New Enquiry";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";
  
  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your enquiry!";
  } else {
    echo "Oops! Something went wrong.";
  }
}
?>
