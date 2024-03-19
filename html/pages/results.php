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

    <title>Examination Results | ISMS - Integrated School Management System</title>

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
                    <h4 class="fw-bold py-3 mb-4 text-center">Examination Results</h4>

                    <div class="card">
                        <form action="results.php" method="POST">
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-lg-3 mb-3">
                                        <label for="searchAdmissionNo" class="form-label">Type Admission No</label>
                                        <select id="searchAdmissionNo" name="searchAdmissionNo" class="form-select">
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
                                    <div class="col-lg-3 mb-3">
                                        <label for="searchLevel" class="form-label">Level</label>
                                        <select id="searchLevel" name="searchLevel" class="form-select">
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
                                    <div class="col-lg-3 mb-3">
                                        <label for="searchSemester" class="form-label">Semester</label>
                                        <select id="searchSemester" name="searchSemester" class="form-select">
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
                                    <div class="container">
                                        <div class="text-end">
                                            <button class="btn btn-primary">View Results</button>
                                            <button class="btn btn-primary">View Results</button>
                                            <button class="btn btn-primary">View Results</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                <div class="container">
                                    <div class="row g-2">
                                        <div class="col-lg-4 mb-3">
                                            <label for="getStudentName" class="form-label">Student Name</label>
                                            <input
                                                    type="text"
                                                    id="getStudentName"
                                                    name="getStudentName"
                                                    class="form-control"
                                            />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-lg-4 mb-3">
                                            <label for="getStudentID" class="form-label">Student ID</label>
                                            <input
                                                    type="text"
                                                    id="getStudentID"
                                                    name="getStudentID"
                                                    class="form-control"
                                            />
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label for="getSession" class="form-label">Session</label>
                                            <input
                                                    type="text"
                                                    id="getSession"
                                                    name="getSession"
                                                    class="form-control"
                                            />
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label for="getDate" class="form-label">Date</label>
                                            <?php
                                            // Set the timezone to Accra, Ghana
                                            date_default_timezone_set('Africa/Accra');

                                            // Get the current date in the specified format
                                            $currentDate = date('F j, Y');
                                            ?>
                                            <input
                                                    type="text"
                                                    id="getDate"
                                                    name="getDate"
                                                    class="form-control"
                                                    placeholder="<?php echo $currentDate; ?>"
                                            />
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col-lg-4 mb-3">
                                            <label for="getLevel" class="form-label">Level</label>
                                            <input
                                                    type="text"
                                                    id="updateDescription"
                                                    name="updateDescription"
                                                    class="form-control"
                                            />
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label for="getAcademicYear" class="form-label">Academic Year</label>
                                            <input
                                                    type="text"
                                                    id="getAcademicYear"
                                                    name="getAcademicYear"
                                                    class="form-control"
                                            />
                                        </div>

                                        <div class="col-lg-4 mb-3">
                                            <label for="getSemester" class="form-label">Semester</label>
                                            <input
                                                    type="text"
                                                    id="getSemester"
                                                    name="getSemester"
                                                    class="form-control"
                                            />
                                        </div>
                                    </div>

                                    <div class="table-responsive text-nowrap">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Title</th>
                                                <th>Lecturer Name (ID)</th>
                                                <th>Level</th>
                                                <th>Credit</th>
                                                <th>Mark</th>
                                                <th>Weighted Mark</th>
                                                <th>Grade</th>
                                                <th>Remark</th>
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
                                                <td><?php echo 'Weekend'; ?></td>
                                                <td><?php echo 'LLM'; ?></td>
                                                <td><?php echo 'Great'; ?></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th><strong><?php echo 'TOTAL'; ?></strong></th>
                                                <th></th>
                                                <th><strong><?php echo '0'; ?></strong></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th><strong><?php echo '0'; ?></strong></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </form>
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
