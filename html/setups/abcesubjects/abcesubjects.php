<?php

$countryID = "";
$countryDescription = "";

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=kuceportal', 'root', '');

// Query the database
$result = $db->query('SELECT * FROM abcesubjects');

// Fetch the data as an associative array
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

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

    <title>ABCE Subjects Setup | ISMS - Integrated School Management System</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../../assets/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../../assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="../../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="../../../assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../assets/js/config.js"></script>
</head>


<body>

<!-- Edit Modal -->
<?php include_once 'title_modal_edit.php' ?>

<!-- Beginning of Body Content -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Beginning of Sidebar Content -->
        <?php include_once '../../modals/sidebar.php' ?>
        <!-- / End of Sidebar Content -->

        <!-- Beginning of Internal Content -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php include_once '../../modals/navigationbar.php' ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> ABCE Subjects</h4>

                    <div class="card">
                        <h5 class="card-header">List of Subjects</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Option</th>
                                    <th>Certificate Type</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php foreach ($rows as $row) { ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                <?php echo $row['CourseCode']; ?></strong></td>
                                        <td><?php echo $row['CourseName']; ?></td>
                                        <td><?php echo $row['Optional']; ?></td>
                                        <td><?php echo $row['CertificateType']; ?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button
                                                            type="button"
                                                            class="btn btn-primary dropdown-item"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#modalCenter"
                                                    >
                                                        Launch modal
                                                    </button>
                                                    <a class="dropdown-item edit-button"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#basicModal"
                                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                                    <a class="dropdown-item delete-button"
                                                    ><i class="bx bx-trash delete-button"></i> Delete</a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="basicModal" tabindex="-1"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel1">
                                                                        Modal title</h5>
                                                                    <button
                                                                            type="button"
                                                                            class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"
                                                                    ></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label for="course-code" class="form-label">Course
                                                                                Code</label>
                                                                            <input type="text" id="course-code"
                                                                                   class="form-control"
                                                                                   placeholder=""/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label for="course-name" class="form-label">Course
                                                                                Name</label>
                                                                            <input type="text" id="course-name"
                                                                                   class="form-control"
                                                                                   placeholder="Fundamentals"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-2">
                                                                        <div class="col mb-0">
                                                                            <label for="option" class="form-label">Option</label>
                                                                            <input type="text" id="option"
                                                                                   class="form-control"
                                                                                   placeholder="Core / Elective"/>
                                                                        </div>
                                                                        <div class="col mb-0">
                                                                            <label for="certificate-type"
                                                                                   class="form-label">Certificate
                                                                                Type</label>
                                                                            <input type="text" id="certificate-type"
                                                                                   class="form-control"
                                                                                   placeholder="WASSCE"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-outline-secondary"
                                                                            data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal Center-->
                                                    <div class="modal fade" id="modalCenter" tabindex="-1"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalCenterTitle">Modal
                                                                        title</h5>
                                                                    <button
                                                                            type="button"
                                                                            class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"
                                                                    ></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col mb-3">
                                                                            <label for="nameWithTitle"
                                                                                   class="form-label">Name</label>
                                                                            <input
                                                                                    type="text"
                                                                                    id="nameWithTitle"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Name"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row g-2">
                                                                        <div class="col mb-0">
                                                                            <label for="emailWithTitle"
                                                                                   class="form-label">Email</label>
                                                                            <input
                                                                                    type="text"
                                                                                    id="emailWithTitle"
                                                                                    class="form-control"
                                                                                    placeholder="xxxx@xxx.xx"
                                                                            />
                                                                        </div>
                                                                        <div class="col mb-0">
                                                                            <label for="dobWithTitle"
                                                                                   class="form-label">DOB</label>
                                                                            <input
                                                                                    type="text"
                                                                                    id="dobWithTitle"
                                                                                    class="form-control"
                                                                                    placeholder="DD / MM / YY"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-outline-secondary"
                                                                            data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php include_once '../../modals/footer.php' ?>
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
<script src="../../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../../assets/vendor/js/bootstrap.js"></script>
<script src="../../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="../../../assets/js/main.js"></script>

<!-- Page JS -->


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>