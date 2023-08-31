<?php
// Include the database configuration file
include 'config.php';

// Get the email_id and song_id from the AJAX request
$emailId = $_POST['emailId'];
$songId = $_POST['songId'];

// Prepare and execute the SQL query to fetch the liked_id for the email_id from the liked table
$stmt = $conn->prepare("SELECT liked_id FROM liked WHERE email_id = ?");
$stmt->bind_param("s", $emailId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $likedId = $row['liked_id'];

    // Now that we have the liked_id, we can remove the record from the liked_song table
    $removeStmt = $conn->prepare("DELETE FROM liked_song WHERE liked_id = ? AND song_id = ?");
    $removeStmt->bind_param("ii", $likedId, $songId);
    $removeStmt->execute();

    $removeStmt->close();
}

$stmt->close();
$conn->close();
?>
