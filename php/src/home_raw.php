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
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&family=Roboto&display=swap');



        body {
            /* background: linear-gradient(to bottom right, #000000, #242323e9); */
background-color: white;
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
            display: flex !important;
            align-items: center !important;
        }

        .search-form input[type="text"] {
            padding: 10px !important;
            border: 0px solid #ccc !important;
            border-radius: 4px !important;
            width: 200px !important;
        }

        .search-form button[type="submit"] {
            padding: 8px 12px;
            background-color: #686565 !important;
            border: 1px solid #ccc !important;
            border-radius: 4px !important;
            margin-left: 5px !important;
            cursor: pointer !important;
        }

        .logo {
            height: 70px !important;
            width: 70px !important;
            border-radius: 50% !important;
            /* Makes the border circular */
            border: 2px solid #ccc !important;
            transition: border-color 0.3s ease !important;
        }

        .logo:hover {
            border-color: #7606e7 !important;
            cursor: pointer !important;
        }

        .material-symbols-outlined {
            color: white !important;
            font-size: 30px !important;
        }

        .premium {
            background-color: rgb(255, 255, 255) !important;
            color: rgb(4, 4, 4) !important;
            width: 200px !important;
            border-radius: 40px / 80px !important;
            box-shadow: 2px 2px 4px 2px rgb(72, 67, 67) !important;
        }

        .premium:hover {
            box-shadow: 2px 2px 4px 2px rgb(83, 98, 59) !important;
        }




        .out {
            width: 1400px;
            overflow-x: auto !important;
            display: flex;
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
            height: 250px;
            width: 250px;
            margin-right: 20px;
            display: inline-block !important;
            cursor: pointer;
            background-color: #212120;
            box-shadow:3px 3px 2px 2px black;
        }

        .cardimage {
            height: 260px;
            width: 255px;
            align-items:center;
            border: radius 25px;
            fill: aqua;
            object-fit:fill;
        }

        .cardimage img {
            width: 100%;
            height: 100%;
        }

        .cardname {
            text-align: center;
            font-size: 0px;
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
            border-radius: 7%;
        }

        .two {
            display: flex;
            object-fit: cover;
            height: 70px;
            width: 70px;
        }

        .three {
            width: auto;
            color: white;
            font-size: 23px;
            display: flex;
            align-items: center;
        }

        .recentimg {
            height: 100%;
            width: 100%;
        }

        .sidehead {
            color: white;
            margin-left: 40px;
            font-size: 23px;

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
            border-radius:7%;
        }

        .card_name {
            margin-top: 3px;
        }
        .albumside{
            color:white;
            margin-left:65px;
            width:150px;
            background-color: #202020;
            text-align: center;
           
            box-shadow: 4px 4px 2px 3px #292625;
        }
    </style>
</head>

<body>

    <nav id="navbar">
        <ul>
            <li><img src="logo.png" alt="Heat Beat" class="logo"></li>
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="library.php">Library</a></li>
            <li>
                <form class="search-form" action="/search" method="GET">
                    <input type="text" name="query" placeholder="Search songs,artists,albums" />
                    <button type="submit">Search </button>
                </form>
            </li>
            <li><a href="#contact">
                    <div class="premium">Explore premium</div>
                </a></li>
           <a href="profilehtml.php"> <li><span class="material-symbols-outlined">
                    person
                </span></li></a>
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
                <div class="imgs"><img src="jailer.jpg" alt=""></div>
            </div>
            <span class="pspan">Podcast</span>
            <div class="podcast">
                <div class="imgs"><img src="personaldevelopment.jpg" alt=""></div>
            </div>
        </div>
        <br>
        <div class="auto">
            <div id="carouselExample" class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="3.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>






    </div>


    <br> <br>

    <div class="recently">
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
                    <h5>Pasoori</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="5.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="personaldevelopment.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>

                </div>
            </div>
        </div>


        <div class="row1">
            <div class="one">
                <div class="two"><img class="recentimg" src="1.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="personaldevelopment.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="2.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>

                </div>
            </div>
            <div class="one">
                <div class="two"><img class="recentimg" src="personaldevelopment.jpg" alt=""></div>&nbsp;&nbsp;&nbsp;
                <div class="three">
                    <h5>Pasoori</h5>

                </div>
            </div>
        </div>
    </div>








    <h4 class="sidehead"> Trending now</h4>
    <div class="out">
        <div class="in">


        
            <div class="card">
                <div class="cardimage" value="6" onclick="toplaysong(this.getAttribute('value'))"><img src="6.jpg" alt="6"></div>
                <div class="cardname">Kesariya</div>
            </div>
            <div class="card">
                <div class="cardimage" value="5" onclick="toplaysong(this.getAttribute('value'))"><img src="5.jpg" alt="5"></div>
                <div class="cardname">Pink venom</div>
            </div>
            <div class="card">
                <div class="cardimage" value="2" onclick="toplaysong(this.getAttribute('value'))"><img src="2.jpg" alt="2"></div>
                <div class="cardname">Pasoori</div>
            </div>
            <div class="card">
                <div class="cardimage" value="15" onclick="toplaysong(this.getAttribute('value'))"><img src="15.jpg" alt="15"></div>
                <div class="cardname">Natu Natu</div>
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
                <div class="cardimage" value="1" onclick="redirectToDetails(this.getAttribute('value'))"><img src="1.jpg" alt="1"></div>
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
        function redirectToDetails(albumId) {
            // Construct the URL with the album_id parameter
            var url = 'list.php?album_id=' + albumId;

            // Open the list.php page with the album_id parameter
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

</body>

</html>