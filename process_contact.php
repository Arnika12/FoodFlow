<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $created_at = date('Y-m-d H:i:s');

    // Insert into database
    $sql = "INSERT INTO contact_messages (name, email, subject, message, created_at) 
            VALUES ('$name', '$email', '$subject', '$message', '$created_at')";

    if (mysqli_query($conn, $sql)) {
        // Send email notification to admin (optional)
        $to = "admin@foodflow.com";
        $email_subject = "New Contact Form Submission: $subject";
        $email_body = "You have received a new message from the contact form.\n\n" .
                     "Name: $name\n" .
                     "Email: $email\n" .
                     "Subject: $subject\n" .
                     "Message:\n$message";
        $headers = "From: $email\n";
        $headers .= "Reply-To: $email";

        mail($to, $email_subject, $email_body, $headers);

        // Redirect with success message
        $_SESSION['message'] = "Thank you for your message! We will get back to you soon.";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Sorry, there was an error sending your message. Please try again later.";
        $_SESSION['message_type'] = "error";
    }

    header("Location: contact.php");
    exit();
} else {
    // If not a POST request, redirect to contact page
    header("Location: contact.php");
    exit();
}
?> 