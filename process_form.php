<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "ayomikuntemitope246@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank-you page
    header("Location: thank_you.html");
    exit;
}
?>
