<?php

$countryID = "";
$countryDescription = "";

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=kuceportal', 'root', '');

// Query the database
$result = $db->query('SELECT * FROM abcegradingsystem');

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

    <title>ABCE Grading Setup | ISMS - Integrated School Management System</title>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../../assets/js/config.js"></script>
</head>


<body>


<!-- Beginning of Body Content -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Beginning of Sidebar Content -->
        <?php include_once '../../modals/sidebar_isms.php' ?>
        <!-- / End of Sidebar Content -->

        <!-- Beginning of Internal Content -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php include_once '../../modals/navigationbar_isms.php' ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> ABCE Grading System
                    </h4>

                    <!-- Vertically Centered Modals -->
                    <div class="col-lg-4 col-md-6">
                        <div class="mt-3">

                            <!-- Insert Modal -->
                            <div class="modal fade" id="modalInsert" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="abcegradingsystem_code_insert.php" method="POST">

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

                                        <form action="abcegradingsystem_code_update.php" method="POST">

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

                                        <form action="abcegradingsystem_code_delete.php" method="POST">

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

                        <!--/ Insert Data Button -->
                        <div class="card-body">
                            <div class="row demo-vertical-spacing">
                                <div class="mb-3"
                                     data-bs-toggle="modal"
                                     data-bs-target="#modalInsert">
                                    <button type="button" class="btn btn-outline-primary text-nowrap">
                                        <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Add Data
                                    </button>
                                </div>

                                <div class="mb-3">
                                    <small class="form-label fw-bold d-block">Add Bulk Data</small>
                                    <div class="input-group">
                                        <input
                                                type="file"
                                                class="form-control"
                                                id="inputGroupFile04"
                                                aria-describedby="inputGroupFileAddon04"
                                                aria-label="Upload"
                                        />
                                        <button class="btn btn-outline-primary" type="button"
                                                id="inputGroupFileAddon04">
                                            Download Sample Excel
                                        </button>
                                        <button class="btn btn-outline-primary" type="button"
                                                id="inputGroupFileAddon04">
                                            Upload
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/ Insert Data Button -->

                        <hr class="my-3"/>

                        <h5 class="card-header">List of ABCE Grading</h5>
                        <div class="table-responsive text-nowrap">
                            <table id="datatableid" class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Grade</th>
                                    <th>Numeric Grade</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php foreach ($rows as $row) { ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                <?php echo $row['RecordKey']; ?></strong></td>
                                        <td><?php echo $row['Grade']; ?></td>
                                        <td><?php echo $row['NumericGrade']; ?></td>
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

                    <!-- Responsive Table -->
                    <div class="card">
                        <h5 class="card-header">Responsive Table</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr class="text-nowrap">
                                    <th>#</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                    <th>Table heading</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Responsive Table -->


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
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<!-- Main JS -->
<script src="../../../assets/js/main.js"></script>

<!-- Page JS -->
<script>
    $(document).ready(function () {
        $('.edit-button').on('click', function () {

            $('#modalUpdate').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#updateID').val(data[0]);
            $('#updateGrade').val(data[1]);
            $('#updateNumericGrade').val(data[2]);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.delete-button').on('click', function () {

            $('#modalDelete').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#deleteID').val(data[0]);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#datatableid').DataTable();
    });
</script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>