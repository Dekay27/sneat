<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'phpcrud');

if (isset($_POST['updatedata'])) {

    $id = $_POST['title_id'];

    $title = $_POST['title'];

    $query = "UPDATE title SET Title='$title' WHERE TitleID='$id'  ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:title.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>