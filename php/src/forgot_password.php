<?php
session_start(); // Start the session
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
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter otp</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: url('https://images.unsplash.com/photo-1596211730558-6b536e4f1efe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80');
        }

        .main {
            width: 350px;
            height: 500px;
            background: red;
            overflow: hidden;
            background: url("bg-signin.jfif") no-repeat center/ cover;

            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        }

        .in {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            color: white;
            display: flex;
            align-items:flex-start;

        }

        label {
            color: #fff;
            font-size: 30px;
            justify-content: center;
            display: flex;
            margin: 50px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #573b8a;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }

        button:hover {
            background: #6d44b8;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            height: 30px;
            transition: background-color 0.2s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: darkgreen;
            transform: scale(1.2);
        }


        .loading-gif {
            display: none;
            position: fixed;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            height:100px;
            width:250px;
            text-align: center;
        }

        .loading-gif img {
            /* Add any additional styles for the loading GIF */
        }
        .loading-area {
            display: grid;
            place-items: center;
            height: 100px;
            width: 250px;
        }
        .loader div {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            transform: scale(0);
            animation: animate 1.5s ease-in-out infinite;
            display: inline-block;
            margin: .5rem;
        }
        .loader div:nth-child(1) {
            animation-delay: 0s;
        }
        .loader div:nth-child(2) {
            animation-delay: 0.2s;
        }
        .loader div:nth-child(3) {
            animation-delay: 0.4s;
        }
        .loader div:nth-child(4) {
            animation-delay: 0.6s;
        }
        .loader div:nth-child(5) {
            animation-delay: 0.8s;
        }
        .loader div:nth-child(6) {
            animation-delay: 1s;
        }
        .loader div:nth-child(7) {
            animation-delay: 1.2s;
        }
        @keyframes animate {
            0%, 100% {
                transform: scale(0.2);
                background-color: #BD0036;
            }
            40% {
                transform: scale(1);
                background-color: #F25330;
            }
            50% {
                transform: scale(1);
                background-color: #F2B900;
            }
        }
        
    </style>
</head>

<body>

    <!-- HTML form to send emailid to step2 -->
    <div class="main">
        <div class="in">
            <form action="http://localhost:8000/forgot_password_step2.php" id="otpForm" method="POST">
                <label for="Enteredemail">Forgot password</label>
                <input type="text" name="Enteredemail" id="Enteredemail" placeholder="Enter registered Email-Id" required>
                <input type="submit" value="Send OTP">
            </form>

            <div id="loadingGif" class="loading-gif">
                <!-- <img src="2.jpg" alt="Loading GIF"> -->
                <div class="loading-area">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

            </div>
        </div>
    </div>





    <script>
        window.onload = function() {
            document.getElementById("otpForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent form submission

                var loadingGif = document.getElementById("loadingGif");
                loadingGif.style.display = "block"; // Show the loading GIF

                setTimeout(function() {
                    loadingGif.style.display = "none"; // Hide the loading GIF
                    event.target.submit(); // Submit the form after 4 seconds
                }, 4000);
            });
        }
    </script>
</body>

</html>