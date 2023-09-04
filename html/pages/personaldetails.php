<?php


// Connect to the database
// Establish a database connection using PDO
$db = new PDO('mysql:host=mysql.hightelconsult.com;dbname=kuceportalonline', 'hightelconsult', 'Zozo_999_Kwame');

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

    <title>Personal Details | ISMS - Integrated School Management System</title>

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
                    <h4 class="fw-bold py-3 mb-4 text-center">Application Form For Certificate, Undergraduate, and
                        Postgraduate
                        Programmes</h4>

                    <div class="card">
                        <form action="personaldetails.php" method="POST">
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-lg-6 mb-3">
                                        <label for="updateGrade" class="form-label">Programme</label>
                                        <select id="updateDescription" name="updateDescription" class="form-select">
                                            <option selected></option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT distinct programmes.ProgrammeDescription FROM programmes ORDER BY ProgrammeDescription ASC';
                                            $result = $db->query($query);
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($rows as $row) {
                                                echo '<option value="' . $row['ProgrammeDescription'] . '">' . $row['ProgrammeDescription'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="updateLowerMark" class="form-label">Session</label>
                                        <select id="updateDescription" name="updateDescription" class="form-select">
                                            <option selected></option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT * FROM coursetable';
                                            $result = $db->query($query);
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($rows as $row) {
                                                echo '<option value="' . $row['COURSEDESCRIPTION'] . '">' . $row['COURSEDESCRIPTION'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col mb-3">
                                        <label for="updateUpperMark" class="form-label">Mode of Application</label>
                                        <select id="updateDescription" name="updateDescription" class="form-select">
                                            <option selected></option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT * FROM modeofapplication';
                                            $result = $db->query($query);
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($rows as $row) {
                                                echo '<option value="' . $row['ModeofApplication'] . '">' . $row['ModeofApplication'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <hr>
                                <h6 class="card-header">Personal Details</h6>
                                <div class="row g-2">
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateTitle" class="form-label">Title</label>
                                        <select id="updateDescription" name="updateDescription" class="form-select">
                                            <option selected>Select a title..</option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT * FROM title';
                                            $result = $db->query($query);
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($rows as $row) {
                                                echo '<option value="' . $row['Title'] . '">' . $row['Title'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- names -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Surname</label>
                                        <input
                                                type="text"
                                                id="updateDescription"
                                                name="updateDescription"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGradePoint" class="form-label">First Name</label>
                                        <input
                                                type="text"
                                                id="updateGradePoint"
                                                name="updateGradePoint"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGradePoint" class="form-label">Other Names</label>
                                        <input
                                                type="text"
                                                id="updateGradePoint"
                                                name="updateGradePoint"
                                                class="form-control"
                                        />
                                    </div>
                                </div>

                                <!-- gender -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Gender</label>
                                        <input
                                                type="text"
                                                id="updateDescription"
                                                name="updateDescription"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="html5-date-input" class="form-label">Date of Birth</label>
                                        <input class="form-control" type="date" value="2005-06-18"
                                               id="html5-date-input"/>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Place of Birth</label>
                                        <input
                                                type="text"
                                                id="updateDescription"
                                                name="updateDescription"
                                                class="form-control"
                                        />
                                    </div>
                                </div>

                                <!-- others -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Hometown</label>
                                        <input
                                                type="text"
                                                id="updateDescription"
                                                name="updateDescription"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGradePoint" class="form-label">Region of Hometown</label>
                                        <input
                                                type="text"
                                                id="updateGradePoint"
                                                name="updateGradePoint"
                                                class="form-control"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Country of Origin</label>
                                        <select id="updateDescription" name="updateDescription" class="form-select">
                                            <option selected></option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT * FROM country';
                                            $result = $db->query($query);
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($rows as $row) {
                                                echo '<option value="' . $row['CountryDescription'] . '">' . $row['CountryDescription'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Religious Background</label>
                                        <input
                                                type="text"
                                                id="updateDescription"
                                                name="updateDescription"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGradePoint" class="form-label">Marital Status</label>
                                        <select id="updateDescription" name="updateDescription" class="form-select">
                                            <option selected></option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT * FROM maritalstatus';
                                            $result = $db->query($query);
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($rows as $row) {
                                                echo '<option value="' . $row['MaritalStatus'] . '">' . $row['MaritalStatus'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">How did you hear about the
                                            school?</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option selected></option>
                                            <option value="1">Social Media</option>
                                            <option value="2">Bill Board</option>
                                            <option value="2">Flyers</option>
                                            <option value="3">Radio Advert</option>
                                            <option value="3">Through a Friend</option>
                                            <option value="3">Through a Staff/Student</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="updateDescription" class="form-label">If recommended by Staff or
                                            Student, indicate the Name:</label>
                                        <input
                                                type="text"
                                                id="updateDescription"
                                                name="updateDescription"
                                                class="form-control"
                                        />
                                    </div>
                                </div>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                    Save changes
                                </button>
                            </div>

                        </form>

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