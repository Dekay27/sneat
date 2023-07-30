<?php

$countryID = "";
$countryDescription = "";

// Connect to the database
$db = new PDO('mysql:host=mysql.hightelconsult.com;dbname=kuceportalonline', 'hightelconsult', 'Zozo_999_Kwame');

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
<?php include_once 'abcesubjects_modal_edit.php' ?>

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

                    <!-- Vertically Centered Modals -->
                    <div class="col-lg-4 col-md-6">
                        <div class="mt-3">

                            <!-- Insert Modal -->
                            <div class="modal fade" id="modalInsert" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="abcesubjects_code_insert.php" method="POST">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalInsertTitle">Insert Data</h5>
                                                <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="insertGrade" class="form-label">Grade</label>
                                                        <input
                                                                type="text"
                                                                id="insertGrade"
                                                                name="insertGrade"
                                                                class="form-control"
                                                                placeholder="Enter Grade"
                                                        />
                                                    </div>

                                                    <div class="col mb-3">
                                                        <label for="insertNumericGrade" class="form-label">Numeric
                                                            Grade</label>
                                                        <input
                                                                type="text"
                                                                id="insertNumericGrade"
                                                                name="insertNumericGrade"
                                                                class="form-control"
                                                                placeholder="Enter Numeric Grade"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="insertdata" class="btn btn-dark">Save
                                                    data
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="modalUpdate" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="abcesubjects_code_update.php" method="POST">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalUpdateTitle">Update Data</h5>
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
                                                        <label for="updateID" class="form-label">ID</label>
                                                        <input
                                                                type="text"
                                                                name="updateID"
                                                                id="updateID"
                                                                class="form-control"
                                                                readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label for="updateGrade" class="form-label">Grade</label>
                                                        <input
                                                                type="text"
                                                                name="updateGrade"
                                                                id="updateGrade"
                                                                class="form-control"
                                                                placeholder="A"
                                                        />
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="updateNumericGrade" class="form-label">Numeric
                                                            Grade</label>
                                                        <input
                                                                type="text"
                                                                name="updateNumericGrade"
                                                                id="updateNumericGrade"
                                                                class="form-control"
                                                                placeholder="1"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                                    Save changes
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="modalDelete" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="abcesubjects_code_delete.php" method="POST">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalDeleteTitle">Delete Data</h5>
                                                <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-1">
                                                        <label for="deleteID" class="form-label">ID</label>
                                                        <input
                                                                type="text"
                                                                name="deleteID"
                                                                id="deleteID"
                                                                class="form-control"
                                                                width="30px"
                                                        />
                                                    </div>

                                                </div>

                                                <hr class="my-3"/>

                                                <div class="row align-content-center">
                                                    <div class="col mb-6 align-content-center">
                                                        <h6>Are you sure you want to delete
                                                            all data related to this
                                                            ID?</h6>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="deletedata" class="btn btn-warning">
                                                    Yes, delete entry
                                                </button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

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
                                                    <a class="dropdown-item edit-button"
                                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                                    <a class="dropdown-item delete-button"
                                                    ><i class="bx bx-trash delete-button"></i> Delete</a>

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
<script>
    $(document).ready(function () {
        $('.edit-button').on('click', function () {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#title_id').val(data[0]);
            $('#title').val(data[1]);
        });
    });
</script>

<script>
    $(document).ready(function () {

        $('.delete-button').on('click', function () {

            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#title').val(data[0]);

        });
    });
</script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>