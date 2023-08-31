<?php
$to = "sushanthhebri336@gmail.com";
$subject = "Test Email";
$message = "This is a test email sent from a Docker container.";
$headers = 'From: heatbeatgroup@gmail.com' . "\r\n" .
    'Reply-To: HeatBeatgroup@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion() . "\r\n" .
    'Content-Type: text/html; charset=UTF-8' . "\r\n" .
    'MIME-Version: 1.0';

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed: " . error_get_last()['message'];
        echo "<pre>" . print_r(error_get_last(), true) . "</pre>";
    }
?>
