<?php
session_start(); // Start the session

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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $country = $_POST["country"];
    

    // Sanitize the input (optional but recommended)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT email_id FROM users WHERE email_id = '$email'";
    $checkEmailResult = $conn->query($checkEmailQuery);
    if ($checkEmailResult->num_rows > 0) {
        // Email already exists, redirect back to sign-up page with error parameter
        header("Location: sign-in.php?error=exists");
        exit;
    } else {

        // Insert the form data into the database
        $sql = "INSERT INTO users (email_id, password,birthdate,country) VALUES ('$email', '$password','$birthdate','$country')";

        if ($conn->query($sql) === TRUE) {
            echo "User registered successfully!";

            // Store user data in session variables for future use
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;

            // Redirect to another page after successful registration
            header("Location: Home.php");
            exit;
        } else {
            echo "Error occurred: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>
