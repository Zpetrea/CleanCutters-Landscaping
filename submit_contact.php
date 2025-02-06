<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']); // Sanitize!
    $email = htmlspecialchars($_POST['email']); // Sanitize!
    $message = htmlspecialchars($_POST['message']); // Sanitize!

    // Now you can send an email, store in a database, etc.
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    mail($to, $subject, $body);

    // Redirect to a thank you page (recommended)
    header("Location: thank_you.html"); // Create thank_you.html
    exit();
}
?>
