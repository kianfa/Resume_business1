<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Your email address where you want to receive the form submissions
    $to = 'aliga1680@gmail.com';

    // Subject of the email
    $subject = 'New Form Submission';

    // Compose the email body
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
}
?>