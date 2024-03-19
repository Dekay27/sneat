<?php


// Connect to the database
// Establish a database connection using PDO
$db = new PDO('mysql:host=localhost;dbname=kuceportalonline', 'root', '');

// Set PDO to throw exceptions on errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>

<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="../assets/"
        data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>High School Result | ISMS - Integrated School Management System</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/sf-black-filled/64/7950F2/wi-fi-connected.png"/>

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

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>


<body>


<!-- Beginning of Body Content -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Beginning of Sidebar Content -->
        <?php include_once '../modals/sidebar.php' ?>
        <!-- / End of Sidebar Content -->

        <!-- Beginning of Internal Content -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php include_once '../modals/navigationbar.html' ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name of School Attended</th>
                                <th>Date Enrolled</th>
                                <th>Date Completed</th>
                                <th>Qualification Obtained</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td><strong>1</strong></td>
                                <td><input type="text" name="schoolName" class="form-control"
                                           placeholder="Enter school name"></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input type="text" name="qualification" class="form-control"
                                           placeholder="Enter qualification obtained"></td>
                            </tr>
                            <tr>
                                <td><strong>2</strong></td>
                                <td><input type="text" name="schoolName" class="form-control"
                                           placeholder="Enter school name"></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input type="text" name="qualification" class="form-control"
                                           placeholder="Enter qualification obtained"></td>
                            </tr>
                            <tr>
                                <td><strong>3</strong></td>
                                <td><input type="text" name="schoolName" class="form-control"
                                           placeholder="Enter school name"></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input type="text" name="qualification" class="form-control"
                                           placeholder="Enter qualification obtained"></td>
                            </tr>
                            <tr>
                                <td><strong>4</strong></td>
                                <td><input type="text" name="schoolName" class="form-control"
                                           placeholder="Enter school name"></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input class="form-control" type="month" id="setMonthAndYear"/></td>
                                <td><input type="text" name="qualification" class="form-control"
                                           placeholder="Enter qualification obtained"></td>
                            </tr>
                            <tr>
                                <td><strong>5</strong></td>
                                <td><input type="text" name="schoolName" class="form-control"
                                           placeholder="Enter school name"></td>
                                <td><input class="form-control" value="2000-06" type="month" id="setMonthAndYear"/></td>
                                <td><input class="form-control" value="2000-06" type="month" id="setMonthAndYear"/></td>
                                <td><input type="text" name="qualification" class="form-control"
                                           placeholder="Enter qualification obtained"></td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="modal-footer">
                            <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                Save changes
                            </button>
                        </div>
                    </div>


                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php include_once '../modals/footer.php' ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- End of Internal Content -->

    </div>
</div>
<!-- / End of Body Content -->


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