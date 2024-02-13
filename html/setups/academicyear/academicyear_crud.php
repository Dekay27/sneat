<?php

$connection = mysqli_connect('mysql.hightelconsult.com', 'hightelconsult', 'Zozo_999_Kwame', 'kuceportalonline');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['insertdata'])) {
        $yearCode = $_POST['insertID'];
        $academicYear = $_POST['insertAcademicYear'];
        $query = "INSERT INTO academicyear (YearCode, AcademicYear) VALUES (?, ?)";
        // Insert operation

    } elseif (isset($_POST['updatedata'])) {
        $yearCode = $_POST['updateID'];
        $academicYear = $_POST['updateAcademicYear'];
        $query = "UPDATE academicyear SET AcademicYear=? WHERE YearCode=?";
        // Update operation

    } elseif (isset($_POST['deletedata'])) {
        $yearCode = $_POST['deleteID'];
        $query = "DELETE FROM academicyear WHERE YearCode=?";
        // Delete operation
    }

    // Prepare and execute query (common for insert, update, delete)
    $stmt = mysqli_prepare($connection, $query);
    if ($stmt) {
        if (isset($_POST['insertdata']) || isset($_POST['updatedata'])) {
            mysqli_stmt_bind_param($stmt, "is", $yearCode, $academicYear);
        } elseif (isset($_POST['deletedata'])) {
            mysqli_stmt_bind_param($stmt, "i", $yearCode);
        }

        if (mysqli_stmt_execute($stmt)) {
            $message = "Operation successful.";
        } else {
            $message = "Error: " . mysqli_error($connection);
        }
        mysqli_stmt_close($stmt);
    } else {
        $message = "Error: " . mysqli_error($connection);
    }
}
mysqli_close($connection);
?>
