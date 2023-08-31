<?php
// Establish a connection to your MySQL database
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// Retrieve the album_id from the query parameters
$albumId = $_GET['album_id'];

// Fetch the song details from the songs table based on the album_id
$sql = "SELECT s.*
        FROM songs s
        JOIN album_song als ON s.song_id = als.song_id
        WHERE als.album_id = $albumId";

$result = $conn->query($sql);

$songDetails = array();

// Process the fetched song details
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Store the song details in an array
        $songDetails[] = array(
            'song_id' => $row['song_id'],
            'title' => $row['title'],
            'artist' => $row['artist'],
            'genre' => $row['genre']
        );
    }
}

// Close the database connection
$conn->close();

// Return the song details as JSON response
header('Content-Type: application/json');
echo json_encode($songDetails);
?>
