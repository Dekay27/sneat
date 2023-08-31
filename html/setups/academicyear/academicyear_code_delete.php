<?php

require_once('../../../logon.php');


if (isset($_POST['deletedata'])) {

    $id = $_POST['deleteID'];

    $query = "DELETE FROM abcegradingsystem WHERE RecordKey='$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:abcegradingsystem.php");
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
