<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "galih.wahyu1852@gmail.com"; // Replace with your email address

    // Subject of the email
    $email_subject = "Contact Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email" . "\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request method";
}
?>
