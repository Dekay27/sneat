<?php
// Logout process
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page or home page
header("Location: auth-login-basic.php");
exit;

