<?php

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Anton&family=Orbitron:wght@700&family=Playfair:wght@600&family=Poppins&display=swap');
        .container-profile {
    width: 400px;
    margin: 0 auto;
    text-align: center;
}
       

        * {
            font-family: 'Anton', sans-serif;
            font-family: 'Mukta', sans-serif;
            font-family: 'Orbitron', sans-serif;
            font-family: 'Playfair', serif;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(to bottom right, #000000, #242323e9);
          
        }

        // #navbar {
        //     position: fixed;
        //     top: 0;
        //     left: 0;
        //     width: 100%;
        //     background-color: #202020;
        //     padding: 10px 0;
        //     z-index: 999;
        //     height: 70px;
        //     display: flex;
        //     align-items: center;
        //     box-shadow: 3px 3px 20px 0px black;

        // }

        // #navbar ul {
        //     list-style-type: none;
        //     margin: 0;
        //     padding: 0;
        //     text-align: center;
        //     width: 100%;
        //     display: flex;
        //     align-items: center;



        // }

        // #navbar li {
        //     display: inline-block;
        //     margin-right: 20px;
        //     font-size: 20px;
        // }

        // #navbar li:nth-child(1) {
        //     margin-left: 90px;
        // }

        // #navbar li:nth-child(2) {
        //     margin-left: 30px;
        // }

        // #navbar li:nth-child(3) {
        //     margin-left: 60px;
        // }

        // #navbar li:nth-child(4) {
        //     margin-left: 30px;
        // }

        // #navbar li:nth-child(5) {
        //     margin-left: 170px;
        // }

        // #navbar li:nth-child(6) {
        //     margin-left: 60px;
        // }

        // #navbar a {
        //     text-decoration: none;
        //     color: #fef2f2;
        //     font-weight: bold;
        //     padding: 5px 10px;
        //     transition: all 0.3s ease;
        // }

        // /* #navbar a:hover {
        //     background-color: #333;
        //     color: #fff;
        // } */

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
#carouselExampleIndicators{
    display: flex;
    object-fit:cover;
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
        .arrow:hover{
            color:rgb(90, 89, 91);
        }


  

a {
  text-decoration: none;
}

footer{
    background-color: #272727;
    text-align: center;
    text-transform: uppercase;
    padding-top: 30px;
    margin-top: auto;
}

footer li{
    list-style: none;
    margin: 10px;
    display: inline-block;
}

.icons a{
    background: #52527a;
    color: #272727;
    padding: 14px;
    font-size: 20px;
    border-radius: 100%;
    display: flex;
}
.icons a:hover{
    color: #ffffff;
    transition: 0.5s;
}

.menu a{
    color: #ffffff;
    text-transform: capitalize;
}
.menu a:hover{
    color: #52527a;
    transition: 0.5s;
}

.footer-copyright{
    background-color:#52527a;
    color: #ffffff;
    padding: 15px;
    margin-top: 30px;
    text-transform: capitalize;
}

.footer-copyright p{
    margin-bottom: 0px;
}

.lin{
    background-color: rgb(163, 159, 159);
}
.active{
    background-color: rgb(99, 96, 96);
}





    </style>
</head>
<body>
<nav id="navbar">
        <ul>
            <li><img src="logo.png" alt="Heat Beat" class="logo"></li>
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">Library</a></li>
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
    
    <div class="container-profile">
        <?php include("profile.php"); ?>
    </div>


</body>
</html>
?>