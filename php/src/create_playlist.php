<?php
session_start();

// Retrieve email ID from session variable
$emailId = $_SESSION['email'];

// Retrieve playlist name from POST data
$playlistName = $_POST['playlistName'];




// Database credentials
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";
// Establish a database connection
// Replace "your_hostname", "your_username", "your_password", and "your_database" with your actual database credentials
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Insert the new playlist into the database
$insertSql = "INSERT INTO playlist (email_id, name) VALUES ('$emailId', '$playlistName')";
if ($conn->query($insertSql) === TRUE) {
    echo "success";
} else {
  echo "error";
}

$conn->close();
?>
