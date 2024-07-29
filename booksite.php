<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $pnumber = $_POST['pnumber'];
    $email = $_POST['mail'];
    $siteVisit = $_POST['booksite'];
    $message = $_POST['message'];

    // Create email content
    $to = 'info@potlaservices.com';
    $subject = 'New Site Visit Booking';
    $body = "Name: $name\nPhone Number: $pnumber\nEmail: $email\nSite Visit: $siteVisit\nMessage: $message";

    // Send email
    $success = mail($to, $subject, $body);

    // Display popup message and redirect
    echo '<script>';
    if ($success) {
        echo 'alert("Email Sent Successfully!");';
    } else {
        echo 'alert("Failed To Send Email. Please Try Again.");';
    }
    echo 'window.location.href = "Booksitevisit.html";';
    echo '</script>';
}
?>
