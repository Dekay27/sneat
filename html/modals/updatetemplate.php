<?php
//$connection = mysqli_connect("localhost", "root", "");
//$db = mysqli_select_db($connection, 'phpcrud');

$connection = mysqli_connect("127.0.0.1", "root", "12341234", "test");
require_once('logon.php');

if (isset($_POST['updatedata'])) {
    $id = $_POST['idWithTitle'];

    $name = $_POST['nameWithTitle'];
    $email = $_POST['emailWithTitle'];
    $dob = $_POST['dobWithTitle'];

    $query = "UPDATE users SET name='$name', email='$email', email_verified_at='$dob' WHERE id='$id'  ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:template.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>