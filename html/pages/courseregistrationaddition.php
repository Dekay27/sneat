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
                    <h4 class="fw-bold py-3 mb-4 text-center">Course Registration</h4>

                    <div class="card">
                        <form action="courseregistrationaddition.php" method="POST">
                            <div class="modal-body">
                                <div class="row g-2">
                                    <div class="col-lg-9 mb-3">
                                        <div class="row g-2">
                                            <div class="col-md-4 mb-3">
                                                <label for="updateTitle" class="form-label">PIN Number</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="defaultFormControlInput"
                                                    placeholder="ISMS10902839"
                                                    readonly
                                                />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-6 mb-3">
                                                <label for="updateTitle" class="form-label">Faculty Information</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="defaultFormControlInput"
                                                    placeholder="College of Excellence"
                                                    readonly
                                                />
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="updateTitle" class="form-label">Semester / Year</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="defaultFormControlInput"
                                                    placeholder="2nd Semester | 2023"
                                                    readonly
                                                />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-6 mb-3">
                                                <label for="updateTitle" class="form-label">School Information</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="defaultFormControlInput"
                                                    placeholder="ISMS University College"
                                                    readonly
                                                />
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="updateTitle" class="form-label">Date</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="defaultFormControlInput"
                                                    placeholder="September 6, 2023"
                                                    readonly
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 mb-3">
                                        <div class="col-sm-5 text-center text-sm-left">
                                            <div class="card-body pb-0 px-0 px-md-4">
                                                <img
                                                    src="../../assets/img/illustrations/man-with-laptop-light.png"
                                                    height="140"
                                                    alt="View Badge User"
                                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                    data-app-light-img="illustrations/man-with-laptop-light.png"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            <div class="card m-4 p-4">
                                <h5 class="card-header">List of Registered Courses</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Course ID</th>
                                            <th>Course Title</th>
                                            <th>Level</th>
                                            <th>Academic Year</th>
                                            <th>Semester</th>
                                            <th>Level</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            <?php
                                            $result = $db->query('SELECT * FROM alevelsubjects');

                                            // Fetch the data as an associative array
                                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($rows as $row) { ?>
                                            <tr>
                                                <td><strong><?php echo $row['CourseCode']; ?></strong></td>
                                                <td><?php echo $row['CourseName']; ?></td>
                                                <td><?php echo $row['Optional']; ?></td>
                                                <td><?php echo '2023'; ?></td>
                                                <td><?php echo '2nd Semester'; ?></td>
                                                <td><?php echo '100'; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th><strong><?php echo 'Footer'; ?></strong></th>
                                                <th><strong><?php echo '700'; ?></strong></th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
