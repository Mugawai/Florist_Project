<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $code = $_POST["code"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "galih.wahyu1852@gmail.com"; // Replace with your email address

    // Subject of the email
    $subject = "Booking Request for Bouquet";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";
    $message .= "Code: $code\n";
    $message .= "Additional Message:\n$message";

    // Additional headers
    $headers = "From: $email" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request method";
}
?>
