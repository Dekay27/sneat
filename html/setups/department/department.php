<?php


// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=kuceportalonline', 'root', '');

// Query the database
$result = $db->query('SELECT * FROM department');

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

    <title>Department Setup | ISMS - Integrated School Management System</title>

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

                    <form action="department_code_insert.php" method="POST">

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
                                    <label for="insertDeptID" class="form-label">Department ID</label>
                                    <input
                                            type="text"
                                            id="insertDeptID"
                                            name="insertDeptID"
                                            class="form-control"
                                            placeholder="Enter Course Name"
                                    />
                                </div>
                                <div class="col mb-3">
                                    <label for="insertDeptName" class="form-label">Department Name</label>
                                    <input
                                            type="text"
                                            id="insertDeptName"
                                            name="insertDeptName"
                                            class="form-control"
                                            placeholder="Enter Course Name"
                                    />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="insertHeadName" class="form-label">Head Name</label>
                                    <input
                                            type="text"
                                            id="insertHeadName"
                                            name="insertHeadName"
                                            class="form-control"
                                            placeholder="Enter DeptName"
                                    />
                                </div>

                                <div class="col mb-3">
                                    <label for="insertRank" class="form-label">Rank</label>
                                    <input
                                            type="text"
                                            id="insertRank"
                                            name="insertRank"
                                            class="form-control"
                                            placeholder="Enter Certificate Type"
                                    />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="insertFacultyID" class="form-label">Faculty ID</label>
                                    <input
                                            type="text"
                                            id="insertFacultyID"
                                            name="insertFacultyID"
                                            class="form-control"
                                            placeholder="Enter DeptName"
                                    />
                                </div>

                                <div class="col mb-3">
                                    <label for="insertProgrammeID" class="form-label">Programme ID</label>
                                    <input
                                            type="text"
                                            id="insertProgrammeID"
                                            name="insertProgrammeID"
                                            class="form-control"
                                            placeholder="Enter Certificate Type"
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

                    <form action="department_code_update.php" method="POST">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalUpdate">Update Data</h5>
                            <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="updateDeptID" class="form-label">Department ID</label>
                                    <input
                                            type="text"
                                            name="updateDeptID"
                                            id="updateDeptID"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="updateDeptName" class="form-label">Department Name</label>
                                    <input
                                            type="text"
                                            name="updateDeptName"
                                            id="updateDeptName"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="updateHeadName" class="form-label">Head Name</label>
                                    <input
                                            type="text"
                                            name="updateHeadName"
                                            id="updateHeadName"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="updateRank" class="form-label">Rank</label>
                                    <input
                                            type="text"
                                            name="updateRank"
                                            id="updateRank"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="updateFacultyID" class="form-label">Faculty ID</label>
                                    <input
                                            type="text"
                                            name="updateFacultyID"
                                            id="updateFacultyID"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="updateProgrammeID" class="form-label">Programme ID</label>
                                    <input
                                            type="text"
                                            name="updateProgrammeID"
                                            id="updateProgrammeID"
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

                    <form action="department_code_delete.php" method="POST">

                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDelete">Delete Data</h5>
                            <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="deleteDeptID" class="form-label">Department ID</label>
                                    <input
                                            type="text"
                                            name="deleteDeptID"
                                            id="deleteDeptID"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="deleteDeptName" class="form-label">Department Name</label>
                                    <input
                                            type="text"
                                            name="deleteDeptName"
                                            id="deleteDeptName"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="deleteHeadName" class="form-label">Head Name</label>
                                    <input
                                            type="text"
                                            name="deleteHeadName"
                                            id="deleteHeadName"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="deleteRank" class="form-label">Rank</label>
                                    <input
                                            type="text"
                                            name="deleteRank"
                                            id="deleteRank"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="deleteFacultyID" class="form-label">Faculty ID</label>
                                    <input
                                            type="text"
                                            name="deleteFacultyID"
                                            id="deleteFacultyID"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="deleteProgrammeID" class="form-label">Programme ID</label>
                                    <input
                                            type="text"
                                            name="deleteProgrammeID"
                                            id="deleteProgrammeID"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>

                            <hr class="my-3"/>

                            <div class="row align-content-center">
                                <div class="col align-content-center">
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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> Department Setup</h4>

                    <div class="card">
                        <h5 class="card-header">List of Departments</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Department ID</th>
                                    <th>Department Name</th>
                                    <th>Head Name</th>
                                    <th>Rank</th>
                                    <th>Faculty ID</th>
                                    <th>Programme ID</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php foreach ($rows as $row) { ?>
                                    <tr>
                                        <td><strong><?php echo $row['RecordKey']; ?></strong></td>
                                        <td><?php echo $row['DeptID']; ?></td>
                                        <td><?php echo $row['DeptName']; ?></td>
                                        <td><?php echo $row['HeadName']; ?></td>
                                        <td><?php echo $row['Rank']; ?></td>
                                        <td><?php echo $row['FacultyID']; ?></td>
                                        <td><?php echo $row['ProgrammeID']; ?></td>
                                        <td>
                                            <svg class="edit-icon" id="editIcon" xmlns="http://www.w3.org/2000/svg"
                                                 width="24" height="24"
                                                 viewBox="0 0 24 24"
                                                 style="fill: rgb(85,166,63);transform: ;msFilter:;">
                                                <path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2zM8.999 14.999H7V13l5.53-5.522 1.998 1.999-5.529 5.522zm6.472-6.464-1.999-1.999 1.524-1.523 1.999 1.999-1.524 1.523z"></path>
                                            </svg>
                                            <svg class="delete-icon" id="deleteIcon" xmlns="http://www.w3.org/2000/svg"
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
            // let updateRecordKey = row.cells[0].textContent; // Replace with the appropriate index
            let updateDeptID = row.cells[1].textContent; // Replace with the appropriate index
            let updateDeptName = row.cells[2].textContent; // Replace with the appropriate index
            let updateHeadName = row.cells[3].textContent; // Replace with the appropriate index
            let updateRank = row.cells[4].textContent; // Replace with the appropriate index
            let updateFacultyID = row.cells[5].textContent; // Replace with the appropriate index
            let updateProgrammeID = row.cells[6].textContent; // Replace with the appropriate index

            // Populate the form fields in the modal with extracted data
            // document.getElementById("updateRecordKey").value = updateRecordKey;
            document.getElementById("updateDeptID").value = updateDeptID;
            document.getElementById("updateDeptName").value = updateDeptName;
            document.getElementById("updateHeadName").value = updateHeadName;
            document.getElementById("updateRank").value = updateRank;
            document.getElementById("updateFacultyID").value = updateFacultyID;
            document.getElementById("updateProgrammeID").value = updateProgrammeID;

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
            // let deleteRecordKey = row.cells[0].textContent; // Replace with the appropriate index
            let deleteDeptID = row.cells[1].textContent; // Replace with the appropriate index
            let deleteDeptName = row.cells[2].textContent; // Replace with the appropriate index
            let deleteHeadName = row.cells[3].textContent; // Replace with the appropriate index
            let deleteRank = row.cells[4].textContent; // Replace with the appropriate index
            let deleteFacultyID = row.cells[5].textContent; // Replace with the appropriate index
            let deleteProgrammeID = row.cells[6].textContent; // Replace with the appropriate index

            // Populate the form fields in the modal with extracted data
            // document.getElementById("deleteRecordKey").value = deleteRecordKey;
            document.getElementById("deleteDeptID").value = deleteDeptID;
            document.getElementById("deleteDeptName").value = deleteDeptName;
            document.getElementById("deleteHeadName").value = deleteHeadName;
            document.getElementById("deleteRank").value = deleteRank;
            document.getElementById("deleteFacultyID").value = deleteFacultyID;
            document.getElementById("deleteProgrammeID").value = deleteProgrammeID;

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