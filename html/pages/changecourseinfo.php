<?php


// Connect to the database
// Establish a database connection using PDO
$db = new PDO('mysql:host=localhost;dbname=kuceportalonline', 'root', '');

// Set PDO to throw exceptions on errors
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (isset($_POST['login'])) {

    $programme = trim($_POST['getProgrammeID']);
    $session = trim($_POST['getLevel']);
    $mode_of_application = trim($_POST['getCID']);
    $title = trim($_POST['getSession']);
    $surname = trim($_POST['getSessionID']);
    $academic_year = trim($_POST['getAcademicYear']);
    $title = trim($_POST['updateTitle']);
    $course_name = trim($_POST['updateCourseName']);
    $semester = trim($_POST['updateSemester']);
    $new_semester = trim($_POST['updateNewSemester']);

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

    <title>Change Course Info | ISMS - Integrated School Management System</title>

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
            <?php include_once '../modals/navigationbar.php' ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4 text-center">Change Course Information</h4>

                    <div class="card">
                        <form action="changecourseinfo.php" method="POST">
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-lg-3 mb-3">
                                        <label for="getProgrammeID" class="form-label">Programme ID</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="getProgrammeID"
                                                placeholder="College of Excellence"
                                                readonly
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="getLevel" class="form-label">Level</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="getLevel"
                                                placeholder="2nd Semester | 2023"
                                                readonly
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="getCID" class="form-label">CID</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="getCID"
                                                placeholder="College of Excellence"
                                                readonly
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="getSession" class="form-label">Session</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="getSession"
                                                placeholder="2nd Semester | 2023"
                                                readonly
                                        />
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-lg-3 mb-3">
                                        <label for="getSessionID" class="form-label">Semester ID</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="getSessionID"
                                                placeholder="ISMS University College"
                                                readonly
                                        />
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <label for="getAcademicYear" class="form-label">Academic Year</label>
                                        <input
                                                type="text"
                                                class="form-control"
                                                id="getAcademicYear"
                                                placeholder="September 6, 2023"
                                                readonly
                                        />
                                    </div>
                                    <div class="container">
                                        <div class="text-end">
                                            <button class="btn btn-primary">Search Course</button>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-lg-3 mb-3">
                                            <label for="updateTitle" class="form-label">Course Name</label>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="updateTitle"
                                                    placeholder="Course X"
                                                    readonly
                                            />
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label for="updateCourseName" class="form-label">Change Course Name
                                                To</label>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="updateCourseName"
                                            />
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label for="updateSemester" class="form-label">Semester</label>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="semester"
                                                    placeholder="Semester Y"
                                                    readonly
                                            />
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label for="updateNewSemester" class="form-label">Change Semester Name
                                                To</label>
                                            <select id="updateNewSemester" name="updateNewSemester" class="form-select">
                                                <option selected></option>
                                                <?php
                                                // SQL query to fetch options from the 'title' table
                                                $query = 'SELECT * FROM semester';
                                                $result = $db->query($query);
                                                $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                                                foreach ($rows as $row) {
                                                    echo '<option value="' . $row['SemesterDescription'] . '">' . $row['SemesterDescription'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Button Section -->
                                    <div class="text-end mt-1">
                                        <button class="btn btn-primary">Click to update course info</button>
                                    </div>
                                </div>


                            </div>
                        </form>
                        <div class="container">
                            <div class="table-responsive text-nowrap mb-3">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Admission Number</th>
                                        <th>Student Name</th>
                                        <th>Class Score (30)</th>
                                        <th>Exam Score (70)</th>
                                        <th>Total Score (100)</th>
                                        <th>Grade</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><strong><?php echo 'Hey'; ?></strong></td>
                                        <td><?php echo 'Great'; ?></td>
                                        <td><?php echo 'Code'; ?></td>
                                        <td><?php echo '2023'; ?></td>
                                        <td><?php echo '2nd Semester'; ?></td>
                                        <td><?php echo '100'; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
