<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $your_email = $_POST['your_email'];
    $purpose = $_POST['purpose'];
    $your_message = $_POST['your_message'];

    // Replace 'your@email.com' with the actual email address where you want to receive the form submissions
    $to = 'kwickstackssolutions@gmail.com';
    $subject = 'New message from website';
    
    // Build the email message
    $message = "First Name: $first_name\n";
    $message .= "Last Name: $last_name\n";
    $message .= "Mobile Number: $mobile_number\n";
    $message .= "Email: $your_email\n";
    $message .= "Purpose: $purpose\n";
    $message .= "Message: $your_message\n";

    // Additional headers
    $headers = "From: $your_email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // You can redirect the user to a thank you page or display a success message here
    echo "Thank you for your submission!";
} else {
    // Handle invalid request method
    echo "Invalid request method";
}
?>
