<?php
if (isset($_POST['email'])) {
    $to = $_POST['email']; // Use the email address from POST data
    $subject = "Favorite Movies Confirmation";
    $message = "Your favorite movies have been saved successfully.";
    $headers = "From: priyanshun2017@gmail.com\r\n";
    $headers .= "Reply-To: priyanshun2017@gmail.com\r\n";
    $headers .= "Content-Type: text/html\r\n";
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "No email address provided.";
}
?>