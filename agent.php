<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $qualification = $_POST['qualification'];
    $aadhaar = $_POST['aadhaar'];
    $address = $_POST['address'];
    $experience = $_POST['experience'];
    $message = $_POST['message'];

    // Create email content
    $to = 'info@dreamdevdevelopers.com';
    $subject = 'New Agent Form Submission';
    $body = "Name: $name\nEmail: $email\nNumber: $number\nQualification: $qualification\nAadhaar: $aadhaar\nAddress: $address\nExperience: $experience\nMessage: $message";

    // Send email
    $success = mail($to, $subject, $body);

    // Display popup message
    echo '<script>';
    if ($success) {
        echo 'alert("Email Sent Successfully!");';
    } else {
        echo 'alert("Failed To Send Email. Please Try Again.");';
    }
    echo 'window.location.href = "Agent.html";';
    echo '</script>';
}
?>
