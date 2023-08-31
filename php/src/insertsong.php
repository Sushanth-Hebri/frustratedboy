<!DOCTYPE html>
<html>
<head>
  <title>Add Song</title>
</head>
<body>
  <h2>Add Song</h2>
  <form method="post" action="add_song.php">
    <label for="song_id">Song ID:</label>
    <input type="number" name="song_id" id="song_id" required><br>

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="artist">Artist:</label>
    <input type="text" name="artist" id="artist" required><br>

    <label for="genre">Genre:</label>
    <input type="text" name="genre" id="genre" required><br>

    <input type="submit" name="submit" value="Add Song">
  </form>
</body>
</html>
