<?php

// Define the recipient email address
$address = "shoaibrem7@gmail.com";

// Define end of line constant if not already defined
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

// Initialize error flag
$error = false;
$fields = array('name', 'email', 'subject', 'message');

// Check if required fields are provided and not empty
foreach ($fields as $field) {
    if (empty($_POST[$field]) || trim($_POST[$field]) == '') {
        $error = true;
        break;  // Exit loop if there's an error
    }
}

if (!$error) {
    // Sanitize and prepare data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $url = isset($_POST['url']) ? htmlspecialchars(trim($_POST['url'])) : 'N/A'; // Handle optional URL field
    $message = htmlspecialchars(trim($_POST['message']));

    // Construct the email content
    $e_subject = 'You\'ve been contacted by ' . $name;
    $e_body = "You have been contacted by: $name" . PHP_EOL . PHP_EOL;
    $e_body .= "E-mail: $email" . PHP_EOL . PHP_EOL;
    $e_body .= "Subject: $subject" . PHP_EOL . PHP_EOL;
    $e_body .= "URL: $url" . PHP_EOL . PHP_EOL;
    $e_body .= "Message:" . PHP_EOL . $message . PHP_EOL . PHP_EOL;

    $msg = wordwrap($e_body, 70);

    // Set email headers
    $headers = "From: $email" . PHP_EOL;
    $headers .= "Reply-To: $email" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;

    // Send email
    if (mail($address, $e_subject, $msg, $headers)) {
        echo 'Success';
    } else {
        echo 'ERROR!';
    }
} else {
    echo 'ERROR: All fields are required.';
}
?>
