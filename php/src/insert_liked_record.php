<?php
// Include the database configuration file
include 'config.php';

// Get the email_id from the AJAX request
$emailId = $_POST['emailId'];

// Prepare and execute the SQL query to insert the record into the liked table
$stmt = $conn->prepare("INSERT INTO liked (email_id) VALUES (?)");
$stmt->bind_param("s", $emailId);
$stmt->execute();

$stmt->close();
$conn->close();
?>
