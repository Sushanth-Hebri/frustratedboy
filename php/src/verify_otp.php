<?php
session_start(); // Start the session

// Define an empty error variable
$error = "";

// Check if the form is submitted for OTP verification
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entered OTP
    $enteredOTP = $_POST["enteredotp"];
    $_SESSION["enteredOTP"] = $enteredOTP;

    // Retrieve the stored OTP from the session
    $storedOTP = $_SESSION["otp"];

  // Retrieve the stored OTP from the session
  $storedOTP = $_SESSION["otp"];
  $enteredOTP = $_SESSION["enteredOTP"];


   













    if ($enteredOTP == $storedOTP) {
        // OTP is verified successfully
        // Redirect to register.php for final registration
        header("Location: register.php");
        exit;
    } else {
        // Incorrect OTP entered, show error message
        $error = "Invalid OTP. Please try again.";
    }
}
?>

<!-- HTML form in verify_otp.php -->

