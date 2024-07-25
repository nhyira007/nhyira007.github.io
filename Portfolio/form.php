<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate data 
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send email 
        $to = "yboateng19@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Email sent successfully!";
            header("Location: index.html?status=success");
            exit();
        } else {
            echo "Failed to send email.";
            header("Location: index.html?status=error");
            exit();
        }
    } else {
        echo "Validation failed.";
        header("Location: index.html?status=invalid");
        exit();
    }
} else {
    echo "Invalid request method.";
}
?>
