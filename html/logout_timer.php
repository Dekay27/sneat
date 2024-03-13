<?php
session_start();

// Check if "last_activity" is set
if (isset($_SESSION['last_activity'])) {
// Calculate the session's lifetime since the last activity
$secondsInactive = time() - $_SESSION['last_activity'];

// Time period set for timeout (e.g., 600 seconds = 10 minutes)
$timeoutPeriod = 600;

if ($secondsInactive >= $timeoutPeriod) {
// Destroy session and redirect to login page or display timeout message
session_unset(); // Unset $_SESSION variable for the run-time
session_destroy(); // Destroy session data in storage
header("Location: login.php"); // Redirect to login page
exit;
}
}

// Update last activity time stamp
$_SESSION['last_activity'] = time();
