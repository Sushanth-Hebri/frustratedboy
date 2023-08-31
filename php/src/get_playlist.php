<?php
session_start(); // Start the session (if not already started)

// Retrieve the session variable email
$email = $_SESSION['email'];

// Connect to your database
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
  // Handle connection error
  die("Database connection failed: " . $mysqli->connect_error);
}

// Prepare the SQL query
$query = "SELECT playlist_id, name FROM playlist WHERE email_id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $email);

// Execute the query and fetch the results
$stmt->execute();
$result = $stmt->get_result();

$playlists = [];
while ($row = $result->fetch_assoc()) {
  $playlists[] = array(
    'playlist_id' => $row['playlist_id'],
    'name' => $row['name']
  );
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();

// Return the playlists as JSON
header('Content-Type: application/json');
echo json_encode($playlists);
?>
