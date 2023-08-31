<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["password"]);
// Optionally, destroy the entire session
// session_destroy();
?>
