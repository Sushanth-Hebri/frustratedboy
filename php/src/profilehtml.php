<?php
// Start the session
session_start();
error_reporting(E_ERROR | E_PARSE);


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











$servername = "db";
$username = "root";
$password = "MYSQL_ROOT_PASSWORD";
$port = '3306';
$dbname = "web_player";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is authenticated
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    // Redirect to login page or display an error message
    header('Location: sign-in.php');
    exit();
}






// Get user data from the session
$email = $_SESSION['email'];
$password = $_SESSION['password'];



// Check if the user is authenticated
if (isset($_SESSION["email"]) && isset($_SESSION["password"])) {
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    // Query the database to retrieve user information
    $sql = "SELECT * FROM users WHERE email_id = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, retrieve user information
        $row = $result->fetch_assoc();
        $emailParts = preg_split('/[.@]/', $email);
        $firstName = $emailParts[0];
        $email = $row["email_id"];
        $birthdate = $row["birthdate"];
        $country = $row["country"];
        $_SESSION["birthdate"] = $birthdate;
        $_SESSION["country"] = $country;
        $birthdate = $_SESSION['birthdate'];
        $country = $_SESSION['country'];
    }
}




// You can fetch additional user data from a database or other source based on the email and password

// Set the user's name (example)
$at_index = strpos($email, "@");  // Find the index of the '@' symbol
$dot_index = strpos($email, ".");  // Find the index of the first period '.'
$username = substr($email, 0, min($at_index, $dot_index));  // Extract the substring before the first occurrence of '@' or '.'
?>

<?php
// Prevent caching on the page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>

<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta charset="UTF-8">
    <title>User Profile</title>
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
            background-color: transparent;
            color: white;
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



        .outer {
            width: 1500px;
            height: 800px;
            border: 1px solid black;
            display: flex;
            margin-top: 60px;
        }

        .inner-left {
            width: 300px;
            background-color: #272727;

        }

        .inner-right {
            width: 1500px;
            background-color: white;
        }

        .overview {
            display: flex;
            align-items: center;

        }

        .overview h1 {
            color: black;
            font-size: 50px;
            text-align: left;
            margin-left: 60px;
        }

        .righ img {
            height: 100%;
            width: 100%;
            border-radius: 50%;
        }

        .lef {
            margin-left: 0px;
            margin-right: 280px;
        }

        .righ {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            display: flex;
            justify-content: center;
        }

        .sideheading {
            text-align: left;
            margin-left: 60px;
            font-weight: 700;
            font-size: 30px;
        }

        .content {

            height: 400px;
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .contentin {
            background-color: blue;
            width: 1200px;
            height: 200px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        label {
            width: 150px;
            color: #2e2f30;
        }

        .value {
            margin-left: 200px;
            font-weight: 800;
        }

        .profilehr {
            border-color: black;
            width: 1000px;
        }

        .left-opt {
            list-style: none;
            display: flex;
          flex-direction: column;
            justify-content: center;
        }

        .left-opt li {
            color: white;
            font-size: 20px;
            margin-top: 40px;
       
           
        }
        

        .logout{
    
        }
        .invisible{
            display: none;
            color:red;
            font-size:22px;
            background-color: white;
            width:90px;
            border-radius: 50px;
            text-align: center;
        }
        .logout:hover{
            color:red;

        }
        .logout:hover + .invisible {
    display: block;
}
.popup-container {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 200px;
    background-color: white;
    z-index: 10;
    text-align: center;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

.popup-content {
    font-size:25px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* Styles for the overlay */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9;
} 
#confirmLogout{
height:30px;
width:90px;
background-color: gray;
color:white;
font-size: 23px;
border: none;
}
#cancelLogout{
    height:30px;
width:90px;
background-color: gray;
color:white;
font-size: 23px;
border: none;
}
#confirmLogout:hover{
    background-color: red;
    cursor: pointer;
}
#cancelLogout:hover{
    background-color: green;
    cursor: pointer;
}

.butbut{
    display:flex;
    flex-direction: row;
    gap:30px;
}
.lis:hover{
    background-color: green;
         
         cursor: pointer;
       
         border-radius: 10%;
         width:100px;
}

    </style>
</head>

<body>
    <nav id="navbar">
        <ul>
            <li><img src="logo.png" alt="Heat Beat" class="logo"></li>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Library.php">Library</a></li>
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
                <li class="active"><span class="material-symbols-outlined">
                        person
                    </span></li>
            </a>
           
        </ul>
    </nav>
    <br>




    <div class="outer">
        <br><br><br><br><br><br><br>
        <div class="inner-left">
            <!-- Content for inner left div -->
            <br><br>
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


            <ul class="left-opt">
                <li class="lis">Edit profile</li>
                <li class="lis">Premium </li>
                <li class="lis">Settings</li>
              <a href="library.php"> <li class="lis">Library</li></a> 
                <br>
                <a href="#" id="logoutLink">
                <li title="Logout"  id="logoutButton"><span class="material-symbols-outlined logout">
                        logout
                    </span><h6 class="invisible">Logout</h5></li>
            </a>
            </ul>

                <!-- Add your popup container here -->
    <div id="popupContainer" class="popup-container">
        <div class="popup-content">
            <p>Confirm Sign Out ?</p>
            <div class="butbut">
            <button id="confirmLogout">Yes</button>
            <button id="cancelLogout">No</button>
            </div>
        </div>
    </div>

    <!-- Add your overlay here -->
    <div id="overlay" class="overlay"></div>



        </div>
        <div class="inner-right">
            <!-- Content for inner right div -->
            <div class="overview">
                <br> <br>
                <div class="lef">
                    <h1>Account Overview</h1>
                </div>
                <div class="righ"><img src="profile.png" alt=""></div>

            </div>
            <div class="sideheading">Hey <?php echo $username; ?> </div>

            <div class="content">

                <div class="form-container">
                    <div class="form-row">
                        <label for="username">Username:</label>
                        <span class="value" id="username"><?php echo $username; ?></span>
                    </div>

                    <hr class="profilehr">
                    <div class="form-row">
                        <label for="email">Email ID:</label>
                        <span class="value" id="email"><?php echo $email; ?></span>
                    </div>

                    <hr class="profilehr">
                    <div class="form-row">
                        <label for="dob">Date of Birth:</label>
                        <span class="value" id="birthdate"><?php echo $birthdate; ?></span>
                    </div>
                    <hr class="profilehr">

                    <div class="form-row">
                        <label for="country">Country:</label>
                        <span class="value" id="country"><?php echo $country; ?></span>
                    </div>
                    <hr class="profilehr">
                </div>
            </div>
        </div>
    </div>











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
        console.log(country);
    </script>







<!-- logout -->
<!-- <script>
    // Get the logout button element by its ID
    var logoutButton = document.getElementById('logoutButton');

    // Add a click event listener to the logout button
    logoutButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Clear the session variables
        sessionStorage.removeItem('email');
        sessionStorage.removeItem('password');

        // Clear the localStorage variables
        localStorage.removeItem('email');
        localStorage.removeItem('password');

        // Redirect to sign-in.php
        window.location.href = 'sign-in.php';
    });
</script> -->


<script>
    // Get the elements
const logoutLink = document.getElementById("logoutLink");
const popupContainer = document.getElementById("popupContainer");
const overlay = document.getElementById("overlay");
const confirmButton = document.getElementById("confirmLogout");
const cancelButton = document.getElementById("cancelLogout");

// Function to show the popup
function showPopup() {
    popupContainer.style.display = "block";
    overlay.style.display = "block";
}

// Function to hide the popup
function hidePopup() {
    popupContainer.style.display = "none";
    overlay.style.display = "none";
}

// Add click event listener to the logout link
logoutLink.addEventListener("click", function (e) {
    e.preventDefault(); // Prevent the link from navigating

    // Show the popup
    showPopup();
});

// Close the popup if the overlay is clicked
overlay.addEventListener("click", function () {
    hidePopup();
});
// Add click event listener to the "Yes" button
confirmButton.addEventListener("click", function () {
    // Clear the PHP session variables
    fetch('clear-session.php') // Replace with the correct URL to your PHP script
        .then(response => {
            if (response.ok) {
                // Clear the client-side session and local storage
                sessionStorage.removeItem('email');
                sessionStorage.removeItem('password');
                localStorage.removeItem('email');
                localStorage.removeItem('password');

                // Redirect to sign-in.php
                window.location.href = 'sign-in.php';
            }
        })
        .catch(error => {
            console.error('Error clearing session:', error);
        });

    // Hide the popup
    hidePopup();
});


// Add click event listener to the "No" button
cancelButton.addEventListener("click", function () {
    // Hide the popup
    hidePopup();
});

</script>
</body>

</html>