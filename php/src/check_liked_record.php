<?php
// Include the database configuration file
include 'config.php';

// Get the email_id from the AJAX request
$emailId = $_POST['emailId'];

// Prepare and execute the SQL query to check if the record exists
$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM liked WHERE email_id = ?");
$stmt->bind_param("s", $emailId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Return the response (exists = true if count > 0, false otherwise)
$response = array('exists' => ($row['count'] > 0));
echo json_encode($response);

$stmt->close();
$conn->close();
?>
