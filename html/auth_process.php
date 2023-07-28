<?php
session_start();
require 'credentials.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare and execute a SQL query to check if the user exists in the "users" table
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // Check if the query returned any rows (i.e., if the user is authenticated)
    if ($result->num_rows > 0) {

        $result->data_seek(0); // Move the internal pointer to the first row (index 0)
        $row = $result->fetch_assoc();

        // Create user session
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        // User authenticated, redirect to a dashboard or homepage
        header("Location: /html/index.php");
        exit();
    } else {
        // Invalid credentials, show an error message
        echo '<script>alert("Invalid username or password. Please try again.");';
        echo 'window.location.href = "authenticate.php"</script>';

        //header("Location: index.php");
        //exit();
    }

    // Close the connection
    $conn->close();

}
?>