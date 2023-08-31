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

// Retrieve the song_id from the query parameters
$songId = $_GET['song_id'];

// Prepare a statement to fetch the song details from the songs table based on the song_id
$stmt = $conn->prepare("SELECT s.*
                        FROM songs s
                        WHERE s.song_id = ?");
$stmt->bind_param("i", $songId);
$stmt->execute();
$result = $stmt->get_result();

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
$stmt->close();
$conn->close();

// Return the song details as JSON response
header('Content-Type: application/json');
echo json_encode($songDetails);
?>
