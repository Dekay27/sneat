<?php

$connection = mysqli_connect("mysql.hightelconsult.com", "hightelconsult", "Zozo_999_Kwame");
$db = mysqli_select_db($connection, 'kuceportalonliner');

if (isset($_POST['updatedata'])) {

    $id = $_POST['title_id'];

    $title = $_POST['title'];

    $query = "UPDATE title SET Title='$title' WHERE TitleID='$id'  ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:title.php");
    } else {
        echo '<script>
                    alert("Data Not Updated");
                    setTimeout(function() {
                        window.location.href = "title.php";
                    }, 500); // 500 milliseconds (half a second)
               </script>';

    }
}
?>