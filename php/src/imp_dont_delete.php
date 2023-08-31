<?php
// Extract the album ID from the URL query parameters
$albumId = $_GET['album_id'];

// Fetch the song details using PHP and MySQL
$response = file_get_contents("http://localhost/17-06-23/get_song_details.php?album_id=" . urlencode($albumId));

// Process the fetched song details and list the songs
$songDetails = json_decode($response, true);

echo '<div class="containerli">';
echo '<div id="songList">';
foreach ($songDetails as $song) {
    echo '
    <div class="outer">' .
        '<div class="left">' .
        '<img src="' . $song['song_id'] . '.jpg" alt="like" class="leftpng">' .
        '</div>' .
        '<div class="right">' .
        '<div class="title">' .
        '<h1>' . $song['title'] . '</h1>' .
        '</div>' .
        '<div class="count">' .
        '<h6>' . $song['artist'] . '</h6>' .
        '</div>' .
        '</div>' .
        '<div class="option">' .
        '<span class="material-symbols-outlined more">more_vert</span>' .
        '<div class="dropdown-menu">' .
        '<ul>' .
        '<li class="addToPlaylist" data-song-id="' . $song['song_id'] . '">Add to playlist</li>' .
        '</ul>' .
        '</div>' .
        '</div>' .
        '</div>';
}
echo '</div>'; // Close songList div
echo '</div>'; // Close container div
?>