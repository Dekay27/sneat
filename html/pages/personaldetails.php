<?php


// Connect to the database
// Establish a database connection using PDO
$db = new PDO('mysql:host=localhost;dbname=kuceportalonline', 'root', '');

// Set PDO to throw exceptions on errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['login'])) {
    // $username = trim($_POST['email-username']); // Ensure the 'name' attribute in HTML matches
    // $username = strip_tags($username);
    // $username = htmlspecialchars($username);

    $programme = trim($_POST['updateProgramme']);
    $session = trim($_POST['updateSession']);
    $modeofapplication = trim($_POST['updateModeofApplication']);
    $title = trim($_POST['updateTitle']);
    $surname = trim($_POST['updateSurname']);
    $firstname = trim($_POST['updateFirstName']);
    $othernames = trim($_POST['updateOtherNames']);
    $gender = trim($_POST['updateGender']);
    $dateofbirth = trim($_POST['updateDateofBirth']);
    $placeofbirth = trim($_POST['updatePlaceofBirth']);
    $hometown = trim($_POST['updateHometown']);
    $region = trim($_POST['updateRegion']);
    $country = trim($_POST['updateCountry']);
    $religion = trim($_POST['updateReligion']);
    $maritalstatus = trim($_POST['updateMaritalStatus']);
    $touchpoint = trim($_POST['updateTouchpoint']);
    $recommender = trim($_POST['updateRecommender']);

}

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
                                        <label for="updateProgramme" class="form-label">Programme</label>
                                        <select id="updateProgramme" name="updateProgramme" class="form-select">
                                            <option selected></option>
                                            <?php
                                            // SQL query to fetch options from the 'title' table
                                            $query = 'SELECT distinct programmes.ProgrammeDescription FROM programmes ORDER BY ProgrammeDescription';
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
                                        <label for="updateSession" class="form-label">Session</label>
                                        <select id="updateSession" name="updateSession" class="form-select">
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
                                        <label for="updateModeofApplication" class="form-label">Mode of Application</label>
                                        <select id="updateModeofApplication" name="updateModeofApplication" class="form-select">
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
                                        <select id="updateTitle" name="updateTitle" class="form-select">
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
                                        <label for="updateSurname" class="form-label">Surname</label>
                                        <input
                                                type="text"
                                                id="updateSurname"
                                                name="updateSurname"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateFirstName" class="form-label">First Name</label>
                                        <input
                                                type="text"
                                                id="updateFirstName"
                                                name="updateFirstName"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateOtherNames" class="form-label">Other Names</label>
                                        <input
                                                type="text"
                                                id="updateOtherNames"
                                                name="updateOtherNames"
                                                class="form-control"
                                        />
                                    </div>
                                </div>

                                <!-- gender -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGender" class="form-label">Gender</label>
                                        <input
                                                type="text"
                                                id="updateGender"
                                                name="updateGender"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDateofBirth" class="form-label">Date of Birth</label>
                                        <input class="form-control" type="date" value="2005-06-18"
                                               id="updateDateofBirth"/>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updatePlaceofBirth" class="form-label">Place of Birth</label>
                                        <input
                                                type="text"
                                                id="updatePlaceofBirth"
                                                name="updatePlaceofBirth"
                                                class="form-control"
                                        />
                                    </div>
                                </div>

                                <!-- others -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateHometown" class="form-label">Hometown</label>
                                        <input
                                                type="text"
                                                id="updateHometown"
                                                name="updateHometown"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateRegion" class="form-label">Region of Hometown</label>
                                        <input
                                                type="text"
                                                id="updateRegion"
                                                name="updateRegion"
                                                class="form-control"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateCountry" class="form-label">Country of Origin</label>
                                        <select id="updateCountry" name="updateCountry" class="form-select">
                                            <option selected></option>
                                            <?php
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
                                        <label for="updateReligion" class="form-label">Religious Background</label>
                                        <input
                                                type="text"
                                                id="updateReligion"
                                                name="updateReligion"
                                                class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateMaritalStatus" class="form-label">Marital Status</label>
                                        <select id="updateMaritalStatus" name="updateMaritalStatus" class="form-select">
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
                                        <label for="updateTouchpoint" class="form-label">How did you hear about the
                                            school?</label>
                                        <select class="form-select" id="updateTouchpoint">
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
                                        <label for="updateRecommender" class="form-label">If recommended by Staff or
                                            Student, indicate the Name:</label>
                                        <input
                                                type="text"
                                                id="updateRecommender"
                                                name="updateRecommender"
                                                class="form-control"
                                        />
                                    </div>
                                </div>

                            </div>


                            <div class="modal-footer">
                                <button type="submit" name="saveData" class="btn btn-primary" href="">
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