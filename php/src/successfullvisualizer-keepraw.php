<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>singlesongplayer</title>
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
      /* background: rgb(62, 30, 242); */
      /* background: linear-gradient(
		315deg,
		rgba(62, 30, 242, 1) 0%,
		rgba(174, 128, 214, 1) 100%
	); */
      font-family: 'Yanone Kaffeesatz', sans-serif;
      overflow: hidden;

    }

    .main-wrapper {
      background-color: #1f1f1f;
      color: white;
      height: 450px;
      width: 80vw;
      max-width: 300px;
      z-index: 4;
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

    .header>i {
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
      height: 60px;
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
      color: white;
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
      margin-top: 10px;
    }

    .player-wrapper>i {
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

    .volume-wrapper>i {
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

   

    /* #thefile {
      position: absolute;
      top: 10px;
      left: 230px;
      z-index: 300;
    }


    #canvas {
      position: fixed;
      left: 0;
      top: 0;

      width: 100%;
      height: 100%;
    }

    #audio {
      display: none;
    } */

    /* #currSong{
  z-index: 9999;
} */
#canvas {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    }

    audio {
      display: none;
    }

  </style>
</head>

<body>
 
<canvas id="canvas"></canvas>
  <audio id="audio">
    Your browser does not support the audio element.
  </audio>
  

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
        <span class="song-info-title" id="songTitle"></span><br>
        <span class="song-info-artist" id="songArtist"></span><br>
        <span class="song-info-album" id="songAlbum"></span>
      </div>
    </div>
    <div class="player-wrapper" id="audios">
      <i class="fas fa-circle-notch"></i>
      <i class="fas fa-caret-left player-move-btn" onclick="prevSong()"></i>
      <i class="fas fa-play-circle player-state-btn"  id="startButton" onclick="toggleState()"></i>
      <i class="fas fa-caret-right player-move-btn" onclick="nextSong()"></i>
      <i class="fas fa-random"></i>
    </div>
  </div>

  <script>
    // Get the song_id from the URL parameter
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const songId = urlParams.get('song_id');
    console.log(songId);
    // Function to fetch song details from the XAMPP server
    function fetchSongDetails(songId) {
      // Replace with your XAMPP server configuration
      const serverUrl = 'http://localhost/17-06-23';

      // Make a GET request to fetch the song details
      fetch(`${serverUrl}/songdetailsbysongid.php?song_id=${songId}`)
        .then(response => response.json())
        .then(data => {
          if (data.length > 0) {
            const song = data[0];
            document.getElementById('songTitle').innerHTML = song.title;
            document.getElementById('songArtist').innerHTML = song.artist;
            document.getElementById('songAlbum').innerHTML = song.genre;
            document.querySelector('.song-thumb').style.backgroundImage = `url(${songId}.jpg)`;
            // document.getElementById('currSong').src = '1.mp3';

          } else {
            console.log('No song found with the given ID.');
          }
        })




    }

    // Fetch song details when the page loads
    window.addEventListener('DOMContentLoaded', () => {
      if (songId) {
        fetchSongDetails(songId);
      } else {
        console.error('song_id is missing from the URL');
      }
    });


    // Add your other JavaScript functions here
  </script>
  <script>
    var currIndex = 0;
    var isPlaying = false;
    var currSong = new Audio();
    currSong.src = songId + '.mp3'; // Set the source of the audio file
    // Play the audio


    var songThumb = document.querySelector(".song-thumb");
    var songTitle = document.querySelector(".song-info-title");
    var songArtist = document.querySelector(".song-info-artist");
    var songAlbum = document.querySelector(".song-info-album");

    var stateButton = document.querySelector(".player-state-btn");
    var prevButton = document.querySelector(".player-move-btn.fa-caret-left");
    var nextButton = document.querySelector(".player-move-btn.fa-caret-right");
    var songProgressBar = document.querySelector(".song-progress-value");
    var volumeSlider = document.querySelector("#volume-slider");
    var volumeTrail = document.querySelector(".volume-trail");

    function changeSong() {
      let currentStatus = isPlaying;
      if (currentStatus) toggleState();
      songTitle.innerHTML = songsList[currIndex]["title"];
      songArtist.innerHTML = songsList[currIndex]["artist"];
      songAlbum.innerHTML = songsList[currIndex]["album"];
      songThumb.style.backgroundImage = `url(${songsList[currIndex]["thumb"]})`;
      currSong.src = songsList[currIndex]["link"];

      if (currentStatus) toggleState();
    }

    function nextSong() {
      currIndex++;
      if (currIndex >= songsList.length) currIndex = 0;
      changeSong();
    }

    function prevSong() {
      currIndex--;
      if (currIndex < 0) currIndex = songsList.length - 1;
      changeSong();
    }

    function toggleState() {
      if (isPlaying) {
        currSong.pause();
       
        stateButton.classList = "fas fa-play-circle player-state-btn";
      } else {
        currSong.play();
    
        stateButton.classList = "fas fa-pause-circle player-state-btn";
      }
      isPlaying = !isPlaying;
    }

    function adjustVolume(currVol) {
      currSong.volume = currVol;
      if (currVol !== "0" && currVol !== 0)
        volumeTrail.style.width = `${currVol * 100 - 2}%`;
      else volumeTrail.style.width = "0%";
      volumeSlider.value = currVol;
    }

    currSong.addEventListener("timeupdate", () => {
      let currPosition = (currSong.currentTime / currSong.duration) * 600;
      if (!isNaN(currPosition))
        songProgressBar.setAttribute(
          "stroke-dasharray",
          `${currPosition} ${600 - currPosition}`
        );
      else songProgressBar.setAttribute("stroke-dasharray", "0 600");
    });
  </script>

<script>
    window.onload = function() {
      var audio = document.getElementById("audio");
      var startButton = document.getElementById("startButton");
      var canvas = document.getElementById("canvas");
      var ctx = canvas.getContext("2d");

      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;

      startButton.addEventListener("click", function() {
        var songID = getSongIDFromURL();
        var songURL = songID + ".mp3";
        audio.src = songURL;

        var context = new AudioContext();
        var src = context.createMediaElementSource(audio);
        var analyser = context.createAnalyser();
        var gainNode = context.createGain();

        src.connect(analyser);
        analyser.connect(gainNode);
        gainNode.connect(context.destination);

        analyser.fftSize = 256;
        var bufferLength = analyser.frequencyBinCount;
        var dataArray = new Uint8Array(bufferLength);

        var WIDTH = canvas.width;
        var HEIGHT = canvas.height;
        var barWidth = (WIDTH / bufferLength) * 2.5;
        var barHeight;
        var x = 0;

        function renderFrame() {
          requestAnimationFrame(renderFrame);
          x = 0;
          analyser.getByteFrequencyData(dataArray);

          ctx.fillStyle = "#000";
          ctx.fillRect(0, 0, WIDTH, HEIGHT);

          for (var i = 0; i < bufferLength; i++) {
            barHeight = dataArray[i];

            var r = barHeight + (25 * (i / bufferLength));
            var g = 250 * (i / bufferLength);
            var b = 50;

            ctx.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
            ctx.fillRect(x, HEIGHT - barHeight, barWidth, barHeight);

            x += barWidth + 1;
          }
        }

        // audio.volume = 0;
        gainNode.gain.value = 0;
        audio.play()
          .then(function() {
            renderFrame();
          })
          .catch(function(error) {
            console.error("Failed to play audio: ", error);
          });
      });

      function getSongIDFromURL() {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get("song_id");
      }
    };
  </script>

















</body>

</html>