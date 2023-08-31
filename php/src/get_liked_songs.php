<?php
// Include the database configuration file
include 'config.php';

// Get the email_id from the AJAX request
$emailId = $_POST['emailId'];

// Prepare and execute the SQL query to get the liked_id for the given email_id
$stmt = $conn->prepare("SELECT liked_id FROM liked WHERE email_id = ?");
$stmt->bind_param("s", $emailId);
$stmt->execute();
$result = $stmt->get_result();

// Check if the email_id exists in the liked table
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $likedId = $row['liked_id'];

    // Prepare and execute the SQL query to get the song_ids associated with the liked_id
    $stmt = $conn->prepare("SELECT song_id FROM liked_song WHERE liked_id = ?");
    $stmt->bind_param("i", $likedId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch all the song_ids associated with the liked_id
    $songIds = array();
    while ($row = $result->fetch_assoc()) {
        $songIds[] = $row['song_id'];
    }

    // Return the song_ids as JSON response
    echo json_encode($songIds);
} else {
    // Return an empty array if no liked_id is found for the given email_id
    echo json_encode(array());
}

$stmt->close();
$conn->close();
?>
