<?php
session_start();

// Check if email and password are set in the session
if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    // // Output email and password to the JavaScript console
    // echo '<script>';
    // echo 'console.log("Email: ' . $email . '");';
    // echo 'console.log("Password: ' . $password . '");';
    // echo '</script>';
}
else {
    // Redirect to 'sign-in.php'
    header('Location: sign-in.php');
    exit(); // Ensure that the script stops execution after the redirection
}
?>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Dela+Gothic+One&family=EB+Garamond:ital,wght@1,500&family=Exo+2:wght@500&family=Lora&family=Mukta&family=Onest:wght@500&family=Orbitron:wght@700&family=Pacifico&family=Philosopher:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
<link rel="icon" href="logo.png" type="icon/x-image">



    <title>Heat Beat-Feel the music</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&display=swap');



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



        .out {
            width: 1400px;
            overflow-x: auto !important;
            display: flex;
            height: 240px;
            justify-content: center;
        }

        .out::-webkit-scrollbar {
            width: 0;
            height: 0;
            background-color: transparent;
        }

        .in {
            width: 1400px !important;
            white-space: nowrap !important;
            justify-content: center;
            margin-left: 300px;

        }

        .card {
            height: 230px;
            width: 250px;
            margin-right: 20px;
            display: inline-block !important;
            cursor: pointer;
            background-color: red;
            box-shadow: 4px 4px 3px 2px black;
            border-radius: 9%;
        }
        .card:hover{
            box-shadow: 2px 2px 2px 1px #5f1ea8;
        }

        .cardimage {
            height: 200px;
            width: 250px;
            align-items: center;
            border: radius 25px;

            object-fit: cover;
        }

        .cardimage img {
            width: 100%;
            height: 100%;
            border-radius: 9%;
        }

        .cardname {
            text-align: center;
            font-size: 20px;
            color: white;
            margin-top: 5px;
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


        .auto {
            position: relative;
            width: 800px;
            height: 300px;
            overflow: hidden;
            margin-left: 100px;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel-inner {
            display: flex;
            width: 100%;
        }

        .carousel-item {
            flex: 0 0 800px;
            height: 300px;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
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
            width: 300px;
            height: 70px;
            background-color: #5b5959;
            display: flex;
            cursor: pointer;
            margin-left: 30px;
            border-radius: 7px;
        }
        .one:hover{
            background-color: #43465e;
            box-shadow: 2px 2px 2px 1px #5f1ea8;
            border-radius: 10px;
        }

        .two {
            display: flex;
            object-fit: cover;
            height: 70px;
            width: 70px;
        } 
       

        .three {
            width: 230px;
            color: white;
            font-size: 23px;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .recentimg {
            height: 100%;
            width: 100%;
        }

        .sidehead {
            color: white;
            margin-left: 40px;
            font-size: 23px;
            font-family: 'Onest', sans-serif;
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
            /* width:70px; */

        }

        .card_name {
            margin-top: 3px;
        }

        .albumside {
            color: white;
            margin-left: 65px;
            width: 150px;
            background-color: #202020;
            text-align: center;
            border-radius: 20px;
            box-shadow: 4px 4px 2px 3px black;
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
    </style>
</head>

<body>

    <nav id="navbar">
        <ul>
            <a href="About.html">
                <li><img src="logo.png" alt="Heat Beat" class="logo" title="Heat-Beat"></li>
            </a>
            <a href="Home.php">
                <li class="active">Home</li>
            </a>

            <a href="Library.php">
                <li> Library</li>
            </a>
            <li>
                <!-- <form class="search-form" action="/search" method="GET">
                    <input type="text" name="query" placeholder="Search songs,artists,albums" />
                    <button type="submit">Search </button>
                </form> -->


                <form class="search-form" action="search.php" method="GET">
                    <div class="dropdown" id="dropdownContainer">
                        <input type="text" name="query" id="searchInput" required placeholder="Search songs" oninput="showDropdown()" autocomplete="off">
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
    <div class="top">
        <div class="sidebar">
            <span class="pspan">Music of the day</span>
            <div class="musicoftheday">
                <div class="imgs"><img src="33.jpg" alt=""></div>
            </div>
            <span class="pspan">Podcast</span>
            <div class="podcast">
                <div class="imgs"><img src="podcast.jpg" alt=""></div>
            </div>
        </div>
        <br>
        <div class="auto">
            <div id="carouselExample" class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="33.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="12.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="9.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>






    </div>


    <br> <br>

    <!-- <div class="recently">
        <h4 class="sidehead"> Recently played</h4>
        <div class="row1">
            <div class="one">
                <div class="two"><img class="recentimg" src="2.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>
                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="3.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>jai jai shivashankar</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="5.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pink venom</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="10.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Ashiqui</h5>

                </div>
            </div>
        </div>


        <div class="row1">
            <div class="one">
                <div class="two"><img class="recentimg" src="11.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>kanunna kalyanam</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="13.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Sahore bahubali</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="32.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Ghodey pe sawar</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="6.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Kesariya</h5>

                </div>
            </div>
        </div>
    </div> -->
    <div class="recently">
    <h4 class="sidehead">Recently played</h4>
   
</div>


<script>

// Sample mapping between song IDs and names (replace with your actual data)
const songNameMapping = {
    '1': 'Agar Tum Saath ho',
    '2': 'Rockabye',
    '3': 'Shiv_Tandav',
    '4': 'Dynamite',
    '5': 'Pink Venom',
    '6': 'Kesariya',
    '7': 'Still loving you',
    '8': 'Ringa Ringa',
    '9': 'Kagadada doniyalli',
    '10': 'Hum Tere Bin',
    '11': 'Kanunna kalyanam',
    '12': 'Kadhale Kadhale',
    '13': 'Bali bali ra bali',
    '14': 'Katheyonda helide',
    '15': 'Naatu Naatu',
    '16': 'Mastaru Mastaru',
    '17': 'Sariyagi nenapide nanage',
    '18': 'Ambari oorinalli',
    '19': 'D J tillu',
    '20': 'Paravashanadenu',
    '21': 'Badava Rascal',
    '22': 'aaj sajeya',
    '23': 'asal mein',
    '24': 'Bhool Bulaiyaa 2',
    '25': 'Bye',
    '26': 'Tu Aake Dekhle',
    '27': 'Chaand Baaliyan',
    '28': 'Maan meri Jaan',
    '29': 'Character Dheela 2.0',
    '30': 'Deewani',
    '31': 'Desperado',
    '32': 'Ghodey Pe Sawar',
    '33': 'kavalaa..',
    '34': 'Jai shri Ram',
    '35': 'Mamatala talli',
    '36': 'Jeva nadhi',
    '37': 'Dhirava',
    '38': 'pacha Bottasi',
    '39': 'Manohari',
    '40': 'Galiye',
    '41': 'Inkem Inkem',
    '42': 'Priyathama Priyatham',
    '43': 'Nithalli Nillalare',
    '44': 'Saluthillave',
    '45': 'Yaare Yaare',
    '46': 'Yenti Yenti',
    '47': 'Pal',
    '48': 'Veeron ke Veer Aa',
    '49': 'Theme of 3',
    '50': 'Apudo Ipudo',
    '51': 'Dil Ko Karaar Aaya',
    '52': 'Arambame',
    '53': 'Adheera',
    '54': 'Chola Chola',
    '55': 'Nane Oruven',
    '56': 'Ponni Nadhi',
    '57': 'Rise Of Shyam',
    '58': 'Vikram',
    '59': 'Vikramadithyan',
    '60': 'Yarenna Sonnalum',
    '61': 'Chiru Chiru',
    '62': 'Gaaliye',
    '63': 'Jeena Jeena',
    '64': 'Madarangi',
    '65': 'Nee Yadalo',
    '66': 'Sadha Ninna Kannali',
    '67': 'Thanthane ThandanThane',
    '68': 'Tum Hi Ho',
    '69': 'Boomi Enna Suthude',
    '70': 'Baliye Re',
    '71': 'Deewani Sachet',
    '72': 'Krishna Teri Ho',
    '73': 'Mohabbat',
    '74': 'Pehli Baarish Mein',
    '75': 'Danger Industry',
    '76': 'Baarishon Ki Dhun',
    '77': 'Sanam Aa Gaya',
    '78': 'Pehli Pehli Baar',
    '79': 'Mahiye Jinna',
    '80': 'Baarish Karde',
    '81': 'Dilbara',
    '82':'chaleya',
'83':'Not Ramaiya Vastavaiya'
};

// Retrieve the array of song IDs from local storage
const songIds = JSON.parse(localStorage.getItem('songIds')) || [];

// Reference to the parent container div
const recentlyPlayedContainer = document.querySelector('.recently');

// Create the first row container
const row1Container = document.createElement('div');
row1Container.className = 'row1';
recentlyPlayedContainer.appendChild(row1Container);

// Create the second row container
const row2Container = document.createElement('div');
row2Container.className = 'row1';
recentlyPlayedContainer.appendChild(row2Container);

// Sort the songIds array in descending order
songIds.sort((a, b) => b - a);

// Counter to keep track of the number of songs
let songCount = 0;

// Loop through the song IDs and create a div for each song
songIds.forEach(songId => {
    // Create a new div for the song with class 'one'
    const songDiv = document.createElement('div');
    songDiv.className = 'one';

 // Set a custom data attribute to store the song_id
 songDiv.dataset.songId = songId;

// Add click event listener to the div
songDiv.addEventListener('click', function() {
    // Get the song_id from the custom data attribute
    const selectedSongId = this.dataset.songId;

    // Redirect to another page with the selected song_id
    window.location.href = `singlesong-9.php?song_id=${selectedSongId}`;
});







    // Create the div with class 'two' to hold the image
    const divTwo = document.createElement('div');
    divTwo.className = 'two';

    // Create the image element with class 'recentimg'
    const imgElement = document.createElement('img');
    imgElement.className = 'recentimg';
    imgElement.src = `${songId}.jpg`; // Assuming image filenames match the song IDs
    imgElement.alt = '';

    // Create the div with class 'three' to hold the h5 element
    const divThree = document.createElement('div');
    divThree.className = 'three';

    // Create the h5 element for the song title
    const h5Element = document.createElement('h5');

    // Determine whether to use the song name from the beginning or end of the sorted array
   
        h5Element.innerHTML = `&nbsp;&nbsp;${songNameMapping[songId]}`; // Set the song name with &nbsp; before the text
   



    // Append the image to div 'two' and h5 element to div 'three'
    divTwo.appendChild(imgElement);
    divThree.appendChild(h5Element);

    // Append div 'two' and div 'three' to the song div 'one'
    songDiv.appendChild(divTwo);
    songDiv.appendChild(divThree);

    // Increment the song count
    songCount++;

    // Append the song div to the appropriate row
    if (songCount <= 4) {
        row2Container.appendChild(songDiv); // First 4 songs go to the second row
    } else {
        row1Container.appendChild(songDiv); // Last 4 songs go to the first row
    }
});



</script>







    <h4 class="sidehead"> Trending now</h4>
    <div class="out">
        <div class="in">



            <div class="card">
                <div class="cardimage" value="82" onclick="toplaysong(this.getAttribute('value'))"><img src="82.jpg" alt="6"></div>
                <div class="cardname">Chaleya</div>
            </div>
            <div class="card">
                <div class="cardimage" value="5" onclick="toplaysong(this.getAttribute('value'))"><img src="5.jpg" alt="5"></div>
                <div class="cardname">Pink venom</div>
            </div>
            <div class="card">
                <div class="cardimage" value="83" onclick="toplaysong(this.getAttribute('value'))"><img src="83.jpg" alt="2"></div>
                <div class="cardname">Not Ramaiya Vastavaiya</div>
            </div>
            <div class="card">
                <div class="cardimage" value="15" onclick="toplaysong(this.getAttribute('value'))"><img src="15.jpg" alt="15"></div>
                <div class="cardname">Natu Natu</div>
            </div>
            <div class="card">
                <div class="cardimage" value="33" onclick="toplaysong(this.getAttribute('value'))"><img src="33.jpg" alt="33"></div>
                <div class="cardname">Kavalayya</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> High beats</h4>
    <div class="out">
        <div class="in">



            <div class="card">
                <div class="cardimage" value="3" onclick="toplaysong(this.getAttribute('value'))"><img src="3.jpg" alt="3"></div>
                <div class="cardname">Jai jai shivashankar</div>
            </div>
            <div class="card">
                <div class="cardimage" value="13" onclick="toplaysong(this.getAttribute('value'))"><img src="13.jpg" alt="13"></div>
                <div class="cardname">Sahore bahubali</div>
            </div>
            <div class="card">
                <div class="cardimage" value="19" onclick="toplaysong(this.getAttribute('value'))"><img src="19.jpg" alt="19"></div>
                <div class="cardname">DJ tillu</div>
            </div>
            <div class="card">
                <div class="cardimage" value="21" onclick="toplaysong(this.getAttribute('value'))"><img src="21.jpg" alt="21"></div>
                <div class="cardname">Badava rascal</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="4.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <br>
    <br><br>
    <div class="albumside">
        <h1>Albums</h1>
    </div>


    <br>
    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage" value="44" onclick="redirectToDetails(this.getAttribute('value'), 'Tamil Hots')">
                    <img src="A44.jpg" alt="44">
                </div>
                <div class="cardname">Tamil Hots</div>
            </div>


            <div class="card">
                <div class="cardimage" value="31" onclick="redirectToDetails(this.getAttribute('value'),'Bahubali 2')"><img src="35.jpg"> </div>
                <div class="cardname">Bahubali 1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="A42.jpg" alt="1"></div>
                <div class="cardname">Telugu-tamil-Mix</div>
            </div>
            <div class="card">
                <div class="cardimage" value="3" onclick="redirectToDetails(this.getAttribute('value'),'Kannada Hits')"><img src="A3.jpg" alt="A3"></div>
                <div class="cardname">Kannada Hits</div>
            </div>
            <div class="card">
                <div class="cardimage" value="4" onclick="redirectToDetails(this.getAttribute('value'),'Hindi Hits')"><img src="A4.jpg"></div>
                <div class="cardname">Hindi Hits</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <!-- trail for album image  -->
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage" value="1" onclick="redirectToDetails(this.getAttribute('value'),'Trending In Inida')"><img src="A1.jpg" alt="A1"></div>
                <div class="cardname">Trending In Inida</div>
            </div>
            <div class="card">
                <div class="cardimage" value="6" onclick="redirectToDetails(this.getAttribute('value'),'Romantic')"><img src="A6.jpg" alt="A6"></div>
                <div class="cardname">Romantic</div>
            </div>
            <div class="card">
                <div class="cardimage" value="39" onclick="redirectToDetails(this.getAttribute('value'))"><img src="A39.jpg" alt="A39"></div>
                <div class="cardname">Mass Hits</div>
            </div>
            <div class="card">
                <div class="cardimage" value="45" onclick="redirectToDetails(this.getAttribute('value'))"><img src="A45.jpg" alt="A4"></div>
                <div class="cardname">Telugu Hits</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="2.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="2.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="2.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="2.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>

    <h4 class="sidehead"> Top 20</h4>
    <div class="out">
        <div class="in">

            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="2.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>
            <div class="card">
                <div class="cardimage"><img src="1.jpg" alt="1"></div>
                <div class="cardname">card-1</div>
            </div>

        </div>
    </div>




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
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.html">About</a></li>
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




    <!-- <script>
    // Attach event listener to the card-image element
    const cardImage = document.querySelector('.card-image');
    cardImage.addEventListener('click', fetchSongDetails);
  
    function fetchSongDetails() {
      const songId = cardImage.getAttribute('value');
  
      // Send a request to your server and fetch songs with the specified song_id
      fetch(`http://localhost:80/songs?song_id=${songId}`)

        .then(response => response.json())
        .then(data => {
          // Redirect to list.php and pass the songs as query parameter
          const encodedSongs = encodeURIComponent(JSON.stringify(data));
          window.location.href = `list.php?songs=${encodedSongs}`;
        })
        .catch(error => {
          console.error('Error fetching songs:', error);
        });
    } -->



    <script>
        // function redirectToDetails(albumId, name) {
        //     // Construct the URL with the album_id parameter
        //     var url = 'list.php?album_id=' + albumId;

        //     // Create a separate variable to hold the name
        //     var calledAlbum = name;
        //     console.log(name);
        //     // Set the name in the session variable 'calledalbum'
        //     sessionStorage.setItem('calledalbum', calledAlbum);
        //     console.log(calledAlbum);
           
        //     console.log(albumId);

        //     // Open the list.php page with the album_id parameter
        //     window.location.href = url;
        // }
        function redirectToDetails(albumId, name) {
        // Construct the URL with the album_id parameter
        var url = 'list.php?album_id=' + albumId;

        // Create a separate variable to hold the name
        var calledAlbum = name;
        
        // Set the name in the session variable 'calledalbum' using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'set_session.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('calledalbum=' + calledAlbum);

        // Redirect to the list.php page with the album_id parameter
        window.location.href = url;
    }
    </script>



    <script>
        function toplaysong(song_id) {
            // Construct the URL with the album_id parameter
            var url = 'singlesong-9.php?song_id=' + song_id;

            // Open the list.php page with the album_id parameter
            window.location.href = url;
        }
    </script>
    <script>
        // JavaScript code for auto carousel
        var carousel = document.getElementById("carouselExample");
        var carouselItems = carousel.getElementsByClassName("carousel-item");
        var itemWidth = carouselItems[0].offsetWidth;
        var currentIndex = 0;

        function showSlide(index) {
            var translateX = -index * itemWidth + "px";
            carousel.style.transform = "translateX(" + translateX + ")";
        }

        function showNextSlide() {
            currentIndex++;
            if (currentIndex >= carouselItems.length) {
                currentIndex = 0;
            }
            showSlide(currentIndex);
        }

        // Auto slide every 3 seconds
        setInterval(showNextSlide, 3000);
    </script>


    <script>
        // Clear specific URLs from the browsing history
        function clearSpecificURLs() {
            var urlsToClear = [
                "http://localhost/17-06-23/Enter_otp_page.php",
                "http://localhost/17-06-23/verify_otp.php"
            ];

            // Check if the current page is "Home.php" and clear the specific URLs from the history
            if (window.location.href.endsWith("Home.php")) {
                var currentURL = window.location.href;

                // Iterate over the URLs to clear
                for (var i = 0; i < urlsToClear.length; i++) {
                    var urlToClear = urlsToClear[i];

                    // Replace the specific URL with an empty URL in the browsing history
                    if (currentURL.includes(urlToClear)) {
                        window.history.replaceState({}, document.title, "");
                    }
                }
            }
        }

        clearSpecificURLs();
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




</body>

</html>