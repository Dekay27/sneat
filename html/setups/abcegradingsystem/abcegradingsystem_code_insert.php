<?php

require_once('../../../logon.php');

if (isset($_POST['insertdata'])) {

    // $id = $_POST['updateID'];
    $grade = $_POST['insertGrade'];
    $numericGrade = $_POST['insertNumericGrade'];

    $query = "INSERT INTO abcegradingsystem (`Grade`,`NumericGrade`) VALUES ('$grade','$numericGrade')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: abcegradingsystem.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>