<?php
// Check if the query parameter exists in the URL
if (isset($_GET["query"])) {
    $query = $_GET["query"];

    // Database connection setup
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_player";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query the songs table for matching titles
    $sqlSongs = "SELECT song_id, title FROM songs WHERE title LIKE '%$query%'";
    $resultSongs = $conn->query($sqlSongs);

    $songs = array();
    if ($resultSongs->num_rows > 0) {
        while ($row = $resultSongs->fetch_assoc()) {
            $songs[] = $row;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Song Page</title>
    <!-- Your styles and other meta tags -->
</head>
<body>
    <?php if (isset($query)) : ?>
        <h1>Songs Related to "<?php echo $query; ?>"</h1>
        <?php if (count($songs) > 0) : ?>
            <ul>
                <?php foreach ($songs as $song) : ?>
                    <li>
                        <a href="singlesong-9.php?song_id=<?php echo $song['song_id']; ?>">
                            <?php echo $song['title']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>No related songs found.</p>
        <?php endif; ?>
    <?php else : ?>
        <p>No query parameter found in the URL.</p>
    <?php endif; ?>
</body>
</html>
