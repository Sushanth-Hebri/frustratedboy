<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            @import url('https://fonts.googleapis.com/css?family=Vibes&display=swap');
@import url('https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700&display=swap');

body {
	margin: 0;
	padding: 0;
	height: 100vh;
	width: 100vw;
	display: flex;
	justify-content: center;
	align-items: center;
	background: rgb(62, 30, 242);
	background: linear-gradient(
		315deg,
		rgba(62, 30, 242, 1) 0%,
		rgba(174, 128, 214, 1) 100%
	);
	font-family: 'Yanone Kaffeesatz', sans-serif;
}

.main-wrapper {
	background-color: #1f1f1f;
	color: white;
	height:450px;
	width: 80vw;
	max-width: 300px;
	
	margin: auto;
	border-radius: 1rem;
	display: flex;
	flex-flow: column wrap;
	
}

.header {
	display: flex;
	box-sizing: border-box;
	justify-content: space-between;
	margin: 1.5rem;
	color: #f0f0f0;
}

.header > i {
	cursor: pointer;
}

.song-wrapper {
	display: flex;
	flex-flow: column wrap;
	align-items: center;
	justify-content: center;
}

.song-thumb-wrapper {
	position: relative;
	width: 200px;
	height: 200px;
}

.song-thumb {
	width: 160px;
	height: 160px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	border-radius: 50%;
	background-color: white;
	background-image: url("https://raw.githubusercontent.com/MoosaSaadat/music-player/master/img.jpg");
	background-position: center center;
	background-size: cover;
	transition: all ease-in-out 0.5s;
}

.song-progress {
	transform: rotate(-90deg);
	transition: all linear 0.1s;
}

.song-info {
	text-align: center;
	margin-top: 1rem;
}

.song-info-title {
	display: inline-block;
	color: rgba(174, 128, 214, 1);
	text-transform: uppercase;
	letter-spacing: 10px;
	margin-right: -10px;
	font-size: 20px;
	font-weight: bold;
	font-family: 'Vibes', cursive;
}

.song-info-artist,
.song-info-album {
	color: #f0f0f0;
	letter-spacing: 1px;
	font-size: 16px;
}

.song-info-album {
	color: #8f8f8f;
}

.player-wrapper {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	font-size: 1rem;
	color: #8f8f8f;
    margin-top:10px;
}

.player-wrapper > i {
	cursor: pointer;
}

.player-move-btn {
	font-size: 2.5rem;
	color: #f0f0f0;
}

.player-state-btn {
	font-size: 3rem;
	color: #ae80d6;
}

.volume-wrapper {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	margin: 1.5rem;
}

.volume-wrapper > i {
	width: 20px;
	cursor: pointer;
}

.volume-bar {
	width: 60%;
	position: relative;
}

.volume-bar #volume-slider {
	-webkit-appearance: none;
	outline: none;
	margin: 0;
	width: 100%;
	height: 5px;
	border-radius: 10px;
	background-color: #4d3f61;
}

.volume-bar #volume-slider::-webkit-slider-thumb {
	-webkit-appearance: none;
	width: 9px;
	height: 9px;
	border-radius: 50%;
	background-color: #ae80d6;
	box-shadow: 0 0 3px #1f1f1f;
	cursor: pointer;
}

.volume-bar .volume-trail {
	position: absolute;
	top: 7px;
	left: 0;
	width: 50%;
	height: 5px;
	border-radius: 10px;
	background-color: #ae80d6;
	transition: width linear 0.1s;
}

    </style>
</head>
<body>
    <div class="main-wrapper">
    <div class="main-wrapper">
        <div class="header">
          <i class="fas fa-chevron-left"></i>
          <i class="far fa-heart"></i>
        </div>
        <div class="song-wrapper">
          <div class="song-thumb-wrapper">
            <svg class="song-progress" width="200" height="200" viewBox="0 0 200 200">
              <circle class="song-progress-meter" cx="100" cy="100" r="90" stroke="#4d3f61" stroke-width="10" fill="none" />
              <circle class="song-progress-value" cx="100" cy="100" r="90" stroke="#ae80d6" stroke-width="10" fill="none" stroke-dasharray="0 600" stroke-linecap="round" />
            </svg>
            <div class="song-thumb"></div>
          </div>
          <div class="song-info">
            <span class="song-info-title">Alone</span><br>
            <span class="song-info-artist">Marshmellow</span><br>
            <span class="song-info-album">Alone, 2016</span>
          </div>
        </div>
        <div class="player-wrapper">
          <i class="fas fa-circle-notch"></i>
          <i class="fas fa-caret-left player-move-btn" onclick="prevSong()"></i>
          <i class="fas fa-play-circle player-state-btn" onclick="toggleState()"></i>
          <i class="fas fa-caret-right player-move-btn" onclick="nextSong()"></i>
          <i class="fas fa-random"></i>
        </div>
        <!-- <div class="volume-wrapper">
          <i class="fas fa-volume-off" style="text-align: right" onclick="adjustVolume(0)"></i>
          <div class="volume-bar">
            <input type="range" name="volume-slider" id="volume-slider" min="0" max="1" step="0.1" value="0.5" onchange="adjustVolume(event.target.value)">
            <div class="volume-trail"></div>
          </div>
          <i class="fas fa-volume-up" onclick="adjustVolume(1)"></i>
        </div> -->
      </div>

    <script>
    // PHP code to fetch song details using song_id
    <?php
        // Get the song_id from the URL parameter or any other method you're using
        $song_id = $_GET['song_id'];

        // Assuming you have a database connection, perform a query to retrieve the song details based on the song_id
        // Replace the below code with your own database query logic

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

      // Escape the song_id (song link) to prevent SQL injection
      $escaped_song_id = $conn->real_escape_string($song_id);

      // Fetch the song details using the song_id (song link)
      $sql = "SELECT * FROM songs WHERE song_id = '$song_id'";
      $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // If the song details are found, fetch the details and assign them to JavaScript variables
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $artist = $row["artist"];
            // $album = $row["album"];
            // $link = $row["link"];
            // $thumb = $row["thumb"];

            // Echo the JavaScript code to assign the fetched song details to the corresponding elements in the HTML
            echo "songTitle.innerHTML = '$title';";
            echo "songArtist.innerHTML = '$artist';";
            echo "songAlbum.innerHTML = '$album';";
            echo "songThumb.style.backgroundImage = 'url($thumb)';";
            echo "currSong.src = '$link';";
        }

        $conn->close();
    ?>
    </script>
</body>
</html>
