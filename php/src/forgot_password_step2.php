<?php
session_start(); // Start the session

$otp = rand(10000, 99999);


$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to send the OTP via email
function sendOTP($to, $otp)
{
    $subject = 'Forgot password (OTP)';
    $message = "Your OTP is: $otp";

    $headers = 'From: HeatBeatgroup@gmail.com' . "\r\n" .
        'Reply-To: HeatBeatgroup@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion() . "\r\n" .
        'Content-Type: text/html; charset=UTF-8' . "\r\n" .
        'MIME-Version: 1.0';

    return mail($to, $subject, $message, $headers);
}










// Define an empty error variable
$error = "";

// get email from post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["Enteredemail"];
    $_SESSION["Enteredemail"] = $email;




    // Check if the email  exists in the database
    $checkEmailQuery = "SELECT email_id FROM users WHERE email_id = '$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);
    if ($checkEmailResult->num_rows > 0) {
        // Email  exists, then send otp and redirect to enter otp page
        // Send the OTP via email
        $mailSent = sendOTP($email, $otp);

        if ($mailSent) {
            $otpMessage = "OTP sent successfully to $email";
            header("Location: http://localhost:8000/forgot_password_step3.php");
            exit;
        } else {
            $otpMessage = "Failed to send OTP";
        }
                        } 
    else {
        header("Location: sign-in.php?err=emailnot");
        exit;
    }
} else {
    // Incorrect OTP entered, show error message
    $error = "Invalid OTP. Please try again.";
}



?>

