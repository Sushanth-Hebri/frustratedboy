<?php
// Database connection setup
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's input from the query parameter
$query = $_GET["query"];

// Query the songs table for matching titles
$sql = "SELECT title FROM songs WHERE title LIKE '%$query%'";
$result = $conn->query($sql);

$songs = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = $row;
    }
} else {
    // If no matches found in songs, search in albums
    $sql = "SELECT name AS title FROM album WHERE name LIKE '%$query%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $songs[] = $row;
        }
    }
}

// Return the matching titles as JSON
header('Content-Type: application/json');
echo json_encode($songs);

$conn->close();
?>
