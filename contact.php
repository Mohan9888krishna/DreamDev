<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create email content
    $to = 'info@dreamdevdevelopers.com.com';
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Send email
    $success = mail($to, $subject, $body);

    // Display popup message
    echo '<script>';
    if ($success) {
        echo 'alert("Email Sent Successfully!");';
    } else {
        echo 'alert("Failed To Send Email. Please Try Again.");';
    }
    echo 'window.location.href = "contact.html";';
    echo '</script>';
}
?>
