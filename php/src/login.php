<?php
session_start(); // Start the session

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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Sanitize the input (optional but recommended)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check if the email and password exist in the database
    $sql = "SELECT * FROM users WHERE email_id = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Authentication successful
        // echo "Authentication successful!";

        // Store user data in session variables for future use
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        // Redirect to another page after successful login
        header("Location: Home.php");
        exit;
    } else {


        // Authentication failed
        // header("Location: sign-in.php");
        header("Location: sign-in.php?err=invalid");
        exit;
    }
}

// Close the connection
$conn->close();
?>
