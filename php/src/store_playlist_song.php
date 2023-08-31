<?php
// Start the session
session_start();


// Retrieve the playlist_id from the query parameter
$playlistId = $_GET['playlist_id'];

// Store the playlist_id in the session variable
$_SESSION['add_to_playlist_playlist_id'] = $playlistId;

// Check if the session variable is set
if (isset($_SESSION['add_to_playlist_playlist_id']) ) {
    // Retrieve the session variable values
   
    $songId = $_SESSION['add_to_playlist_song_id'];

    $emailId = $_SESSION['email'];

    // Perform the database operations to store the session variable values
    $success = storeSessionVariables($playlistId, $songId,$emailId);

    if ($success) {
        // Return a success message or perform any additional actions as needed
        echo 'Session variables stored in the database: playlist_id=' . $playlistId . ', song_id=' . $songId;
    } else {
        // Return an error message or handle the case when the database operation fails
        echo 'Error: Failed to store session variables in the database';
    }
} else {
    // Return an error message or handle the case when session variables are not set
    echo 'Error: Session variables not found';
}

// Function to store session variable values in the database table
function storeSessionVariables($playlistId, $songId, $emailId) {
    // Replace the database credentials with your actual values
    $servername = "db";
    $username = "root";
    $password = "MYSQL_ROOT_PASSWORD";
    $port = '3306';
    $dbname = "web_player";

    // Create a new MySQLi instance
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($mysqli->connect_errno) {
        // Handle connection error
        die("Database connection failed: " . $mysqli->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $mysqli->prepare("INSERT INTO new_playlist_song(playlist_id, song_id,email_id) VALUES (?, ?, ?)");

    // Bind the parameters
    $stmt->bind_param("sss", $playlistId, $songId,$emailId);

    // Execute the statement
    $success = $stmt->execute();
    if ($success && $stmt->affected_rows > 0) {
        echo 'Session variables stored in the database: playlist_id=' . $playlistId . ', song_id=' . $songId;
    } else {
        echo 'Error: Failed to store session variables in the database. ' . $stmt->error;
    }
    
    // Close the statement and database connection
    $stmt->close();
    $mysqli->close();

    // Return true on success, false on failure
    return $success;
}
?>
