<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--Google Fonts-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta charset="UTF-8">
    <title>Heat Beat-Feel the music</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&display=swap');


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
            height: 500px;
            z-index: -2;
            display: flex;
            justify-content: center;
            align-items: center;
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


            width: 500px;
            height: 400px;
            margin-left: auto;
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
            width: 500px;
            height: 300px;

        }

        .alb {
            width: 100%;
            height: 100%;


        }

        .outer {
            background-color: rgba(10, 10, 10, 0.726);
            width: 1000px;
            height: 120px;
            margin-bottom: 70px;
            border: 1px solid white;
            display: flex;
        }

        .left {
            height: 120px;
            width: 140px;
            background-color: red;
            display: flex;
            object-fit: cover;
        }

        .right {
            width: 880px;
            height: 120px;
            background-color: rgba(10, 10, 10, 0.726);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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

        }

        .title h1 {
            color: white;
            font-size: 25px;
        }

        .count {
            height: 30px;
            background-color: rgba(57, 57, 203, 0.704);
            display: flex;
            justify-content: center;
            align-items: center;
            width: 480px;
        }

        .count h6 {
            font-size: 16px;
            color: white;
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

        .dropdown-menu ul li:hover {
            background-color: rgba(65, 65, 65, 0.926);
        }

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
            height: 100vh;

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
    </style>
</head>

<body>

    <nav id="navbar">
        <ul>
            <li><img src="logo.png" alt="Heat Beat" class="logo"></li>
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="#about">Library</a></li>
            <li>
                <form class="search-form" action="/search" method="GET">
                    <input type="text" name="query" placeholder="Search songs,artists,albums" />
                    <button type="submit">Search </button>
                </form>
            </li>
            <li><a href="#contact">
                    <div class="premium">Explore premium</div>
                </a></li>
            <li><span class="material-symbols-outlined">
                    person
                </span></li>
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
                <img src="nature.jpg" alt="" class="alb " id="image">
            </div> <br>
            <h2>Top hits</h2>
            <!-- <p>Artist Name</p> -->
        </div>
    </div>


    <br><br>


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
            '<li id="addToPlaylist" data-song-id="' . $song['song_id'] . '">Add to playlist</li>' .
            '</ul>' .
            '</div>' .
            '</div>' .
            '</div>';
    }
    echo '</div>'; // Close songList div
    echo '</div>'; // Close container div
    ?>


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
        var options = document.querySelectorAll('.option');
        options.forEach(function(option) {
            option.addEventListener('click', function() {
                var dropdownMenu = this.querySelector('.dropdown-menu');
                var isOpen = dropdownMenu.style.display === 'block';

                // Hide all other dropdown menus
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

        // Close dropdown menu when clicking outside
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
    </script>
<script>
    // Get the trigger element
const addToPlaylist = document.getElementById('addToPlaylist');
const playlistContainer = document.getElementById('playlistContainer');

// Check if the elements exist before adding the event listeners
if (addToPlaylist && playlistContainer) {
  addToPlaylist.addEventListener('click', displayPlaylist);
  addToPlaylist.addEventListener('click', addToPlaylistClicked);
}


// Function to close the playlist container after success
function closePlaylistContaineraftersucces() {
    console.log('called:close');
  // Hide the playlist container
  playlistContainer.style.display = 'none';

  // Remove the click event listener from the document
 
} 


// Function to handle adding to the playlist
function addToPlaylistClicked(event) {
  // Retrieve the song ID from the data attribute
  const songId = event.target.dataset.songId;
  console.log('Song ID:', songId);

  // Make an AJAX request to store the song ID in the session variable
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'store_song_id.php?song_id=' + songId, true);
  xhr.onreadystatechange = function() {
    // if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    //   // On success, perform any additional actions or redirect if needed
    //   console.log('Song ID stored in session variable enti bro');
    //   closePlaylistContaineraftersucces();
    // }
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // On success, perform any additional actions or redirect if needed
      console.log('Song ID stored in session variable');
   
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
  xhr.open('GET', 'get_playlist.php', true);
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

  // Make an AJAX request to store the session variable and playlist ID
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'store_playlist_song.php?playlist_id=' + playlistId, true);
  xhr.onreadystatechange = function() {
    console.log('Ready state:', xhr.readyState);
    console.log('Status:', xhr.status);
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // On success, perform any additional actions or redirect if needed
        console.log('Playlist ID and session variable stored');
        closePlaylistContaineraftersucces();
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
function closePlaylistContainer(event) {
  // Check if the clicked element is outside the playlist container and the addToPlaylist trigger element
  if (!playlistContainer.contains(event.target) && event.target !== addToPlaylist) {
    // Hide the playlist container
    playlistContainer.style.display = 'none';

    // Remove the click event listener from the document
    document.removeEventListener('click', closePlaylistContainer);
  }
}

</script>


    <!-- <script>
  // Get the trigger element
  const addToPlaylist = document.getElementById('addToPlaylist');
  // Get the playlist container element
  const playlistContainer = document.getElementById('playlistContainer');

  // Add click event listener to trigger element
  addToPlaylist.addEventListener('click', displayPlaylist);

  // Function to display the playlist
  function displayPlaylist() {
    // Show the playlist container
    playlistContainer.style.display = 'block';

    // Add click event listener to document
    document.addEventListener('click', closePlaylistContainer);
  }

  // Function to close the playlist container when clicked outside
  function closePlaylistContainer(event) {
    // Check if the clicked element is outside the playlist container
    if (!playlistContainer.contains(event.target) && event.target !== addToPlaylist) {
      // Hide the playlist container
      playlistContainer.style.display = 'none';

      // Remove the click event listener from the document
      document.removeEventListener('click', closePlaylistContainer);
    }
  }
</script> -->

    <!-- <script>
//   // Get the trigger element
//   const addToPlaylist = document.getElementById('addToPlaylist');
//   // Get the playlist container element
//   const playlistContainer = document.getElementById('playlistContainer');

//   // Add click event listener to trigger element
//   addToPlaylist.addEventListener('click', displayPlaylist);

//   // Function to display the playlist
//   function displayPlaylist() {
//     // Make an AJAX request to the server
//     const xhr = new XMLHttpRequest();
//     xhr.open('GET', 'get_playlist.php', true); // Replace 'get_playlist.php' with the server-side script to fetch playlist based on email
//     xhr.onreadystatechange = function() {
//       if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
//         // On success, update the playlistContainer div with the fetched playlist
//         playlistContainer.innerHTML = xhr.responseText;

//         // Show the playlist container
//         playlistContainer.style.display = 'block';

//         // Add click event listener to document
//         document.addEventListener('click', closePlaylistContainer);
//       }
//     };
//     xhr.send();
//   }

//   // Function to close the playlist container when clicked outside
//   function closePlaylistContainer(event) {
//     // Check if the clicked element is outside the playlist container
//     if (!playlistContainer.contains(event.target) && event.target !== addToPlaylist) {
//       // Hide the playlist container
//       playlistContainer.style.display = 'none';

//       // Remove the click event listener from the document
//       document.removeEventListener('click', closePlaylistContainer);
//     }
//   }
  // Get the trigger element
  const addToPlaylist = document.getElementById('addToPlaylist');
  // Get the playlist container element
  const playlistContainer = document.getElementById('playlistContainer');

  // Add click event listener to trigger element
  addToPlaylist.addEventListener('click', displayPlaylist);

  // Function to display the playlist
  function displayPlaylist() {
    // Make an AJAX request to the server
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_playlist.php', true); // Replace 'get_playlist.php' with the server-side script to fetch playlist based on email
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // On success, update the playlistContainer div with the fetched playlist
        playlistContainer.innerHTML = xhr.responseText;
        // Show the playlist container
        playlistContainer.style.display = 'block';

        // Add click event listener to document
        document.addEventListener('click', closePlaylistContainer);
      }
    };
    xhr.send();
  }

  // Function to close the playlist container when clicked outside
  function closePlaylistContainer(event) {
    // Check if the clicked element is outside the playlist container
    if (!playlistContainer.contains(event.target) && event.target !== addToPlaylist) {
      // Hide the playlist container
      playlistContainer.style.display = 'none';

      // Remove the click event listener from the document
      document.removeEventListener('click', closePlaylistContainer);
    }
  }
</script> -->
    <!-- <script>
        //   // Get the trigger element
        //   const addToPlaylist = document.getElementsByClassName('addToPlaylist');

        //   // Add click event listener to each "addToPlaylist" element
        //   Array.from(addToPlaylist).forEach(function(element) {
        //     element.addEventListener('click', displayPlaylist);
        //     element.addEventListener('click', addToPlaylistClicked);
        //   });
        // Wrap the code inside a function that executes when the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Get the trigger elements
            const addToPlaylistElements = document.getElementsByClassName('addToPlaylist');

            // Add click event listeners to each "addToPlaylist" element
            Array.from(addToPlaylistElements).forEach(function(element) {
                element.addEventListener('click', displayPlaylist);
                element.addEventListener('click', addToPlaylistClicked);
            });
        });


        // Function to handle the click event
        function addToPlaylistClicked(event) {
            // Retrieve the song ID from the data attribute
            const songId = event.target.dataset.songId;
            console.log('Song ID:', songId);

            // Make an AJAX request to store the song ID in the session variable
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'store_song_id.php?song_id=' + songId, true); // Replace 'store_song_id.php' with the server-side script to store the song ID in the session variable
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // On success, perform any additional actions or redirect if needed
                    console.log('Song ID stored in session variable');
                }
            };
            xhr.send();

            // Prevent the default click behavior
            event.preventDefault();
        }



       









        // Function to handle adding to the playlist
        function addedToPlaylist(event) {
            // Retrieve the playlist ID from the data attribute
            const playlistId = event.target.dataset.playlistId;

            // Make an AJAX request to store the session variable and playlist ID
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'store_playlist_song.php?playlist_id=' + playlistId, true); // Replace 'store_playlist_song.php' with the server-side script to store the session variable and playlist ID
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    // On success, perform any additional actions or redirect if needed
                    console.log('Playlist ID and session variable stored');
                }
            };
            xhr.send();

            // Prevent the default click behavior
            event.preventDefault();
        }










        // Function to close the playlist container when clicked outside
        function closePlaylistContainer(event) {
            // Check if the clicked element is outside the playlist container
            const playlistContainer = document.getElementById('playlistContainer');
            if (!playlistContainer.contains(event.target) && event.target !== addToPlaylist) {
                // Hide the playlist container
                playlistContainer.style.display = 'none';

                // Remove the playlist container from the document body
                document.body.removeChild(playlistContainer);

                // Remove the click event listener from the document
                document.removeEventListener('click', closePlaylistContainer);
            }
        }
    </script> -->































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










</body>

</html>