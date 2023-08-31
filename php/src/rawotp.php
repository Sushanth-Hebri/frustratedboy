<?php
session_start(); // Start the session
$otp = rand(10000, 99999);


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $country = $_POST["country"];



    //store in session variable
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["birthdate"] = $birthdate;
    $_SESSION["country"] = $country;
    $_SESSION["otp"] = $otp;
}







$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_player";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}







$email = $_SESSION['email'];
$to = $email;
// Recipient's email address
$subject = 'Your one time OTP'; // Email subject
$message = "Your OTP is: $otp"; // Email body

// // Set the headers
$headers = 'From: HeatBeatgroup@gmail.com' . "\r\n" .
           'Reply-To: HeatBeatgroup@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion() . "\r\n" .
           'Content-Type: text/html; charset=UTF-8' . "\r\n" .
           'MIME-Version: 1.0';

// Send the email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "OTP sent successfully to $to";
} else {
    echo "Failed to send OTP";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entered OTP
    $enteredOTP = $_POST["enteredotp"];
    // Retrieve the stored OTP from the session
    $storedOTP = $_SESSION["otp"];

    if ($enteredOTP == $storedOTP) {
        // OTP is verified successfully
        echo "OTP verification successful!";
        // Redirect to register.php for final registration
        header("Location: register.php");
        exit;
    } else {
        // Incorrect OTP entered, show error message
        $error = "Invalid OTP. Please try again.";
        header("Location: Enter_otp_page.php?error=otp");
    }
}

// // Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve the entered OTP
//     $enteredOTP = $_POST["otp"];

//     // Retrieve the stored OTP from the session
//     $storedOTP = $_SESSION["otp"];

//     if ($enteredOTP == $storedOTP) {
//         // OTP is verified successfully
//         // Redirect to register.php for final registration
//         header("Location: register.php");
//         exit;
//     } else {
//         // Incorrect OTP entered, redirect back to OTP verification page with error parameter
//         header("Location: Enter_otp_page.php?error=otp");
//         exit;
//     }
// }
?>

<!-- HTML form in otp-verification.php -->
<form action="Enter_otp_page.php" method="POST">
    <label for="enteredotp">Enter your OTP:</label>
    <input type="text" name="enteredotp" id="enteredotp" required>
    <input type="submit" value="Verify OTP">
</form>