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

    <title>Admissions Form | ISMS - Integrated School Management System</title>

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
                    <h4 class="fw-bold py-3 mb-4 text-center">Students Records Management</h4>

                    <div class="card">
                        <form action="studentsrecordupdateonline.php" method="POST">
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <label for="updateProgramme" class="form-label">Programme</label>
                                        <select id="updateProgramme" name="updateProgramme" class="form-select">
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
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <label for="updateSession" class="form-label">Session</label>
                                        <select id="updateSession" name="updateSession" class="form-select">
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
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <label for="updateYear" class="form-label">Year</label>
                                        <select id="updateYear" name="updateYear" class="form-select">
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
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <label for="updateLevel" class="form-label">Level</label>
                                        <select id="updateLevel" name="updateLevel" class="form-select">
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
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <label for="updateBatch" class="form-label">Batch</label>
                                        <select id="updateBatch" name="updateBatch" class="form-select">
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
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <label for="updateFormNumber" class="form-label">Form No.</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="updateFormNumber"
                                                placeholder="PUCT/23110015"
                                                readonly
                                        />
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-2 col-lg-4 mb-3">
                                        <button type="submit" name="generatedata" class="btn btn-primary" href="">
                                            Generate ID
                                        </button>
                                    </div>

                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateAdmissionNumber" class="form-label">Admission No.</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateAdmissionNumber"
                                            placeholder="PUCT/23110015"
                                            aria-describedby="defaultFormControlHelp"
                                        />
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                            Search
                                        </button>
                                        <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                            Reset
                                        </button>
                                    </div>
                                </div>


                                <hr>
                                <h6 class="card-header">Personal Information</h6>
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateSurname" class="form-label">Surname</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateSurname"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateFirstName" class="form-label">First Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateFirstName"
                                            placeholder="Jonathan"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateMiddleName" class="form-label">Middle Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateMiddleName"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- gender & contacts -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGender" class="form-label">Gender</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateGender"
                                            placeholder="Male"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateEmailAddress" class="form-label">Email address</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="updateEmailAddress"
                                            placeholder="name@example.com"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateMobile" class="form-label">Mobile number</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateMobile"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- location -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDateofBirth" class="form-label">Date of Birth</label>
                                        <input class="form-control" type="date" value="2005-06-18"
                                               id="updateDateofBirth"/>
                                    </div>

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
                                        <label for="updatePlaceofBirth" class="form-label">Place of Birth</label>
                                        <input
                                            type="text"
                                            id="updatePlaceofBirth"
                                            name="updatePlaceofBirth"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <!-- gender -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateNationality" class="form-label">Nationality</label>
                                        <input
                                            type="text"
                                            id="updateNationality"
                                            name="updateNationality"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateRegionState" class="form-label">Region / State</label>
                                        <input
                                            type="text"
                                            id="updateRegionState"
                                            name="updateRegionState"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDistrict" class="form-label">District</label>
                                        <input
                                            type="text"
                                            id="updateDistrict"
                                            name="updateDistrict"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <!-- others -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updatePostalAddress" class="form-label">Postal Address</label>
                                        <textarea class="form-control" id="updatePostalAddress" rows="3"></textarea>
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updatePermanentResidentialAddress" class="form-label">Permanent Residental Address</label>
                                        <textarea class="form-control" id="updatePermanentResidentialAddress" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updatePhysicalDisability" class="form-label">Physical Disability</label>
                                        <div class="input-group">
                                            <button
                                                class="btn btn-outline-primary dropdown-toggle"
                                                type="button"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                Status
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">No</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Yes</a></li>
                                            </ul>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                                            <div id="defaultFormControlHelp" class="form-text">
                                                If yes, kindly specify in the field above.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateLanguage1" class="form-label">Language 1</label>
                                        <input
                                            type="text"
                                            id="updateLanguage1"
                                            name="updateLanguage1"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateLanguage2" class="form-label">Language 2</label>
                                        <input
                                            type="text"
                                            id="updateLanguage2"
                                            name="updateLanguage2"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateLanguage3" class="form-label">Language 3</label>
                                        <input
                                            type="text"
                                            id="updateLanguage3"
                                            name="updateLanguage3"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <hr>
                                <h6 class="card-header">Programme Information</h6>
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateChoice1" class="form-label">1st Choice</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateChoice1"
                                            placeholder="Computer Science"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateChoice2" class="form-label">2nd Choice</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateChoice2"
                                            placeholder="Mathematics"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateChoice3" class="form-label">3rd Choice</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateChoice3"
                                            placeholder="Biological Science"
                                        />
                                    </div>
                                </div>

                                <!-- department -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDepartment" class="form-label">Department</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateDepartment"
                                            placeholder="Mathematics"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateModeofApplication" class="form-label">Mode of Application</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateModeofApplication"
                                            placeholder="Type Here..."
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateAcademicYear" class="form-label">Academic Year</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateAcademicYear"
                                            placeholder="Enter Year..."
                                        />
                                    </div>
                                    <!-- <div class="col mb-3">
                                        <label for="updateScholarship" class="form-label">Scholarship</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateScholarship"
                                            placeholder="Enter Yes or No"
                                        />
                                    </div> -->
                                    <div class="col mb-3">
                                        <label for="updateScholarship" class="form-label">Scholarship</label>
                                        <select class="form-control" id="updateScholarship">
                                            <option value="">Select...</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateFaculty" class="form-label">Faculty</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateFaculty"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- others -->
                                <div class="row g-2">
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateCurrentLevel" class="form-label">Current Level</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateCurrentLevel"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateCurrentSemester" class="form-label">Current Semester</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateCurrentSemester"
                                            placeholder="Jonathan"
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateSession" class="form-label">Session</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateSession"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateStudentStatus" class="form-label">Student Status</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updateStudentStatus"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updatePhotoPath" class="form-label">Photo path</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="updatePhotoPath"
                                            placeholder="Kwabena"
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
