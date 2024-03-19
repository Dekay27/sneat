<?php

$conn = mysqli_connect('localhost', 'root', '', 'kuceportalonline');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM personaldetails WHERE SurName<>'' ORDER BY DateofApplication DESC";
$rs = mysqli_query($conn, $sql);

if (!$rs) {
    die("Query failed: " . mysqli_error($conn));
}


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Student Information</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="../../assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-auth.css"/>
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>


<body>
<div class="container">
    <h2>Student Information</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Form No.</th>
            <th>Student Name</th>
            <th>Qualification</th>
            <th>Age</th>
            <th>Programme</th>
            <th>Session</th>
            <th>Attachment</th>
            <th>Date</th>
            <th>Advert</th>
            <th>Status</th>
            <th>ID Assigned</th>
        </tr>
        </thead>
        <tbody>
        <!-- PHP code will populate table rows here -->
        <?php
        // Assuming you've fetched rows of student data into a variable $students
        // Include this part where your HTML table is defined, inside the <tbody> tag
        while ($student = mysqli_fetch_assoc($rs)) {
            echo "<tr>";
            // Ensure these column names match your database schema
            echo "<td>" . htmlspecialchars($student['no']) . "</td>";
            echo "<td>" . htmlspecialchars($student['form_no']) . "</td>";
            echo "<td>" . htmlspecialchars($student['student_name']) . "</td>";
            echo "<td>" . htmlspecialchars($student['qualification']) . "</td>";
            echo "<td>" . htmlspecialchars($student['age']) . "</td>";
            echo "<td>" . htmlspecialchars($student['programme']) . "</td>";
            echo "<td>" . htmlspecialchars($student['session']) . "</td>";
            echo "<td>" . htmlspecialchars($student['attachment']) . "</td>";
            echo "<td>" . htmlspecialchars($student['date']) . "</td>";
            echo "<td>" . htmlspecialchars($student['advert']) . "</td>";
            echo "<td>" . htmlspecialchars($student['status']) . "</td>";
            echo "<td>" . htmlspecialchars($student['id_assigned']) . "</td>";
            // Add more <td> elements for each column as needed
            // Add more <td> elements for each column as needed
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<!-- Optional: Include Bootstrap JS for functionality if you like -->
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

