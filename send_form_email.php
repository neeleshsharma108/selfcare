<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    // $subject = $_POST["subject"];
    $status = $_POST["status"];
    $live = $_POST["live"];
    $message = $_POST["message"];

    // Set the recipient email address where you want to receive the form submissions
    $to = "recipient@example.com"; // Replace with your recipient email address

    // Email subject and headers
    $subject = "Someone Messaged You:";
    $headers = "From: $email";

    // Email body
    $emailBody = "New Client from web\n\n";
    $emailBody .= "Name: $name\n";
    $emailBody .= "Number: $number\n";
    $emailBody .= "Email: $email\n";
    // $emailBody .= "Subject: $subject\n";
    $emailBody .= "Marital Status: $status\n";
    $emailBody .= "Residing Place: $live\n";
    $emailBody .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>