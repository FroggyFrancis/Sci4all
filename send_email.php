<?php
// Retrieve form data
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

// Compose email message
$message = "First Name: $fname\n";
$message .= "Last Name: $lname\n";
$message .= "Email: $email\n";
$message .= "Message: $subject\n";

// Send email notification
$to = "Sciforallofficial@gmail.com"; // Change this to your email address
$subject = "New Message from SciForAll Contact Form";
$headers = "From: $email";

// Send email
mail($to, $subject, $message, $headers);

// Redirect user back to original page
header("Location: /original_page_url");
exit;
?>
