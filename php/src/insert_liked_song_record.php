<?php
// Include the database configuration file
include 'config.php';

// Get the email_id and song_id from the AJAX request
$emailId = $_POST['emailId'];
$songId = $_POST['songId'];

// Prepare and execute the SQL query to insert the record into the liked_song table
$stmt = $conn->prepare("INSERT INTO liked_song (liked_id, song_id) VALUES (?, ?)");
$stmt->bind_param("ii", $likedId, $songId);

// Get the liked_id from the liked table using the email_id
$likedId = 0; // Initialize with a default value
$getLikedIdStmt = $conn->prepare("SELECT liked_id FROM liked WHERE email_id = ?");
$getLikedIdStmt->bind_param("s", $emailId);
$getLikedIdStmt->execute();
$getLikedIdResult = $getLikedIdStmt->get_result();
if ($getLikedIdResult->num_rows > 0) {
    $likedRow = $getLikedIdResult->fetch_assoc();
    $likedId = $likedRow['liked_id'];
}

// Execute the insert query with the obtained liked_id and song_id
$stmt->execute();

$getLikedIdStmt->close();
$stmt->close();
$conn->close();
?>
