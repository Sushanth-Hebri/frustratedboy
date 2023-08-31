<?php
// Prevent caching on the page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    // Redirect the user to the login page or display an error message
    header('Location: sign-in.php');
    exit;
}

// Fetch the email_id and password from the session
$email_id = $_SESSION['email'];
$password = $_SESSION['password'];

// Database credentials
$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";

// Create a connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Fetch all playlists associated with the provided email_id
$query = "SELECT playlist.playlist_id, COUNT(new_playlist_song.song_id) AS song_count
          FROM playlist
          LEFT JOIN new_playlist_song ON playlist.playlist_id = new_playlist_song.playlist_id
          WHERE playlist.email_id = '$email_id'
          GROUP BY playlist.playlist_id";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    die('Query failed: ' . mysqli_error($connection));
}

?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
    <title>Library</title>
    <!-- Add your CSS stylesheets and other necessary scripts -->
    <style>
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

        /* #navbar a:hover {
    background-color: #333;
    color: #fff;
} */

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
            font-size: 25px;

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
            width: 600px;
            margin-left: 10px;
        }

        .active {
            background-color: rgb(99, 96, 96);
        }

        .out {
            margin-left: 50%;
            margin-right: 50%;
            height: 300px;
            width: 300px;
            color: white;
            text-align: center;
            margin-top: -100px;
            position: fixed;

            z-index: 10;
            display: flex;
            flex-direction: column;
            padding: 10px;
        }

        .yourlibrary {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90px;
            font-size: 35px;
            background: linear-gradient(to right, yellow, red, violet, blue);
            background-size: 800% 100%;
            animation: rotatingBackground 20s linear infinite;
            box-shadow: 0 8px 8px black;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            position: relative;
        }

        @keyframes rotatingBackground {
            0% {
                background-position: 0% 50%;
            }

            25% {
                background-position: 100% 50%;
            }

            50% {
                background-position: 50% 100%;
            }

            75% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .createplaylist {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            height: 60px;
            background-color: #3f403d;
            border-radius: 50px;
            font-size: 23px;
            cursor: pointer;
            background-image: url('flower2.png');
            background-size: 90px 80px;
            background-repeat: no-repeat;
            box-shadow: 3px 3px 2px 4px #161617;
        }

        .createplaylist:hover {
            box-shadow: 3px 3px 2px 4px black;
        }

        .library {
            width: 600px;
            /* / */
            height: auto;
            display: flex;
            justify-content: center;
            margin-left: 40px;
            flex-direction: column;
        }

        .outer {
            background-color: rgba(10, 10, 10, 0.726);
            width: 600px;
            height: 90px;
            margin-bottom: 70px;
            border: 1px solid white;
            display: flex;
            cursor: pointer;
        }

        .left {
            height: 90px;
            width: 90px;
            background-color: red;
            display: flex;
            object-fit: cover;
        }

        .right {
            width: 480px;
            height: 90px;
            background-color: rgba(10, 10, 10, 0.726);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .option {
            width: 30px;
            height: 90px;
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

        .del {}

        .del:hover {
            color: red;
        }

        .add {
            background-color: transparent;
        }

        .add:hover {
            transform: scale(1.5);
        }

        .popup {
            display: none;
            position: absolute;
            width: 500px;
            height: 150px;
            background: linear-gradient(to bottom, #303040, #2c2c2e);
            border-radius: 2%;
            position: fixed;
            z-index: 10;
            justify-content: center;
            border: 3px white;
            /* Customize the positioning as per your needs */
            box-shadow: 4px 4px 2px 3px #1b1c1b;
        }

        .popup-content {
            color: white;
            margin-left: 50px;
        }

        #createButton {
            background-color: green;
            color: white;
            width: 100px;
            height: 40px;
            border-radius: 50px;
            margin-left: 90px;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        #createButton:active {

            transform: scale(0.8);
        }

        #playlistNameInput {
            width: 200px;
            height: 30px;
        }

        /* .success-message {
  position: fixed;
  bottom: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 200px;
  height: 50px;
  background-color: #4caf50;
  color: #fff;
  text-align: center;
  line-height: 50px;
  font-size: 16px;
  border-radius: 5px;
  transition: bottom 0.3s ease;
} */
        .success-message {
            position: fixed;
            bottom: -50px;
            left: 70%;
            transform: translateX(-50%);
            width: 280px;
            height: 50px;
            background-color: green;
            color: #fff;
            text-align: center;
            /* line-height: 50px; */
            font-size: 26px;
            border-radius: 5px;
            transition: bottom 0.3s ease;
            z-index: 9999;
            /* Ensure the success message appears on top */
            opacity: 1;
            font-size: 18px;
        }

        .success-message.show {
            bottom: 100px;
        }
    </style>
</head>

<body>
    <nav id="navbar">
        <ul>
           <a href="About.html"> <li><img src="logo.png" alt="Heat Beat" class="logo"></li></a>
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
            <a href="profilehtml.php">
                <li><span class="material-symbols-outlined">
                        person
                    </span></li>
            </a>
        </ul>
    </nav>


    <div class="waste" style="height:100px;"></div>


    <br>
    <div class="breadcrumb">
        <div id="backButton">
            <span class="material-symbols-outlined more">
                chevron_left
            </span> &nbsp;
        </div>
        <div id="forwardButton">
            <span class="material-symbols-outlined more">
                chevron_right
            </span>
        </div>
    </div>

    <br> <br><br>
    <div class="out">
        <div class="yourlibrary">
            Your Library
        </div>


        <div class="createplaylist">
            <span class="material-symbols-outlined add">
                add
            </span> &nbsp;Create playlist

        </div>
    </div>

    <div class="popup" id="popupDiv">
        <div class="popup-content">
            <h3>Enter playlist name</h3>
            <input type="text" placeholder="Playlist name" id="playlistNameInput">
            <button id="createButton" onclick="createPlaylist()">Create</button>
        </div>
    </div>
    <div id="successMessage" class="success-message"></div>



    <div class="library">

        <h2 class="sidehead">Liked songs</h2>
        <?php
        // Retrieve email from the session

        $email = $_SESSION['email'];

        // Fetch liked_id based on email from the liked table
        $query_liked_id = "SELECT liked_id FROM liked WHERE email_id = '$email'";
        $result_liked_id = mysqli_query($connection, $query_liked_id);

        // Check if the query was successful
        if (!$result_liked_id) {
            die('Query failed: ' . mysqli_error($connection));
        }

        // Fetch and display the count of liked songs for each liked_id
        while ($row_liked_id = mysqli_fetch_assoc($result_liked_id)) {
            $liked_id = $row_liked_id['liked_id'];

            // Fetch and display the count of liked songs for each liked_id
            $query_liked_count = "SELECT COUNT(*) AS song_count FROM liked_song WHERE liked_id = '$liked_id'";
            $result_liked_count = mysqli_query($connection, $query_liked_count);

            // Check if the query was successful
            if (!$result_liked_count) {
                die('Query failed: ' . mysqli_error($connection));
            }

            // Fetch the count of liked songs
            $row_liked_count = mysqli_fetch_assoc($result_liked_count);
            $song_count = $row_liked_count['song_count'];

            // Display the count of liked songs
            echo ' <div class="outer">' .
                '<div class="left"onclick="window.location.href=\'liked_songs.php\';">' .
                '<img src="like.png" alt="like" class="leftpng">' .
                '</div>' .
                '<div class="right"onclick="window.location.href=\'liked_songs.php\';">' .
                '<div class="title">' .
                '<h1>Liked Songs</h1>' .
                '</div>' .
                '<div class="count">' .
                '<h6>' . $song_count . ' songs</h6>' .
                '</div>' .
                '</div>' .
                '<div class="option">' .
                '<span class="material-symbols-outlined more">more_vert</span>' .
                '<div class="dropdown-menu">' .
                '<ul>' .
                '<li><a href="x.html">item 1</a></li>' .
                '</ul>' .
                '</div>' .
                '</div>' .
                '</div>';
        }
        ?>



        <hr class="lin"> <br>

        <h2 class="sidehead">Playlists</h2>
        <?php
        // Display each playlist information
        while ($row = mysqli_fetch_assoc($result)) {
            $playlist_id = $row['playlist_id'];
            $song_count = $row['song_count'];

            // Fetch and display the playlist name
            $query_playlist = "SELECT name FROM playlist WHERE playlist_id = '$playlist_id'";
            $result_playlist = mysqli_query($connection, $query_playlist);

            // Check if the query was successful
            if (!$result_playlist) {
                die('Query failed: ' . mysqli_error($connection));
            }

            // Fetch the playlist name
            $row_playlist = mysqli_fetch_assoc($result_playlist);
            $playlist_name = $row_playlist['name'];

            // Display the playlist information
            echo '<div class="outer">' .
                '<div class="left" onclick="redirectToLikedSongs(' . $playlist_id . ');">' .
                '<img src="' . $playlist_id . '.jpg" alt="playlist" class="leftpng">' .
                '</div>' .
                '<div class="right"onclick="redirectToLikedSongs(' . $playlist_id . ');">' .
                '<div class="title">' .
                '<h1>' . $playlist_name . '</h1>' .
                '</div>' .
                '<div class="count">' .
                '<h6>' . $song_count . ' songs</h6>' .
                '</div>' .
                '</div>' .
                '<div class="option">' .
                '<span class="material-symbols-outlined more">more_vert</span>' .
                '<div class="dropdown-menu">' .
                '<ul>' .
                '<li><a href="x.html">item 1</a></li>' .
                '<li><a class="del" href="delete_playlist.php?playlist_id=' . $playlist_id . '">Delete playlist</a></li>' .
                '</ul>' .
                '</div>' .
                '</div>' .
                '</div>';
        }
        // JavaScript function to redirect
echo '<script>
function redirectToLikedSongs(playlistId) {
    window.location.href = "playlist_songs.php?playlist_id=" + encodeURIComponent(playlistId);
}
</script>';
        ?>






        <!-- <h2 class="sidehead">Liked songs</h2>
        <div class="outer">
            <div class="left">
                <img src="like.png" alt="like" class="leftpng">
            </div>
            <div class="right">
                <div class="title">
                    <h1>Liked songs</h1>
                </div>
                <div class="count">
                    <h6>53 songs</h6>
                </div>
            </div>
            <div class="option">
                <span class="material-symbols-outlined more">more_vert</span>
                <div class="dropdown-menu">
                    <ul>
                        <li> <a href="x.html">item 1</a></li>
                        <li>Menu Item 2</li>
                        <li>Menu Item 3</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="lin"> <br>

        <h2 class="sidehead">Playlists</h2>
        <div class="outer">
            <div class="left">
                <img src="2.jpg" alt="like" class="leftpng">
            </div>
            <div class="right">
                <div class="title">
                    <h1>My gym</h1>
                </div>
                <div class="count">
                    <h6>53 songs</h6>
                </div>
            </div>
            <div class="option">
                <span class="material-symbols-outlined more">more_vert</span>
                <div class="dropdown-menu">
                    <ul>
                        <li> <a href="x.html">item 1</a></li>
                        <li>Menu Item 2</li>
                        <li>Menu Item 3</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="outer">
            <div class="left">
                <img src="like.png" alt="like" class="leftpng">
            </div>
            <div class="right">
                <div class="title">
                    <h1>My vibes fav</h1>
                </div>
                <div class="count">
                    <h6>53 songs</h6>
                </div>
            </div>
            <div class="option">
                <span class="material-symbols-outlined more">more_vert</span>
                <div class="dropdown-menu">
                    <ul>
                        <li> <a href="x.html">item 1</a></li>
                        <li>Menu Item 2</li>
                        <li>Menu Item 3</li>
                    </ul>
                </div>
            </div>
        </div> -->







    </div>



    <br><br><br>

    <a href="#" class="scroll-to-top"><span class=" material-symbols-outlined arrow" title="Move to top">arrow_upward</span></a>
    <br>


    <footer>
        <ul class="icons">
            <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Partners</a></li>

            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="footer-copyright">
            <p>Copyright @ 2023 All Rights Reserved.</p>
        </div>
    </footer>









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
        const createPlaylistDiv = document.querySelector('.createplaylist');
        const popupDiv = document.querySelector('.popup');

        createPlaylistDiv.addEventListener('click', () => {
            if (popupDiv.style.display === 'block') {
                hidePopupDiv();
            } else {
                showPopupDiv();
            }
        });

        window.addEventListener('click', (event) => {
            if (!createPlaylistDiv.contains(event.target) && !popupDiv.contains(event.target)) {
                hidePopupDiv();
            }
        });

        function showPopupDiv() {
            popupDiv.style.display = 'block';
            positionPopupDiv();
        }

        function hidePopupDiv() {
            popupDiv.style.display = 'none';
        }

        function positionPopupDiv() {
            const createPlaylistRect = createPlaylistDiv.getBoundingClientRect();
            const popupHeight = popupDiv.offsetHeight;

            const topPosition = createPlaylistRect.bottom + 30; // Add 30px to the bottom position

            popupDiv.style.top = topPosition + 'px';
            popupDiv.style.left = createPlaylistRect.left + 'px';
        }
    </script>



    <!-- create playlist -->
    <script>
        //     function createPlaylist() {
        //   var playlistName = document.getElementById("playlistNameInput").value;

        //   // Send AJAX request to the server
        //   var xhr = new XMLHttpRequest();
        //   xhr.open("POST", "create_playlist.php", true);
        //   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        //   xhr.onreadystatechange = function () {
        //     if (xhr.readyState === 4 && xhr.status === 200) {
        //       // Handle the server response, if needed
        //       console.log(xhr.responseText);
        //     }
        //   };
        //   xhr.send("playlistName=" + encodeURIComponent(playlistName));
        // }

        function createPlaylist() {
            var playlistName = document.getElementById("playlistNameInput").value;

            // Send AJAX request to the server
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "http://localhost:8000/create_playlist.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the server response
                    var response = xhr.responseText;
                    if (response === "success") {
                        showSuccessMessage("Playlist created successfully!");

                        // Delay the page reload by 3 seconds
                        setTimeout(function() {
                            location.reload();
                        }, 3000);

                    } else {
                        // Handle the case where playlist creation failed
                        console.log("Playlist creation failed.");
                    }
                }
            };
            xhr.send("playlistName=" + encodeURIComponent(playlistName));
        }

        function showSuccessMessage(message) {
            var successMessage = document.getElementById("successMessage");
            successMessage.textContent = message;

            // Show the success message
            successMessage.classList.add("show");

            // Set timeout to hide the success message after 3 seconds
            setTimeout(function() {
                // Hide the success message
                successMessage.classList.remove("show");

                // Reset the content after hiding
                setTimeout(function() {
                    successMessage.textContent = "";
                }, 300);
            }, 3000);
        }
    </script>
</body>

</html>

<?php
// Close the database connection
mysqli_close($connection);
?>