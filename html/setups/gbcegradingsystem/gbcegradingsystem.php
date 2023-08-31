<?php


// Connect to the database
$db = new PDO('mysql:host=mysql.hightelconsult.com;dbname=kuceportalonline', 'hightelconsult', 'Zozo_999_Kwame');

// Query the database
$result = $db->query('SELECT * FROM gbcegradingsystem');

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

    <title>GBCE Grading Setup | ISMS - Integrated School Management System</title>

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
<!-- Vertically Centered Modals -->
<div class="col-lg-4 col-md-6">
    <div class="mt-3">

        <!-- Insert Modal -->
        <div class="modal fade" id="modalInsert" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <form action="gbcegradingsystem_code_insert.php" method="POST">

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

                    <form action="gbcegradingsystem_code_update.php" method="POST">

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
                                            class="form-control text-center"
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

                    <form action="gbcegradingsystem_code_delete.php" method="POST">

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
                                            class="form-control text-center"
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
                            <button type="submit" name="deletedata" class="btn btn-danger">
                                Yes, delete entry
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>
</div>


<!-- Beginning of Body Content -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <!-- Beginning of Sidebar Content -->
        <?php include_once '../../modals/sidebar.php' ?>
        <!-- / End of Sidebar Content -->

        <!-- Beginning of Internal Content -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php include_once '../../modals/navigationbar.html' ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> GBCE Grading Setup
                    </h4>

                    <div class="card">
                        <h5 class="card-header">List of GBCE Grading</h5>
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
                                        <td><strong><?php echo $row['RecordKey']; ?></strong></td>
                                        <td><?php echo $row['Grade']; ?></td>
                                        <td><?php echo $row['NumericGrade']; ?></td>
                                        <td>
                                            <svg class="edit-icon" id="editIcon" xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 style="fill: rgb(85,166,63);transform: ;msFilter:;">
                                                <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2zM8.999 14.999H7V13l5.53-5.522 1.998 1.999-5.529 5.522zm6.472-6.464-1.999-1.999 1.524-1.523 1.999 1.999-1.524 1.523z"></path>
                                            </svg>
                                            <svg class="delete-icon" id="deleteIcon"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 style="fill: rgb(211,62,62);transform: ;msFilter:;">
                                                <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2zm-3.293 11.293-1.414 1.414L12 11.414l-3.293 3.293-1.414-1.414L10.586 10 7.293 6.707l1.414-1.414L12 8.586l3.293-3.293 1.414 1.414L13.414 10l3.293 3.293z"></path>
                                            </svg>
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
    document.querySelectorAll(".edit-icon").forEach(function (icon) {
        icon.addEventListener("click", function () {
            // Get the parent table row
            let row = icon.closest("tr");

            // Extract data from the row (adjust these lines based on your actual table structure)
            let updateID = row.cells[0].textContent; // Replace with the appropriate index
            let updateGrade = row.cells[1].textContent; // Replace with the appropriate index
            let updateNumericGrade = row.cells[2].textContent; // Replace with the appropriate index

            // Populate the form fields in the modal with extracted data
            document.getElementById("updateID").value = updateID;
            document.getElementById("updateGrade").value = updateGrade;
            document.getElementById("updateNumericGrade").value = updateNumericGrade;

            // Show the modal
            let editModal = new bootstrap.Modal(document.getElementById("modalUpdate"));
            editModal.show();
        });
    });
</script>

<script>
    document.querySelectorAll(".delete-icon").forEach(function (icon) {
        icon.addEventListener("click", function () {
            // Get the parent table row
            let row = icon.closest("tr");

            // Extract data from the row (adjust these lines based on your actual table structure)
            let deleteID = row.cells[0].textContent; // Replace with the appropriate index

            // Populate the form fields in the modal with extracted data
            document.getElementById("deleteID").value = deleteID;

            // Show the modal
            let deleteModal = new bootstrap.Modal(document.getElementById("modalDelete"));
            deleteModal.show();
        });
    });
</script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>