<?php
$connection = mysqli_connect('localhost', 'root', '', 'kuceportal');

if (isset($_POST['updatedata'])) {

    $countryID = $_POST['country_id'];
    $countryDescription = $_POST['country_description'];

    //echo $countryID;
    //echo $countryDescription;

    $query = "UPDATE country SET CountryDescription='$countryDescription'
               WHERE CountryID='$countryID'  ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:country.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>