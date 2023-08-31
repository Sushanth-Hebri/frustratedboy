<?php
// Start the session
session_start();

// Check if the song_id parameter is set
if (isset($_GET['song_id'])) {
  // Retrieve the song_id from the query parameter
  $songId = $_GET['song_id'];

  // Store the song_id in the session variable
  $_SESSION['add_to_playlist_song_id'] = $songId;

  // Return a success message or any other response as needed
  echo 'Song ID stored in session variable bro enti bro: ' . $songId;
} else {
  // Return an error message or handle the case when song_id parameter is not set
  echo 'Error: Song ID parameter not found';
}
?>
