<?php
session_start(); // Start or resume the session

if (isset($_POST['calledalbum'])) {
    $name = $_POST['calledalbum'];
    $_SESSION['calledalbum'] = $name;
}
?>
