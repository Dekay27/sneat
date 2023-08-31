<?php

require_once('../../../logon.php');

if (isset($_POST['updatedata'])) {

    $id = $_POST['updateID'];
    $grade = $_POST['updateGrade'];
    $numericGrade = $_POST['updateNumericGrade'];

    $query = "UPDATE abcegradingsystem SET Grade='$grade', NumericGrade='$numericGrade' WHERE RecordKey='$id'  ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:abcegradingsystem.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>