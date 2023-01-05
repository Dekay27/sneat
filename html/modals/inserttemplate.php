<?php

$connection = mysqli_connect("127.0.0.1", "root", "12341234","test");

if (isset($_POST['insertdata'])) {
    $name = $_POST['insertName'];
    $email = $_POST['insertEmail'];
    $email_verified_at = date('Y-m-d h:i:s');
    $password = uniqid();

    echo $name, $email, $email_verified_at;

    $query = "INSERT INTO users (`name`,`email`,`email_verified_at`,`password`) 
                            VALUES ('$name','$email','$email_verified_at','$password')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: template.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>