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

// get content from session
$email = $_SESSION["email"];
$password = $_SESSION["password"];
$birthdate = $_SESSION["birthdate"];
$country = $_SESSION["country"];


    

    // Sanitize the input (optional but recommended)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

        // Insert the form data into the database
        $sql = "INSERT INTO users (email_id, password,birthdate,country) VALUES ('$email', '$password','$birthdate','$country')";

        if ($conn->query($sql) === TRUE) {
         

            // Store user data in session variables for future use
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;



            // mail greetings
        
            // Get the user's email from the signup process
        // Set the "From" address
$fromEmail = 'HeatBeatgroup@gmail.com';
$fromName = 'HeatBeat Group';

// Extract the name from the email
$name = "";
if (preg_match('/^([^@.]*)[@.]/', $email, $matches)) {
    $name = $matches[1];
}

// Your company name
$companyName = 'Heat Beat';

// Email subject
$subject = 'Welcome to the World of Music!';
// Email body
$body = '<html>
<head>
    <style>
        body {
            
            color: #ffffff;
            font-family: Arial, sans-serif;
            line-height: 1.2;
            margin: 0;
            padding: 20px;
        }
        p {
            margin: 0 0 10px;
        }
    </style>
</head>
<body>
    <p>Dear ' . $name . ',</p>
    <p>Thank you for signing up to our music player platform. We are excited to have you as part of our community!</p>
    <p>At ' . $companyName . ', we are dedicated to providing you with the best music experience. Explore our vast collection of songs, create playlists, and enjoy the rhythm of melodies from around the world.</p>
    <p>If you have any questions or need assistance, feel free to reach out to our support team at ' . $fromEmail . '.</p>
    <p>Get ready to immerse yourself in the world of music!</p>
    <p>Best regards,<br>' . $companyName . '</p>
</body>
</html>';
// Set the email headers
$headers = "From: $fromName <$fromEmail>\r\n";
$headers .= "Reply-To: $fromEmail\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
// $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
$mailSent = mail($email, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
      // Redirect to another page after successful registration
      header("Location: Home.php");
      exit;
    echo "Greeting email sent successfully to $email";
} else {
    echo "Failed to send the greeting email";
}














          
        } else {
            echo "Error occurred: " . $sql . "<br>" . $conn->error;
        }
    


// Close the connection
$conn->close();
?>
