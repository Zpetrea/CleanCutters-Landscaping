<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if ($name && $email && $message) {
        $to = "your-email@example.com"; // Change to your email address
        $subject = "New Contact Submission from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

        $headers = "From: $name <$email>";

        if (mail($to, $subject, $body, $headers)) {
            header("Location: contact.html?status=success");
            exit;
        } else {
            header("Location: contact.html?status=error");
            exit;
        }
    } else {
        header("Location: contact.html?status=invalid");
        exit;
    }
}
?>
