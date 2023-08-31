<?php
// Connect to your XAMPP MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_player";

// Get the song ID from the query string
$songId = $_GET['song_id'];

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement to fetch the song details
$sql = "SELECT title, artist FROM songs WHERE song_id = $songId";

// Execute the query
$result = $conn->query($sql);

// Prepare the response object
$response = array();

if ($result->num_rows > 0) {
    // Fetch the row and store the title and artist in the response object
    $row = $result->fetch_assoc();
    $response['success'] = true;
    $response['title'] = $row['title'];
    $response['artist'] = $row['artist'];
    $response['file'] = $songId . '.mp3';
} else {
    // Song not found
    $response['success'] = false;
}

// Close the database connection
$conn->close();

// Send the JSON response
echo json_encode($response);
?>
