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

// Check if the user is authenticated
if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    // Query the database to retrieve user information
    $sql = "SELECT * FROM users WHERE email_id = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, retrieve user information
        $row = $result->fetch_assoc();
        $emailParts = preg_split('/[.@]/', $email);
        $firstName = $emailParts[0];
        $email = $row["email_id"];
        $birthdate = $row["birthdate"];
        $country = $row["country"];
        $_SESSION["birthdate"] = $birthdate;
        $_SESSION["country"] = $country;

        // Display the navbar and footer
   

        // Display user information
        echo "<h1>Welcome, $firstName!</h1>";
        echo "<p>Email: $email</p>";
    } else {
        // User not found, redirect to login page
        header("Location: sign-in.php");
        exit;
    }
} else {
    // User not authenticated, redirect to login page
    header("Location: sign-in.php");
    exit;
}

// Close the connection
$conn->close();
?>
