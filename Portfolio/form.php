<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate data (basic example, you may want to add more validation)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // send email
        $to = "yboateng19@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for contacting us. We will get back to you soon.";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
