<?php
// This is the container name
 // MySQL default port

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
$query = isset($_GET["query"]) ? htmlspecialchars($_GET["query"]) : "";


// Query the songs table for matching titles
$sqlSongs = "SELECT song_id AS item_id, title, 'song' AS item_type FROM songs WHERE title LIKE '%$query%'";
$resultSongs = $conn->query($sqlSongs);


// Query the songs table for matching titles
$sqlSongs = "SELECT song_id AS item_id, title, 'song' AS item_type FROM songs WHERE title LIKE '%$query%'";
$resultSongs = $conn->query($sqlSongs);

// Query the albums table for matching album names
$sqlAlbums = "SELECT album_id AS item_id, name AS title, 'album' AS item_type FROM album WHERE name LIKE '%$query%'";
$resultAlbums = $conn->query($sqlAlbums);

if ($resultSongs->num_rows > 0) {
    $song = $resultSongs->fetch_assoc();
    
    // Check if the matched song title contains the query as a substring with at least 4 sequential characters
    if (strpos(strtolower($song["title"]), strtolower($query)) !== false && hasSequentialCharacters($song["title"], $query, 4)) {
        // Redirect to the song page with the song_id
        header("Location: singlesong-9.php?song_id=" . $song["item_id"]);
    } else {
        // Redirect to the song page with the query
        header("Location: search_result_songs.php?query=" . urlencode($query));
    }
} elseif ($resultAlbums->num_rows > 0) {
    // Redirect to the album list page with the album_id
    $album = $resultAlbums->fetch_assoc();
    header("Location: list.php?album_id=" . $album["item_id"]);
} else {
    // No matches found, redirect to song_page.php with the query
    header("Location: search_result_songs.php?query=" . urlencode($query));
}

// Function to check if a string has at least $length sequential characters from $query
function hasSequentialCharacters($string, $query, $length) {
    $pattern = '/'.implode('.*', str_split($query)).'/i';
    return preg_match($pattern, $string) && strlen($query) >= $length;
}
$conn->close();
?>
