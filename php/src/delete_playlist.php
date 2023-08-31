<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
  // Redirect the user to the login page or display an error message
  header('Location: sign-in.php');
  exit;
}

// Fetch the email_id and password from the session
$email_id = $_SESSION['email'];
$password = $_SESSION['password'];

// Database credentials
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";

// Create a connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$connection) {
  die('Database connection failed: ' . mysqli_connect_error());
}

// Retrieve the playlist_id from the URL parameter
if (isset($_GET['playlist_id'])) {
  $playlist_id = $_GET['playlist_id'];

  // Create the SQL query to delete the playlist
  $query = "DELETE FROM playlist WHERE playlist_id = '$playlist_id' AND email_id = '$email_id'";

  // Execute the query
  $result = mysqli_query($connection, $query);

  // Check if the query was successful
  if ($result) {
    // Perform any additional actions or display a success message

    // Redirect the user back to the library page
    header('Location: library.php');
    exit;
  }
}

// Close the database connection
mysqli_close($connection);
?>
