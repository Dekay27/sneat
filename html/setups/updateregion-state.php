<?php
$connection = mysqli_connect('localhost', 'root', '', 'phpgrid');

if (isset($_POST['updatedata'])) {

    $countryID = $_POST['country_id'];
    $regionDescription = $_POST['region_description'];
    $regionID = $_POST['region_id'];

    //echo $countryID;
    //echo $countryDescription;

    $query = "UPDATE regionstate SET RegionDescription='$regionDescription', CountryID=$countryID,
               WHERE RegionID='$regionID' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:country.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>