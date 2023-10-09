<?php
session_start();
$calledAlbum = isset($_SESSION['calledalbum']) ? $_SESSION['calledalbum'] : '';

if (!empty($calledAlbum)) {
    echo '<script>console.log("Session is set - success!");</script>';
} else {
    echo '<script>console.log("Session not set");</script>';
}

echo 'hey';
?>


<!DOCTYPE html>
<html lang="en">

<head><link rel="icon" href="logo.png" type="icon/x-image">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--Google Fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,200" />

    <title>Heat Beat-Feel the music</title>
    <link rel="icon" href="logo.png" type="icon/x-image">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Cinzel:wght@700&family=Mukta&family=Orbitron:wght@700&family=Pacifico&family=Philosopher:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Cinzel:wght@700&family=Lora&family=Mukta&family=Orbitron:wght@700&family=Pacifico&family=Philosopher:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&family=Roboto+Slab:wght@300&display=swap');

        body {
            background: linear-gradient(to bottom right, #000000, #242323e9);

        }

        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #202020;
            padding: 10px 0;
            z-index: 999;
            height: 70px;
            display: flex;
            align-items: center;
            box-shadow: 3px 3px 20px 0px black;
        }

        #navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
            width: 100%;
            display: flex;
            align-items: center;
        }

        #navbar li {
            display: inline-block;
            margin-right: 20px;
            font-size: 20px;
        }

        #navbar li:nth-child(1) {
            margin-left: 90px;
        }

        #navbar li:nth-child(2) {
            margin-left: 30px;
        }

        #navbar li:nth-child(3) {
            margin-left: 60px;
        }

        #navbar li:nth-child(4) {
            margin-left: 30px;
        }

        #navbar li:nth-child(5) {
            margin-left: 170px;
        }

        #navbar li:nth-child(6) {
            margin-left: 60px;
        }

        #navbar a {
            text-decoration: none;
            color: #fef2f2;
            font-weight: bold;
            padding: 5px 10px;
            transition: all 0.3s ease;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input[type="text"] {
            padding: 10px;
            border: 0px solid #ccc;
            border-radius: 4px;
            width: 200px;
        }

        .search-form button[type="submit"] {
            padding: 8px 12px;
            background-color: #686565;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-left: 5px;
            cursor: pointer;
        }

        .logo {
            height: 70px;
            width: 70px;
            border-radius: 50%;
            /* Makes the border circular */
            border: 2px solid #ccc;
            transition: border-color 0.3s ease;
        }

        .logo:hover {
            border-color: #7606e7;
            cursor: pointer;
        }

        .material-symbols-outlined {
            color: white;
            font-size: 30px;
        }

        .premium {
            background-color: rgb(255, 255, 255);
            color: rgb(4, 4, 4);
            width: 200px;
            border-radius: 40px / 80px;
            box-shadow: 2px 2px 4px 2px rgb(72, 67, 67);
        }

        .premium:hover {
            box-shadow: 2px 2px 4px 2px rgb(83, 98, 59);
        }

        .container {
            width: 100%;
            overflow-x: auto;
        }

        .card-wrapper {
            white-space: nowrap;
        }

        .container::-webkit-scrollbar {
            width: 0;
            height: 0;
            background-color: transparent;
        }

        .card {
            display: inline-block;
            width: 200px;
            height: 200px;
            margin-right: 30px;
            background-color: #ccc;
            text-align: center;
            line-height: 200px;
            font-size: 20px;
        }

        .card:hover {
            cursor: pointer;

        }

        .card-image {
            height: 198px;
            background-position: center;
            background-size: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            position: relative;
        }

        .card-image:hover {
            opacity: 0.9;
        }

        .card-heading {
            margin: 10px;
            font-size: 18px;
            font-weight: bold;
            color: white;
        }

        .breadcrumb {
            z-index: 3;
            position: fixed;
            margin-top: 28px;
            width: 200px;
            height: 50px;
            background-color: transparent;
            margin-left: 30px;
            display: flex;

        }

        .material-symbols-outlined {
            background-color: black;
            border-radius: 50%;
            cursor: pointer;
            padding: 3px;
        }

        .sidebar {
            width: 200px;
            background-color: #282727;
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 200px;
            padding: 10px;
            border-radius: 6%;
        }

        .musicoftheday {
            background-color: #5b5959;
            height: 50px;
            margin-bottom: 20px;
            border-radius: 6%;
        }

        .musicoftheday:hover {
            cursor: pointer;
        }

        .imgs {
            display: flex;
            object-fit: cover;
            height: 50px;
            width: 40px;
        }

        .two {
            display: flex;
            object-fit: cover;
            height: 50px;
            width: 70px;
        }

        .three {
            width: auto;
            color: white;
        }

        .podcast {
            background-color: #5b5959;
            height: 50px;
            border-radius: 6%;
        }

        .podcast:hover {
            cursor: pointer;
        }

        .pspan {
            color: white;
            font-size: 20px;
        }

        .top {
            display: flex;

        }

        .carousel {
            width: 800px;
            height: 300px;
        }

        .auto {
            width: 800px;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 250px;
            margin-top: -80px;

        }

        #carouselExampleIndicators {
            display: flex;
            object-fit: cover;
        }

        .recently {
            height: 320px;
            /* background-color: #ef0101; */
        }


        .row1 {
            height: 100px;
            /* background-color: #7606e7; */
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .one {
            width: 250px;
            height: 50px;
            background-color: #5b5959;
            display: flex;
            align-items: center;
            margin-left: 30px;
            border-radius: 7%;
        }

        .recentimg {
            height: 100%;
            width: 100%;
        }

        .sidehead {
            color: white;
            margin-left: 40px;

        }

        .scroll-to-top {
            position: fixed;
            bottom: 90px;
            right: 20px;
            display: none;

            color: rgba(166, 157, 157, 0.849);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 24px;
            cursor: pointer;
            z-index: 9999;
        }

        .scroll-to-top:hover {
            /* background-color: #706969; */
        }

        .scroll-to-top.show {
            display: block;
        }

        .arrow:hover {
            color: rgb(90, 89, 91);
        }




        a {
            text-decoration: none;
        }

        footer {
            background-color: #272727;
            text-align: center;
            text-transform: uppercase;
            padding-top: 30px;
            margin-top: auto;
        }

        footer li {
            list-style: none;
            margin: 10px;
            display: inline-block;
        }

        .icons a {
            background: #52527a;
            color: #272727;
            padding: 14px;
            font-size: 20px;
            border-radius: 100%;
            display: flex;
        }

        .icons a:hover {
            color: #ffffff;
            transition: 0.5s;
        }

        .menu a {
            color: #ffffff;
            text-transform: capitalize;
        }

        .menu a:hover {
            color: #52527a;
            transition: 0.5s;
        }

        .footer-copyright {
            background-color: #52527a;
            color: #ffffff;
            padding: 15px;
            margin-top: 30px;
            text-transform: capitalize;
        }

        .footer-copyright p {
            margin-bottom: 0px;
        }

        .lin {
            background-color: rgb(163, 159, 159);
        }

        .active {
            background-color: rgb(99, 96, 96);
        }


        .gradient {
            width: 100%;
            height: 400px;
            z-index: -2;
            display: flex;

            /* align-items: center; */
            top: 0;
            /* background: linear-gradient(
    to bottom,
    #475e72 0%,
    #465d70 30%,
    #3e5666 40%,
    #3c5363 50%,
    #393f5d 60%,
    #242323e9 70%,
    #1d1d1d 80%,
    #121212 90%,
    #000000 100%
  ); */
        }

        .coverouter {

            display: flex;
            align-items: center;
            width: 500px;
            height: 400px;
            margin-left: 100px;
            margin-right: auto;
            text-align: center;
            color: white;
            /* background: linear-gradient(to bottom right, rgba(238, 130, 238, 0.8), rgba(255, 192, 203, 0.8), rgba(255, 0, 0, 0.8));
  background-size: 200% 200%;
  animation: oilyBackground 5s ease infinite; */
        }

        .coverouter h2 {
            font-size: 70px;
            text-align: center;
            margin-top: 5px;
        }

        .cover {

            display: flex;
            object-fit: cover;
            width: 400px;
            height: 300px;


        }

        .cover img {
            border-radius: 10%;
        }

        .alb {
            width: 100%;
            height: 100%;


        }

        .outer {
            background-color: rgba(10, 10, 10, 0.726);
            width: 1000px;
            height: 120px;
            margin-bottom: 90px;
            border: 1px solid white;
            display: flex;
            border-radius: 50px;
            box-shadow: 5px 4px 2px 3px rgba(13, 12, 13, 0.607);
        }

        .outer.active {
            border: 1px solid red;
            /* Set your desired border color */
        }

        .left {
            height: 120px;
            width: 140px;
            background-color: red;
            display: flex;
            object-fit: cover;
            cursor: pointer;
            border-radius: 50px;
        }

        .left img {
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;

        }

        .left:hover {
            opacity: 0.9;
        }

        .left img:hover {
            transform: scale(1.1);
            box-shadow: 3px 3px 2px 3px black;
        }

        .right {
            width: 880px;
            height: 120px;
            /* background-color: rgba(10, 10, 10, 0.726); */
            background: linear-gradient(to right, rgba(134, 62, 221, 0.289) 0%, rgba(85, 74, 236, 0.656) 50%, rgba(242, 81, 239, 0.448) 100%);

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .option {
            width: 30px;
            height: 120px;
            background-color: rgba(255, 255, 0, 0);
            display: flex;
            position: relative;
            cursor: pointer;
            align-items: center;
        }

        .more {
            cursor: pointer;
            color: white;
            background-color: transparent;
        }

        .leftpng {
            width: 100%;
            height: 100%;
        }

        .title {
            height: 60px;
            cursor: pointer;

        }

        .title h1 {
            color: white;
            font-size: 25px;
        }

        .count {
            height: 30px;

            display: flex;
            justify-content: center;
            align-items: center;
            width: 480px;
        }

        .count h6 {
            font-size: 16px;
            color: white;
            background-color: rgba(57, 57, 203, 0.704);
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            list-style: none;
            padding: 0;
            margin: 0;
            top: 0;
            left: 100%;
            z-index: 1;
            width: 150px;
            height: 150px;
            background-color: rgba(17, 17, 17, 0.856);
            opacity: 0;
            transform: translateX(20px);
            transition: transform 1s ease, opacity 0.3s ease;
            overflow: hidden;
            border-radius: 10px;
            margin-left: 5px;
        }

        .dropdown-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .dropdown-menu ul li {
            padding: 10px;
            color: white;
        }

        /* .dropdown-menu ul li:hover {
            background-color: rgba(65, 65, 65, 0.926);
        } */

        .dropdown-menu ul li a {
            color: white;
            text-decoration: none;

        }

        .show-dropdown .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateX(0);
        }

        .del:hover {
            color: red;
        }

        .songList {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .containerli {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            margin-top: 50px;
            height: auto;

        }


        #playlistContainer {
            /* Hide initially */
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            padding: 10px;
            background-color: #35383d;
            border: 1px solid #ccc;
            border-radius: 4%;
            list-style-type: none;
            cursor: pointer;
            color: white;
            min-height: 100px;
        }

        #playlistContainer ul {
            margin: 0;
            padding: 0;

        }

        #playlistContainer li {
            margin-bottom: 10px;
            padding: 5px;
            color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            list-style: none;
            font-size: 20px;
            background-color: #191a1c;
        }

        #playlistContainer li:hover {
            background-color: #1c232e;
            transform: scale(1.1);
        }

        .playbutto {
            background-color: #13fc03;
            height: 90px;
            width: 90px;
            right: 70px;
            top: 400px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
        }

        @keyframes rotateColors {
            0% {
                box-shadow: 0 0 0 0px #13fc03;
            }

            25% {
                box-shadow: 0 0 0 2px #13fc03;
            }

            50% {
                box-shadow: 0 0 0 5px #fc0313;
            }

            75% {
                box-shadow: 0 0 0 2px #03fcfc;
            }

            100% {
                box-shadow: 0 0 0 0px #fccc03;
            }
        }

        #toggleButton {
            /* Your existing styles */
            background-color: #13fc03;
            outline: none;
            border: none;
            height: 90px;
            width: 90px;
            cursor: pointer;
            border-radius: 50%;
            position: relative;
            animation: rotateColors 5s linear infinite;
        }

        .greenary {
            font-size: 55px;
        }

        #cartoon {
            height: 150px;
            width: 150px;

            /* background: url('imgroot.gif');
            background-repeat: no-repeat;
            background-size:cover; */
            right: 60px;
            top: 277px;
            position: fixed;
        }



        .like-button {
            font-size: xxx-large;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
        }

        .like-button:hover {
            cursor: pointer;
            background-color: none;
        }

        ion-icon {
            fill: transparent;
            stroke: black;
            stroke-width: 30;
            transition: all 0.5s;
        }

        .like-button.activelike ion-icon {
            animation: like 0.5s 1;
            fill: red;
            stroke: none;
        }

        @keyframes like {
            0% {
                transform: scale(1);
            }

            90% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1.1);
            }
        }

        .addToPlaylist:hover {
            background-color: rgba(65, 65, 65, 0.926);
        }




        .listeners {
            display: flex;
            justify-content: left;

            height: 90px;
        }

        .listenerin {
            margin-left: 20px;
            font-size: 20px;
            color: rgb(69, 208, 106);
        }

        .albumcontent {
            /* background-color: red; */
            width: 970px;
            height: 400px;
        }

        .albumtitle {
            /* background-color: green; */
            height: auto;
            color: white;
        }

        .albumtitle h2 {
            font-size: 68px;
            margin-bottom: 5px;
            font-family: 'Cinzel', serif;
        }

        .albumtitle h4 {
            opacity: 0.6;
            font-size: 16px;

        }

        .playlistt {
            /* background-color: blue; */
            height: 70px;
        }

        .smalllogo {
            height: 30px;
            width: 30px;
            align-self: center;

        }

        .smalllogo:hover {
            box-shadow: 2px 1px 1px 2px black;
            border-radius: 50%;
        }
    </style>
</head>

<body>

    <nav id="navbar">
        <ul>
            <a href="About.html">
                <li><img src="logo.png" alt="Heat Beat" class="logo"></li>
            </a>
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="Library.php">Library</a></li>
            <li>
                <form class="search-form" action="/search" method="GET">
                    <input type="text" name="query" placeholder="Search songs,artists,albums" />
                    <button type="submit">Search </button>
                </form>
            </li>
            <li><a href="#contact">
                    <div class="premium">Explore premium</div>
                </a></li>
            <a href="About.html">
                <li><span class="material-symbols-outlined">
                        person
                    </span></li>
            </a>
        </ul>
    </nav>


    <div class="waste" style="height:50px;"></div>


    <br>
    <div class="breadcrumb">
        <div id="backButton">
            <span class="material-symbols-outlined">
                chevron_left
            </span> &nbsp;
        </div>
        <div id="forwardButton">
            <span class="material-symbols-outlined">
                chevron_right
            </span>
        </div>
    </div>

    <br>


    <div class="gradient">
        <div class="coverouter">
            <div class="cover">
                <img src="" alt="" class="alb " id="image">
            </div> <br>


            </script>
            <!-- <p>Artist Name</p> -->
        </div>


        <div class="albumcontent">
            <div class="playlistt">
                <!-- sumne -->
            </div>

            <div class="albumtitle">
                <h2><?php echo isset($_SESSION['calledalbum']) ? $_SESSION['calledalbum'] : ''; ?></h2>


                <div class="content">
        <!-- Album information will be dynamically generated here -->
    </div>

                <!-- <div class="content">
                    <h4>Hottest songs served here cover- bahubali 2</h4>
                    <h5> <img class="smalllogo" src="logo.png" alt="logo" style="display: inline-block; vertical-align: middle; margin-right: 5px;"> HeatBeat &nbsp;&nbsp; .&nbsp; 1654344 likes &nbsp; . &nbsp; 30 songs,about 3hr</h5>
                </div> -->


            </div>
            <br>

        </div>

        <!-- play button -->
        <div id="cartoon">
            <div class="playbutto rotating-border rotating-border--black-yellow" title="Play/Pause">
                <button id="toggleButton" onclick="togglePlayback()"><span class="material-symbols-outlined greenary">
                        play_arrow
                    </span></button>
            </div>
        </div>
        <audio id="audioPlayer" onended="playNextSong()"></audio>
    </div>


    <br><br>




    <?php
    // Extract the album ID from the URL query parameters
    $albumId = $_GET['album_id'];
    ?>

    <div class="containerli">
        <div id="songList">
            <!-- Songs will be loaded here asynchronously -->
        </div>
    </div>

    <script>
        // Declare anotherVariable in the global scope
        var anotherVariable;
        // Function to load song details asynchronously
        function loadSongDetails() {
            const albumId = '<?php echo $albumId; ?>';
            const songListContainer = document.getElementById('songList');

            // Fetch the song details using JavaScript
            fetch(`http://localhost:8000/get_song_details.php?album_id=${encodeURIComponent(albumId)}`)
                .then(response => response.json())
                .then(songDetails => {
                    // Clear the existing content
                    songListContainer.innerHTML = '';
                    window.songDetails = songDetails;
                    // Loop through the fetched song details and create HTML elements
                    songDetails.forEach(song => {
                        // Create a div element for each song
                        const songDiv = document.createElement('div');
                        songDiv.classList.add('outer');

                        // Add active class to the first song
                        if (song === songDetails[0]) {
                            songDiv.classList.add('active');
                        }

                        // Set the data-song-id attribute
                        songDiv.setAttribute('data-song-id', song.song_id);

                        // Create the left div with an image
                        const leftDiv = document.createElement('div');
                        leftDiv.classList.add('left');
                        leftDiv.addEventListener('click', function() {
                            redirectToSinglePlayer(song.song_id);
                        });

                        const img = document.createElement('img');
                        img.src = `${song.song_id}.jpg`;
                        img.alt = 'like';
                        img.classList.add('leftpng');

                        leftDiv.appendChild(img);

                        // Create the right div with title and artist
                        const rightDiv = document.createElement('div');
                        rightDiv.classList.add('right');

                        const titleDiv = document.createElement('div');
                        titleDiv.classList.add('title');
                        titleDiv.addEventListener('click', function() {
                            playSongsus(song.song_id, this);
                        });

                        const titleH1 = document.createElement('h1');
                        titleH1.textContent = song.title;
                        titleDiv.appendChild(titleH1);

                        const countDiv = document.createElement('div');
                        countDiv.classList.add('count');

                        const countH6 = document.createElement('h6');
                        countH6.textContent = song.artist;
                        countDiv.appendChild(countH6);

                        rightDiv.appendChild(titleDiv);
                        rightDiv.appendChild(countDiv);

                        // Create the option div with the dropdown menu
                        const optionDiv = document.createElement('div');
                        optionDiv.classList.add('option');

                        const moreSpan = document.createElement('span');
                        moreSpan.classList.add('material-symbols-outlined');
                        moreSpan.classList.add('more');
                        moreSpan.textContent = 'more_vert';

                        const dropdownMenuDiv = document.createElement('div');
                        dropdownMenuDiv.classList.add('dropdown-menu');

                        const ul = document.createElement('ul');

                        const likeLi = document.createElement('li');
                        const likeButtonDiv = document.createElement('div');
                        likeButtonDiv.classList.add('like-button');
                        likeButtonDiv.setAttribute('data-song-id', song.song_id);

                        const ionIcon = document.createElement('ion-icon');
                        ionIcon.setAttribute('name', 'heart');

                        likeButtonDiv.appendChild(ionIcon);
                        likeLi.appendChild(likeButtonDiv);

                        const addToPlaylistLi = document.createElement('li');
                        addToPlaylistLi.classList.add('addToPlaylist');
                        addToPlaylistLi.setAttribute('data-song-id', song.song_id);
                        addToPlaylistLi.textContent = 'Add to playlist';

                        ul.appendChild(likeLi);
                        ul.appendChild(addToPlaylistLi);

                        dropdownMenuDiv.appendChild(ul);

                        optionDiv.appendChild(moreSpan);
                        optionDiv.appendChild(dropdownMenuDiv);

                        // Add the created elements to the song div
                        songDiv.appendChild(leftDiv);
                        songDiv.appendChild(rightDiv);
                        songDiv.appendChild(optionDiv);

                        // Append the song div to the song list container
                        songListContainer.appendChild(songDiv);
                    });

                    //             const countElements = document.querySelectorAll('.option');

                    // // Add a click event listener to each 'count' element
                    // countElements.forEach(countElement => {
                    //     countElement.addEventListener('click', function() {
                    //         // Log a message to the console
                    //         console.log('Count div clicked!');

                    //         // Change the background color to red
                    //         countElement.style.backgroundColor = 'red';
                    //     });
                    // });
                    var options = document.querySelectorAll('.option');

                    options.forEach(function(option) {
                        option.addEventListener('click', function() {
                            var dropdownMenu = this.querySelector('.dropdown-menu');
                            var isOpen = dropdownMenu.style.display === 'block';

                            options.forEach(function(otherOption) {
                                var otherDropdownMenu = otherOption.querySelector('.dropdown-menu');
                                if (otherDropdownMenu !== dropdownMenu) {
                                    otherDropdownMenu.style.display = 'none';
                                    otherOption.classList.remove('show-dropdown');
                                }
                            });

                            if (isOpen) {
                                dropdownMenu.style.display = 'none';
                                this.classList.remove('show-dropdown');
                            } else {
                                dropdownMenu.style.display = 'block';
                                this.classList.add('show-dropdown');
                            }
                        });
                    });

                    document.addEventListener('click', function(e) {
                        var target = e.target;
                        options.forEach(function(option) {
                            if (!option.contains(target)) {
                                var dropdownMenu = option.querySelector('.dropdown-menu');
                                dropdownMenu.style.display = 'none';
                                option.classList.remove('show-dropdown');
                            }
                        });
                    });


                    // Get the "Add to playlist" buttons
                    const addToPlaylistButtons = document.querySelectorAll('.addToPlaylist');
                    const playlistContainer = document.getElementById('playlistContainer');

                    // Add click event listeners to each "Add to playlist" button
                    addToPlaylistButtons.forEach(button => {
                        button.addEventListener('click', addToPlaylistClicked);
                    });

                    // Function to handle adding to the playlist
                    function addToPlaylistClicked(event) {


                        // Stop the click event from propagating to the parent elements (like button)
                        event.stopPropagation();
                        // Retrieve the song ID from the data attribute
                        const songId = event.target.dataset.songId;
                        console.log('Song ID:', songId);

                        // Make an AJAX request to store the song ID in the session variable
                        const xhr = new XMLHttpRequest();
                        xhr.open('GET', 'store_song_id.php?song_id=' + songId, true);
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                // On success, perform any additional actions or redirect if needed
                                console.log('Song ID stored in session variable');

                                displayPlaylist(); // Call displayPlaylist after successful addition to the playlist
                            }
                        };
                        xhr.send();

                        // Prevent the default click behavior
                        event.preventDefault();
                    }

                    // Function to display the playlist
                    function displayPlaylist() {
                        // Make an AJAX request to the server
                        const xhr = new XMLHttpRequest();
                        xhr.open('GET', 'http://localhost:8000/get_playlist.php', true);
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                                // On success, parse the JSON response
                                console.log(xhr.responseText);
                                const playlists = JSON.parse(xhr.responseText);

                                // Generate HTML content for the playlist as a list
                                let html = '<h1>Choose the playlist</h1>';
                                html += '<ul>';
                                playlists.forEach(playlist => {
                                    html += '<li data-playlist-id="' + playlist.playlist_id + '">' + playlist.name + ' - ' + playlist.playlist_id + '</li>';
                                });
                                html += '</ul>';

                                // Update the playlistContainer div with the generated HTML
                                playlistContainer.innerHTML = html;

                                // Show the playlist container
                                playlistContainer.style.display = 'block';

                                // Add click event listener to each playlist li element
                                const playlistItems = playlistContainer.querySelectorAll('li');
                                playlistItems.forEach(item => {
                                    item.addEventListener('click', addedToPlaylist);
                                });

                                // Add click event listener to document
                                document.addEventListener('click', closePlaylistContainer);
                            }
                        };
                        xhr.send();
                    }

                    // Function to handle adding to the playlist
                    function addedToPlaylist(event) {
                        // Retrieve the playlist ID from the data attribute
                        const playlistId = event.target.dataset.playlistId;
                        console.log('Playlist ID:', playlistId);


                        const songDiv = event.target.closest('.outer');
                        // Make an AJAX request to store the session variable and playlist ID
                        const xhr = new XMLHttpRequest();
                        xhr.open('GET', 'http://localhost:8000/store_playlist_song.php?playlist_id=' + playlistId, true);
                        xhr.onreadystatechange = function() {
                            console.log('Ready state:', xhr.readyState);
                            console.log('Status:', xhr.status);
                            if (xhr.readyState === XMLHttpRequest.DONE) {
                                if (xhr.status === 200) {
                                    // On success, perform any additional actions or redirect if needed
                                    console.log('Playlist ID and session variable stored');
                                    // songDiv.querySelector('.option').style.backgroundColor = 'red';

                                    closePlaylistContainer();
                                } else {
                                    // On failure, display an error message or handle the failure case
                                    console.log('Failed to store playlist ID and session variable');
                                }
                            }
                        };
                        xhr.send();

                        // Prevent the default click behavior
                        event.preventDefault();
                    }

                    // Function to close the playlist container when clicked outside
                    function closePlaylistContainer() {
                        // Hide the playlist container
                        playlistContainer.style.display = 'none';

                        // Remove the click event listener from the document
                        document.removeEventListener('click', closePlaylistContainer);
                    }

                    // like











                    // Get the like buttons
                    const likeButtons = document.querySelectorAll('.like-button');

                    // Add click event listeners to each like button
                    likeButtons.forEach(likeButton => {
                        likeButton.addEventListener('click', likeButtonClicked);
                    });

                    // Function to handle like button clicks
                    function likeButtonClicked(event) {
                        // Stop the click event from propagating to the parent elements (e.g., the "Add to playlist" button)
                        event.stopPropagation();

                        // Toggle the "active" class to handle the like functionality
                        this.classList.toggle('activelike');
                    }

                    // Event listener to handle like button click
                    const likeButtonss = document.querySelectorAll('.like-button');
                    likeButtonss.forEach(likeButton => {
                        likeButton.addEventListener('click', handleLikeButtonClick);
                    });





                    function handleLikeButtonClick(event) {
                        const emailId = '<?php echo $_SESSION['email']; ?>'; // Get email_id from the session
                        const songId = event.currentTarget.dataset.songId;

                        console.log(emailId);

                        // Check if the record exists in the liked table
                        checkLikedRecord(emailId, songId)
                            .then(response => {
                                console.log(response);

                                if (!response.exists) {
                                    // If the record doesn't exist, insert it into the liked table
                                    return insertLikedRecord(emailId);
                                } else {
                                    // If the record already exists, remove the corresponding entry from the liked_song table
                                    return removeLikedSongRecord(emailId, songId);
                                }
                            })
                            .then(() => {
                                // Insert the liked_id and song_id into the liked_song table
                                return insertLikedSongRecord(emailId, songId);
                            })
                            .then(() => {
                                // Update the liked button styles after successful like/unlike
                                //   checkLikedSongsStyle(); do this bro
                            })
                            .catch(error => {
                                console.error('Error checking/inserting liked record:', error);
                            });
                    }

                    // Function to check if the record exists in the liked table
                    function checkLikedRecord(emailId, songId) {
                        return new Promise((resolve, reject) => {
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'http://localhost:8000/check_liked_record.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        const response = JSON.parse(xhr.responseText);
                                        resolve(response);
                                    } else {
                                        reject(new Error('Error fetching checkLikedRecord'));
                                    }
                                }
                            };
                            xhr.onerror = function() {
                                reject(new Error('Error fetching checkLikedRecord'));
                            };
                            xhr.send('emailId=' + encodeURIComponent(emailId) + '&songId=' + encodeURIComponent(songId));
                        });
                    }

                    // Function to insert the record into the liked table
                    function insertLikedRecord(emailId) {
                        return new Promise((resolve, reject) => {
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'http://localhost:8000/insert_liked_record.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        resolve();
                                    } else {
                                        reject(new Error('Error fetching insertLikedRecord'));
                                    }
                                }
                            };
                            xhr.onerror = function() {
                                reject(new Error('Error fetching insertLikedRecord'));
                            };
                            xhr.send('emailId=' + encodeURIComponent(emailId));
                        });
                    }

                    // Function to insert the record into the liked_song table
                    function insertLikedSongRecord(emailId, songId) {
                        return new Promise((resolve, reject) => {
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'http://localhost:8000/insert_liked_song_record.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        resolve();
                                    } else {
                                        reject(new Error('Error fetching insertLikedSongRecord'));
                                    }
                                }
                            };
                            xhr.onerror = function() {
                                reject(new Error('Error fetching insertLikedSongRecord'));
                            };
                            xhr.send('emailId=' + encodeURIComponent(emailId) + '&songId=' + encodeURIComponent(songId));
                        });
                    }

                    // Function to remove the record from the liked_song table
                    function removeLikedSongRecord(emailId, songId) {
                        return new Promise((resolve, reject) => {
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'http://localhost:8000/remove_liked_song_record.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        resolve();
                                    } else {
                                        reject(new Error('Error fetching removeLikedSongRecord'));
                                    }
                                }
                            };
                            xhr.onerror = function() {
                                reject(new Error('Error fetching removeLikedSongRecord'));
                            };
                            xhr.send('emailId=' + encodeURIComponent(emailId) + '&songId=' + encodeURIComponent(songId));
                        });
                    }






















                })
                .catch(error => {
                    console.error('Error fetching song details:', error);
                });
        }

        // Call the function to load song details when the page loads
        window.addEventListener('load', loadSongDetails);




        // JavaScript function for redirection
        function redirectToSinglePlayer(songId) {
            window.location.href = `singlesong-9.php?song_id=${encodeURIComponent(songId)}`;
        }

        function playSongsus(songId, clickedDiv) {

            //correct dude
            var songUrl = songId + '.mp3';
            audioPlayer.src = songUrl;
            audioPlayer.play();

            // Remove active class from all song divs
            var songDivs = document.querySelectorAll('.outer[data-song-id]');
            songDivs.forEach(function(songDiv) {
                songDiv.classList.remove('active');
            });

            // Add active class to the clicked song div
            clickedDiv.closest('.outer[data-song-id="' + songId + '"]').classList.add('active');
        }






        // player





        var audioPlayer = document.getElementById('audioPlayer');
        var currentIndex = 0;
        var pausedTime = 0;
        var counthit = 0;



        function togglePlayback() {
            //ok dude working ,finally 
            if (counthit === 0) {
                playSong(currentIndex, pausedTime);
                counthit++;
            } else {
                if (audioPlayer.paused) {
                    audioPlayer.play();
                } else {
                    pauseSong();
                }
            }
            var toggleButton = document.getElementById('toggleButton');
            var iconElement = toggleButton.querySelector('.material-symbols-outlined');
            iconElement.textContent = audioPlayer.paused ? 'play_arrow' : 'pause';



        }


        function playSong(index, startTime) {
            if (index >= 0 && index < songDetails.length) {
                currentIndex = index;
                var songId = songDetails[currentIndex]['song_id'];
                var songUrl = songId + '.mp3';
                audioPlayer.src = songUrl;
                audioPlayer.currentTime = startTime;
                audioPlayer.play();
            }
        }


        function playSongsus(songId, clickedDiv) {

            //correct dude
            var songUrl = songId + '.mp3';
            audioPlayer.src = songUrl;
            audioPlayer.play();

            // Remove active class from all song divs
            var songDivs = document.querySelectorAll('.outer[data-song-id]');
            songDivs.forEach(function(songDiv) {
                songDiv.classList.remove('active');
            });

            // Add active class to the clicked song div
            clickedDiv.closest('.outer[data-song-id="' + songId + '"]').classList.add('active');
        }


        function pauseSong() {
            audioPlayer.pause();
            pausedTime = audioPlayer.currentTime;
        }

        function playNextSong() {
            var nextIndex = currentIndex + 1;
            if (nextIndex < songDetails.length) {
                playSong(nextIndex, 0);
            }
        }
    </script>






    <script>

    </script>


















    <!-- for playlistdisplay -->
    <div id="playlistContainer">
        <h1>Choose the playlist </h1>
    </div>




    <br> <br>

    <br><br><br>

    <a href="#" class="scroll-to-top"><span class=" material-symbols-outlined arrow" title="Move to top">arrow_upward</span></a>
    <br>
    <hr class="lin"><br>


    <footer>
        <ul class="icons">
            <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Partners</a></li>

            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="footer-copyright">
            <p>Copyright @ 2023 All Rights Reserved.</p>
        </div>
    </footer>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            cartoon();
        });




        function cartoon() {
            // Variable to keep track of pause start time
            var pauseStartTime = null;

            // Variable to keep track of total playtime
            var totalPlaytime = 0;

            // Audio player element
            var audioPlayer = document.getElementById('audioPlayer');

            // "cartoon" div to display the image
            var cartoonDiv = document.getElementById('cartoon');

            function setBackgroundToCartoonDiv() {
                // Set the background image for the "cartoon" div
                cartoonDiv.style.backgroundImage = 'url(imgroot.gif)';
                cartoonDiv.style.backgroundRepeat = 'no-repeat';
                cartoonDiv.style.backgroundSize = 'cover';
                cartoonDiv.style.transition = 'background-image 1.5s ease-in-out';

                // Set a timeout to remove the background image after 5 seconds
                setTimeout(function() {
                    removeBackgroundFromCartoonDiv();
                }, 5000);
            }

            // Function to remove the background image from the "cartoon" div
            function removeBackgroundFromCartoonDiv() {
                cartoonDiv.style.backgroundImage = 'none';
            }






            // Event listener to monitor pause time
            audioPlayer.addEventListener('pause', function() {
                pauseStartTime = new Date().getTime();
                // Set a timeout to check if the pause is longer than 5 seconds
                setTimeout(function() {
                    var currentTime = new Date().getTime();
                    var pauseDuration = currentTime - pauseStartTime;
                    if (pauseDuration >= 5000) {
                        setBackgroundToCartoonDiv()
                    }
                }, 5000); // Check after 5 seconds
            });

            // Event listener to monitor play time
            audioPlayer.addEventListener('play', function() {
                if (pauseStartTime) {
                    var currentTime = new Date().getTime();
                    var pauseDuration = currentTime - pauseStartTime;
                    if (pauseDuration >= 5000) {
                        displayCartoonImage();
                    }
                    pauseStartTime = null;
                }
            });

            // Event listener to update the total playtime
            audioPlayer.addEventListener('timeupdate', function() {
                totalPlaytime = audioPlayer.currentTime;
                // You can convert totalPlaytime to minutes if needed
                // var totalPlaytimeInMinutes = totalPlaytime / 60;
                // Store the total playtime in sessionStorage
                sessionStorage.setItem('myplaytime', totalPlaytime);
                // Assuming you have stored the value in the "myplaytime" session variable
                var myplaytimeValue = sessionStorage.getItem('myplaytime');
                console.log('myplaytime:', myplaytimeValue);

            });
        }
    </script>




    <!-- scrollng up script -->
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.pageYOffset;
            var scrollButton = document.querySelector('.scroll-to-top');

            if (scrollPosition > 200) {
                scrollButton.classList.add('show');
            } else {
                scrollButton.classList.remove('show');
            }
        });

        document.querySelector('.scroll-to-top').addEventListener('click', function(event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>


    <!-- breadcrumb script -->
    <script>
        // breadcrumb
        const backButton = document.getElementById("backButton");
        const forwardButton = document.getElementById("forwardButton");

        // Go back to the previous page
        backButton.addEventListener("click", function() {
            history.back();
        });

        // Go forward to the next page
        forwardButton.addEventListener("click", function() {
            history.forward();
        });
    </script>


    <!-- dropdown script -->
    <script>

    </script>



    <script>

    </script>

    <script>
        window.addEventListener('load', function() {
            var image = document.getElementById('image');

            // Create a canvas element
            var canvas = document.createElement('canvas');
            var context = canvas.getContext('2d');

            // Set the canvas dimensions to match the image
            canvas.width = image.width;
            canvas.height = image.height;

            // Draw the image onto the canvas
            context.drawImage(image, 0, 0);

            // Get the pixel data from the canvas
            var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
            var pixels = imageData.data;

            // Calculate the average RGB values of the image
            var totalR = 0,
                totalG = 0,
                totalB = 0;
            var pixelCount = pixels.length / 4; // Each pixel consists of 4 values (R, G, B, and Alpha)

            for (var i = 0; i < pixels.length; i += 4) {
                totalR += pixels[i];
                totalG += pixels[i + 1];
                totalB += pixels[i + 2];
            }

            var averageR = Math.round(totalR / pixelCount);
            var averageG = Math.round(totalG / pixelCount);
            var averageB = Math.round(totalB / pixelCount);

            // Generate the gradient CSS using the analyzed color
            var gradientCSS = 'linear-gradient(to bottom, rgb(' + averageR + ', ' + averageG + ', ' + averageB + ') 0%, rgb(16, 16, 16) 100%)';

            // Set the gradient background of the image container
            var imageContainer = document.querySelector('.gradient');
            imageContainer.style.background = gradientCSS;
        });
    </script>


    <script>
        // Get the album ID from the page URL or set it manually
        const albumID = getAlbumIDFromURL() || 'default_album_id';

        // Construct the image URL using the album ID
        const imageURL = 'A' + albumID + '.jpg';

        // Set the image source
        document.getElementById('image').src = imageURL;

        // Function to extract the album ID from the URL
        function getAlbumIDFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('album_id');
        }
    </script>

    <script>

    </script>

    <script>
// Function to create HTML elements for album information
function createAlbumElements(album) {
    const albumDiv = document.createElement("div");
    albumDiv.classList.add("album");

    const title = document.createElement("h4");
    title.textContent = album.description;

    const details = document.createElement("h5");
    details.innerHTML = `<img class="smalllogo" src="logo.png" alt="logo" style="display: inline-block; vertical-align: middle; margin-right: 5px;"> HeatBeat &nbsp;&nbsp; .&nbsp; ${album.likes} likes &nbsp; . &nbsp; ${album.total_songs} songs, about ${album.play_hour}hr`;

    albumDiv.appendChild(title);
    albumDiv.appendChild(details);

    return albumDiv;
}

// Function to fetch album data from the JSON file
async function fetchAlbumData() {
    try {
        const response = await fetch('albums.json');
        const data = await response.json();

        return data;
    } catch (error) {
        console.error('Error fetching album data:', error);
        return null;
    }
}

// Function to get album_id from the URL
function getAlbumIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return parseInt(urlParams.get("album_id"));
}

// Main function to display album information
async function main() {
    const albumId = getAlbumIdFromUrl();
    const albumData = await fetchAlbumData();

    if (albumData) {
        const matchingAlbum = albumData.find((album) => album.album_id === albumId);

        if (matchingAlbum) {
            const contentDiv = document.querySelector(".content");
            const albumElement = createAlbumElements(matchingAlbum);
            contentDiv.innerHTML = ''; // Clear any existing content
            contentDiv.appendChild(albumElement);
        } else {
            const contentDiv = document.querySelector(".content");
            contentDiv.textContent = "Album not found";
        }
    }
}

// Call the main function to display album information
main();

    </script>














</body>

</html>