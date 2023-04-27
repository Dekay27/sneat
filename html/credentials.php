<?php

    $hostname   = 'mysql.hightelconsult.com';
    $host       = 'tuholski.iad1-mysql-e2-1a.dreamhost.com';
    $database   = 'sneat';
    $username   = 'hightelconsult';
    $password   = 'Zozo_999_Kwame';

    // Create a new mysqli connection
    $conn = new mysqli($host, $username, $password, $database, 3306);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully!";

?>