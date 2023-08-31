<?php
if (isset($_POST['submit'])) {
  // Retrieve form data
  $song_id = $_POST['song_id'];
  $title = $_POST['title'];
  $artist = $_POST['artist'];
  $genre = $_POST['genre'];

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web_player";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the SQL statement
  $sql = "INSERT INTO songs (song_id, title, artist, genre) VALUES ('$song_id', '$title', '$artist', '$genre')";

  if ($conn->query($sql) === TRUE) {
    echo "Song added successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close the database connection
  $conn->close();
}
?>
