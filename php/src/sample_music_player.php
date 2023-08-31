<!DOCTYPE html>
<html>
<head>
  <title>Music Player</title>
  <style>
    .player-container {
      text-align: center;
    }
    
    .song-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .song-artist {
      font-size: 18px;
      color: #888;
    }
    
    .play-button {
      margin-top: 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
    
    .song-image {
      width: 100px;
      height: 100px;
      margin: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="player-container">
    <div class="song-title" id="songTitle"></div>
    <div class="song-artist" id="songArtist"></div>
    <button class="play-button" id="playButton">Play</button>
    <input type="hidden" id="songId" value="1">
    <img class="song-image" id="1" src="1.jpg">
    <img class="song-image" id="2" src="2.jpg">
    <img class="song-image" id="3" src="3.jpg">
    <img class="song-image" id="4" src="4.jpg">
  </div>

  <script>
    // Get DOM elements
const songTitleElement = document.getElementById("songTitle");
const songArtistElement = document.getElementById("songArtist");
const playButton = document.getElementById("playButton");
const songIdElement = document.getElementById("songId");
const songImages = document.getElementsByClassName("song-image");

// Create an audio element
const audio = new Audio();

// Function to fetch song details and play the song
function fetchAndPlaySong(songId) {
  // Send an AJAX request to a PHP script to fetch the song details
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "fetch_song_details.php?song_id=" + songId, true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);
      if (response.success) {
        // Display the song details
        songTitleElement.textContent = response.title;
        songArtistElement.textContent = response.artist;
        
        // Update the audio source
        audio.src = response.file;
        
        // Play the song
        audio.play();
      }
    }
  };
  xhr.send();
}

// Play button click event handler
playButton.addEventListener("click", function() {
  if (audio.paused) {
    audio.play();
    playButton.textContent = "Pause";
  } else {
    audio.pause();
    playButton.textContent = "Play";
  }
});

// Function to handle the end of the song
audio.addEventListener("ended", function() {
  // Reset the song details
  songTitleElement.textContent = "";
  songArtistElement.textContent = "";
  
  // Reset the audio source
  audio.src = "";
  
  // Reset the play button text
  playButton.textContent = "Play";
});

// Add click event listeners to the song images
Array.from(songImages).forEach(function(songImage) {
  songImage.addEventListener("click", function() {
    const songId = this.id;
    fetchAndPlaySong(songId);
  });
});
  </script>
</body>
</html>
