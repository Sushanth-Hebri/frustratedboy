<?php
// Check if the query parameter exists in the URL
if (isset($_GET["query"])) {
    $query = $_GET["query"];

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

    // Query the songs table for matching titles and artists
    $sqlSongs = "SELECT song_id, title, artist FROM songs WHERE title LIKE '%$query%' OR artist LIKE '%$query%'";
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
<html lang="en">
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=AR+One+Sans&family=Cinzel:wght@700&family=Dela+Gothic+One&family=EB+Garamond:ital,wght@1,500&family=Exo+2:wght@500&family=Lora&family=Mukta&family=Onest:wght@500&family=Orbitron:wght@700&family=Pacifico&family=Philosopher:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">


    <title>Heat Beat-Feel the music</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&display=swap');



       html, body {
            background: linear-gradient(to bottom right, #000000, #242323e9);
           
            height: 100%;
           
           
        
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
            z-index: 3;
            width: 200px;
            height: 50px;
            margin-top: 28px;
            background-color: transparent;
            margin-left: 30px;
            display: flex;
            position: fixed;

        }

        .material-symbols-outlined {
            /* background-color: black; */
            background-color: transparent;
            border-radius: 50%;
            cursor: pointer;
            padding: 3px;
        }

        .person {
            background-color: black;
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
            bottom: 0px;
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
margin-bottom: 90px;
border: 1px solid white;
display: flex;
}

.outer.active {
border: 1px solid red; /* Set your desired border color */
}

.left {
height: 120px;
width: 140px;
background-color: red;
display: flex;
object-fit: cover;
cursor:pointer;
}

.left:hover{
opacity: 0.6;
}
.right {
width: 880px;
height: 120px;
/* background-color: rgba(10, 10, 10, 0.726); */
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
cursor: pointer;
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



.dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            width: 100%;
            border: 1px solid #ddd;
            z-index: 1;

            max-height: 300px;
            overflow-y: auto;
        }

        /* Style the dropdown items */
        .dropdown-item {
            padding: 10px;
            cursor: pointer;
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

.container {
display: flex;
justify-content: center;
align-items: center;
margin-top: 50px;
flex-direction: column;
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
.playbutto{
background-color: #13fc03;
height:90px;
width:90px;
right: 70px;
top: 400px;
border-radius: 50%;
display: flex;
justify-content: center;
align-items: center;
position: fixed;
}
@keyframes rotateColors {
0% { box-shadow: 0 0 0 0px #13fc03; }
25% { box-shadow: 0 0 0 2px #13fc03; }
50% { box-shadow: 0 0 0 5px #fc0313; }
75% { box-shadow: 0 0 0 2px #03fcfc; }
100% { box-shadow: 0 0 0 0px #fccc03; }
}

#toggleButton {
/* Your existing styles */
background-color:#13fc03;
outline: none;
border: none;
height: 90px;
width: 90px;
cursor: pointer;
border-radius: 50%;
position: relative;
animation: rotateColors 5s linear infinite;
}

.greenary{
font-size: 55px;
}
#cartoon{
height:150px;
width:150px;

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
.like-button:hover{
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
0% { transform: scale(1); }
90% { transform: scale(1.2); }
100% { transform: scale(1.1); }
}
.addToPlaylist:hover{
background-color: rgba(65, 65, 65, 0.926);
}


.red-box{
    height: 200px;
    width:200px;
    background-color: red;
}

.notbyyou{
    width:100%;
    height:200px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction:row;
    gap:10px;
} 
.achedin{
    height:60px;
    width: auto;
color:white;
    margin-top: 100px;
    font-family: 'AR One Sans', sans-serif;
    font-size:10px;
}
.aga{
    color:white;
}
    </style>
</head>

<body>

    <nav id="navbar">
        <ul>
            <li><img src="logo.png" alt="Heat Beat" class="logo"></li>
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="library.php">Library</a></li>
            <li>



            <form class="search-form" action="search.php" method="GET">
                    <div class="dropdown" id="dropdownContainer">
                        <input type="text" name="query" id="searchInput" required placeholder="Search songs" oninput="showDropdown()">
                        <div class="dropdown-content" id="dropdownContent">
                            <!-- Dropdown items will be populated here -->
                        </div>
                    </div>
                    <button type="submit">Search</button>
                </form>




            </li>
            <li><a href="#contact">
                    <div class="premium">Explore premium</div>
                </a></li>
            <li><span class="material-symbols-outlined person">
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
    <audio id="audioPlayer" onended="playNextSong()"></audio>

   <div class="achedin">
    <?php if (isset($query)) : ?>
    <h1>Songs and Artists Related to "<?php echo $query; ?>"</h1>
   </div>

    <?php if (count($songs) > 0) : ?>
        <div class="container">
            <?php foreach ($songs as $song) : ?>
                <div class="outer" data-song-id="<?php echo $song['song_id']; ?>">
                    <div class="left" onclick="redirectToSinglePlayer('<?php echo $song['song_id']; ?>')">
                        <img src="<?php echo $song['song_id']; ?>.jpg" alt="like" class="leftpng">
                    </div>
                    <div class="right">
                        <div class="title" onclick="playSongsus('<?php echo $song['song_id']; ?>', this)">
                            <h1><?php echo $song['title']; ?></h1>
                        </div>
                        <div class="count">
                            <h6><?php echo $song['artist']; ?></h6>
                        </div>
                    </div>
                    <div class="option">
                        <span class="material-symbols-outlined more">more_vert</span>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <div class="like-button" data-song-id="<?php echo $song['song_id']; ?>">
                                        <ion-icon name="heart"></ion-icon>
                                    </div>
                                </li>
                                <li class="addToPlaylist" data-song-id="<?php echo $song['song_id']; ?>">Add to playlist</li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
<?php
echo '
<script>
    function redirectToSinglePlayer(songId) {
        window.location.href = \'singlesong-9.php?song_id=\' + encodeURIComponent(songId);
    }
</script>';?>
            
        </div>
    <?php else : ?>
        <p class="aga">No related songs found.</p>
        <div class="notbyyou">
        <div class="red-box"></div>
                <div class="red-box"></div>
        </div> <br>
        <div class="notbyyou">
        <div class="red-box"></div>
                <div class="red-box"></div>
        </div> <br>
        
       
    <?php endif; ?>
<?php else : ?>
    <p>No query parameter found in the URL.</p>
<?php endif; ?>














    <br><br><br>

    <a href="#" class="scroll-to-top"><span class=" material-symbols-outlined arrow"
            title="Move to top">arrow_upward</span></a>
    <br>
    <!-- <hr class="lin"><br> -->


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
        // Smooth scrolling with ease
        const sections = document.querySelectorAll('section');
        let isScrolling = false;

        function scrollToSection(index) {
            const targetScrollTop = sections[index].offsetTop;
            const initialScrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            const distance = targetScrollTop - initialScrollTop;
            const duration = 1000; // Adjust the duration as per your preference
            const increment = 20; // Adjust the increment as per your preference

            let currentTime = 0;

            const easeOutQuart = function (t) {
                return 1 - (--t) * t * t * t;
            };

            const animateScroll = function () {
                currentTime += increment;
                const val = easeOutQuart(currentTime / duration) * distance;
                window.scrollTo(0, initialScrollTop + val);
                if (currentTime < duration) {
                    requestAnimationFrame(animateScroll);
                } else {
                    isScrolling = false;
                }
            };

            isScrolling = true;
            animateScroll();
        }

        function handleScroll(event) {
            // event.preventDefault();

            if (!isScrolling) {
                const delta = Math.sign(event.deltaY);

                if (delta < 0 && window.pageYOffset > 0) {
                    scrollToSection(getCurrentSectionIndex() - 1);
                } else if (delta > 0 && getCurrentSectionIndex() < sections.length - 1) {
                    scrollToSection(getCurrentSectionIndex() + 1);
                }
            }
        }

        function getCurrentSectionIndex() {
            const viewportHeight = window.innerHeight;
            const scrollPosition = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
            return Math.floor(scrollPosition / viewportHeight);
        }

        window.addEventListener('wheel', handleScroll);
    </script>

    <script>

        window.addEventListener('scroll', function () {
            var scrollPosition = window.pageYOffset;
            var scrollButton = document.querySelector('.scroll-to-top');

            if (scrollPosition > 200) {
                scrollButton.classList.add('show');
            } else {
                scrollButton.classList.remove('show');
            }
        });

        document.querySelector('.scroll-to-top').addEventListener('click', function (event) {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });



    </script>
    <script>
        // breadcrumb
        const backButton = document.getElementById("backButton");
        const forwardButton = document.getElementById("forwardButton");

        // Go back to the previous page
        backButton.addEventListener("click", function () {
            history.back();
        });

        // Go forward to the next page
        forwardButton.addEventListener("click", function () {
            history.forward();
        });

    </script>
    <script>
        /* Word Flip */
        (function () {
            var lang = document.documentElement.lang || 'en';
            var word = document.querySelector('.flipping-word .word');
            if (!word) return; // Don't do this function if element is not on this page
            var arr = lang == 'en'
                ? ['Our Music Player,', 'Heat Beat,']
                : ['Our Music Player,', 'Heat Beat,'];
            var i = 0;
            var animationDuration = 200;
            var animationDelay = 1750;
            word.style.animationDuration = animationDuration + 'ms';

            setWord();
            loop();

            function setWord() {
                word.innerHTML = arr[i];
            }

            function loop() {
                word.classList.remove('flip-in');
                word.classList.remove('flip-out');
                setTimeout(flipOut, animationDelay);
            }

            function flipOut() {
                word.classList.add('flip-out');
                setTimeout(flipIn, animationDuration)
            }

            function flipIn() {
                // Checks Array
                if (++i >= arr.length) {
                    i = 0;
                }

                setWord();
                word.classList.add('flip-in');
                setTimeout(loop, animationDuration);
            }
        }());
    </script>



    <script>
        // album meals
        const container = document.querySelector('.slide-container');
        const slides = document.querySelectorAll('.slide');
        const btns = document.querySelectorAll('.btn');
        const btnPrev = document.querySelector('.btn-prev');
        const btnNext = document.querySelector('.btn-next');

        const n = slides.length;
        const angle = 360 / n;

        let setId = 0;
        let deg = [];
        let x = 0;
        let y = 0;

        const touchDevice = () => ('ontouchstart' in document.documentElement);
        const setTransition = (time) => {
            let i = 0;
            for (; i < n; i++) slides[i].style.transition = `all ${time}s`;
        }
        const positionSlides = () => {
            const r = container.offsetWidth / 2;
            let i = 0;

            setTransition('0');

            for (; i < n; i++) {
                deg[i] = i * angle;
                x = Math.cos(deg[i] * (Math.PI / 180)) * r + r;
                y = Math.sin(deg[i] * (Math.PI / 180)) * r + r;

                slides[i].style.top = `${~~y}px`;
                slides[i].style.left = `${~~x}px`;
            }

            setTimeout(() => {
                setTransition('.3');
            }, 10);
        }
        const prevSlide = () => {
            let i = 0;
            for (; i < n; i++) deg[i] -= angle;
            animateSlide();
        }
        const nextSlide = () => {
            let i = 0;
            for (; i < n; i++) deg[i] += angle;
            animateSlide();
        }
        const animateSlide = () => {
            const r = container.offsetWidth / 2;
            let i = 0;

            for (; i < n; i++) {
                x = Math.cos(deg[i] * (Math.PI / 180)) * r + r;
                y = Math.sin(deg[i] * (Math.PI / 180)) * r + r;

                slides[i].style.top = `${~~y}px`;
                slides[i].style.left = `${~~x}px`;

                y === 0 ? slides[i].classList.add('active') : slides[i].classList.remove('active');
            }

            const activeSlide = document.querySelector('.slide.active');
            const slideBgImg = getComputedStyle(activeSlide).backgroundImage;

            container.style.backgroundImage = slideBgImg;
        }
        const autoPlay = () => setId = setInterval(nextSlide, 3000);
        const changeSlideImg = (e) => {
            let i = 0;
            for (; i < n; i++) slides[i].classList.remove('active');
            e.currentTarget.classList.add('active');

            const activeSlide = document.querySelector('.slide.active');
            const slideBgImg = getComputedStyle(activeSlide).backgroundImage;

            container.style.backgroundImage = slideBgImg;
        }

        positionSlides();
        nextSlide();
        autoPlay();

        btnPrev.addEventListener('click', prevSlide);
        btnNext.addEventListener('click', nextSlide);
        btns.forEach(btn => {
            btn.addEventListener('mouseenter', () => clearInterval(setId));
            btn.addEventListener('mouseleave', () => {
                clearInterval(setId);
                autoPlay();
            });
        })
        slides.forEach(slide => {
            if (touchDevice()) {
                slide.addEventListener('click', (e) => {
                    changeSlideImg(e);
                    clearInterval(setId);
                    autoPlay();
                });
            }
            else {
                slide.addEventListener('mouseenter', (e) => {
                    changeSlideImg(e);
                    clearInterval(setId);
                });
                slide.addEventListener('mouseleave', () => {
                    clearInterval(setId);
                    autoPlay();
                });
            }
        })
        window.addEventListener('resize', () => {
            clearInterval(setId);
            positionSlides();
            autoPlay();
        })
    </script>
  

  <script>
    
    function playSongsus(songId, clickedDiv) {

//correct dude
var songUrl = songId + '.mp3';
audioPlayer.src = songUrl;
audioPlayer.play();

// Remove active class from all song divs
var songDivs = document.querySelectorAll('.outer[data-song-id]');
songDivs.forEach(function (songDiv) {
    songDiv.classList.remove('active');
});

// Add active class to the clicked song div
clickedDiv.closest('.outer[data-song-id="' + songId + '"]').classList.add('active');
}
  </script>

  
<script>
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


        const songDiv = event.target.closest('.outer');
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
                    songDiv.querySelector('.option').style.backgroundColor = 'red';

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
</script>





<!-- dropdown script  -->
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
        let timer;

        function showDropdown() {
            clearTimeout(timer);

            const input = document.getElementById("searchInput");
            const dropdown = document.getElementById("dropdownContent");

            // Clear previous dropdown items
            dropdown.innerHTML = "";

            // Get the current input value
            const inputValue = input.value.trim();

            // Fetch matching songs from the server/database
            if (inputValue.length > 0) {
                timer = setTimeout(() => {
                    fetch(`search_songs.php?query=${inputValue}`)
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(song => {
                                const item = document.createElement("div");
                                item.classList.add("dropdown-item");
                                item.textContent = song.title;
                                item.addEventListener("click", () => {
                                    input.value = song.title;
                                    dropdown.innerHTML = ""; // Clear dropdown after selection
                                });
                                dropdown.appendChild(item);
                            });
                        })
                        .catch(error => console.error(error));

                    dropdown.style.display = "block";
                }, 300); // Add a delay to avoid rapid requests while typing
            } else {
                dropdown.style.display = "none";
            }
        }
    </script>


<script>
    // Close dropdown when clicking outside of it
    document.addEventListener("click", function(event) {
        const dropdownContainer = document.getElementById("dropdownContainer");
        if (!dropdownContainer.contains(event.target)) {
            const dropdown = document.getElementById("dropdownContent");
            dropdown.style.display = "none";
        }
    });
</script>




<script>
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
      xhr.open('POST', 'check_liked_record.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            resolve(response);
          } else {
            reject(new Error('Error fetching checkLikedRecord'));
          }
        }
      };
      xhr.onerror = function () {
        reject(new Error('Error fetching checkLikedRecord'));
      };
      xhr.send('emailId=' + encodeURIComponent(emailId) + '&songId=' + encodeURIComponent(songId));
    });
  }

  // Function to insert the record into the liked table
  function insertLikedRecord(emailId) {
    return new Promise((resolve, reject) => {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'insert_liked_record.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            resolve();
          } else {
            reject(new Error('Error fetching insertLikedRecord'));
          }
        }
      };
      xhr.onerror = function () {
        reject(new Error('Error fetching insertLikedRecord'));
      };
      xhr.send('emailId=' + encodeURIComponent(emailId));
    });
  }

  // Function to insert the record into the liked_song table
  function insertLikedSongRecord(emailId, songId) {
    return new Promise((resolve, reject) => {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'insert_liked_song_record.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            resolve();
          } else {
            reject(new Error('Error fetching insertLikedSongRecord'));
          }
        }
      };
      xhr.onerror = function () {
        reject(new Error('Error fetching insertLikedSongRecord'));
      };
      xhr.send('emailId=' + encodeURIComponent(emailId) + '&songId=' + encodeURIComponent(songId));
    });
  }

  // Function to remove the record from the liked_song table
  function removeLikedSongRecord(emailId, songId) {
    return new Promise((resolve, reject) => {
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'remove_liked_song_record.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            resolve();
          } else {
            reject(new Error('Error fetching removeLikedSongRecord'));
          }
        }
      };
      xhr.onerror = function () {
        reject(new Error('Error fetching removeLikedSongRecord'));
      };
      xhr.send('emailId=' + encodeURIComponent(emailId) + '&songId=' + encodeURIComponent(songId));
    });
  }
</script>


<script>
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

</script>

<script>

    // player
    var songDetails = <?php echo json_encode($songDetails); ?>;
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
        songDivs.forEach(function (songDiv) {
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
</body>

</html>