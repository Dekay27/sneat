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
                                    <div class="col-lg-2 mb-3">
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
                                    <div class="col-lg-2 mb-3">
                                        <label for="updateGrade" class="form-label">Session</label>
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
                                    <div class="col-lg-2 mb-3">
                                        <label for="updateGrade" class="form-label">Year</label>
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
                                    <div class="col-lg-2 mb-3">
                                        <label for="updateGrade" class="form-label">Level</label>
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
                                    <div class="col-lg-2 mb-3">
                                        <label for="updateGrade" class="form-label">Batch</label>
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
                                    <div class="col-lg-2 mb-3">
                                        <button type="submit" name="generatedata" class="btn btn-primary" href="">
                                            Generate ID
                                        </button>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="updateLowerMark" class="form-label">Admission No.</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="PUCT/23110015"
                                            aria-describedby="defaultFormControlHelp"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                            Search
                                        </button>
                                        <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                            Reset
                                        </button>
                                    </div>

                                    <div class="col mb-3">
                                        <label id='formno' for="updateUpperMark" class="form-label">Form No</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="formno"
                                            placeholder="PUCT/23110015"
                                            readonly
                                        />
                                    </div>

                                </div>
                                <hr>
                                <h6 class="card-header">Personal Information</h6>
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">Surname</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">First Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Jonathan"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">Middle Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- gender & contacts -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">Gender</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="emailAddress" class="form-label">Email address</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="emailAddress"
                                            placeholder="name@example.com"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">Mobile number</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- location -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">Date of Birth</label>
                                        <input class="form-control" type="date" value="2005-06-18"
                                               id="html5-date-input"/>
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGradePoint" class="form-label">Hometown</label>
                                        <input
                                            type="text"
                                            id="updateGradePoint"
                                            name="updateGradePoint"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="updateGradePoint" class="form-label">Place of Birth</label>
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
                                        <label for="updateDescription" class="form-label">Nationality</label>
                                        <input
                                            type="text"
                                            id="updateDescription"
                                            name="updateDescription"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="html5-date-input" class="form-label">Region / State</label>
                                        <input
                                            type="text"
                                            id="updateDescription"
                                            name="updateDescription"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateDescription" class="form-label">District</label>
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
                                        <label for="postalAddress" class="form-label">Postal Address</label>
                                        <textarea class="form-control" id="postalAddress" rows="3"></textarea>
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="permanentResidentialAddress" class="form-label">Permanent Residental Address</label>
                                        <textarea class="form-control" id="permanentResidentialAddress" rows="3"></textarea>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="physicalDisability" class="form-label">Physical Disability</label>
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
                                        <label for="language1" class="form-label">Language 1</label>
                                        <input
                                            type="text"
                                            id="language1"
                                            name="language1"
                                            class="form-control"
                                        />
                                    </div>

                                    <div class="col-lg-4 mb-3">
                                        <label for="language2" class="form-label">Language 2</label>
                                        <input
                                            type="text"
                                            id="language2"
                                            name="language2"
                                            class="form-control"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="language3" class="form-label">Language 3</label>
                                        <input
                                            type="text"
                                            id="language3"
                                            name="language3"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <hr>
                                <h6 class="card-header">Programme Information</h6>
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">1st Choice</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">2nd Choice</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Jonathan"
                                        />
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">3rd Choice</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- department -->
                                <div class="row g-2">
                                    <div class="col-lg-4 mb-3">
                                        <label for="updateTitle" class="form-label">Department</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateTitle" class="form-label">Mode of Application</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Jonathan"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateTitle" class="form-label">Academic Year</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateTitle" class="form-label">Scholarship</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateTitle" class="form-label">Faculty</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                </div>

                                <!-- others -->
                                <div class="row g-2">
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateTitle" class="form-label">Current Level</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Osei"
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateTitle" class="form-label">Current Semester</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Jonathan"
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateTitle" class="form-label">Session</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="updateTitle" class="form-label">Student Status</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
                                            placeholder="Kwabena"
                                        />
                                    </div>
                                    <div class="col mb-3">
                                        <label for="updateTitle" class="form-label">Photo path</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="defaultFormControlInput"
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
