<?php 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to login page
    header("Location: index.php");
    exit;
} 
?>