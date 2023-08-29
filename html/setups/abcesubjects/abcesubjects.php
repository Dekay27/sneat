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
                                    <label for="insertCourseCode" class="form-label">Course Code</label>
                                    <input
                                            type="text"
                                            id="insertCourseCode"
                                            name="insertCourseCode"
                                            class="form-control"
                                            placeholder="Enter Course Code"
                                    />
                                </div>

                                <div class="col mb-3">
                                    <label for="insertCourseName" class="form-label">Course Name</label>
                                    <input
                                            type="text"
                                            id="insertCourseName"
                                            name="insertCourseName"
                                            class="form-control"
                                            placeholder="Enter Course Name"
                                    />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-3">
                                    <label for="insertOption" class="form-label">Option</label>
                                    <input
                                            type="text"
                                            id="insertOption"
                                            name="insertOption"
                                            class="form-control"
                                            placeholder="Enter Option"
                                    />
                                </div>

                                <div class="col mb-3">
                                    <label for="insertCertificateType" class="form-label">Certificate type</label>
                                    <input
                                            type="text"
                                            id="insertCertificateType"
                                            name="insertCertificateType"
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

                    <form action="abcesubjects_code_update.php" method="POST">

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
                                    <label for="updateCourseCode" class="form-label">Course Code</label>
                                    <input
                                            type="text"
                                            name="updateCourseCode"
                                            id="updateCourseCode"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="updateCourseName" class="form-label">Course Name</label>
                                    <input
                                            type="text"
                                            name="updateCourseName"
                                            id="updateCourseName"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="updateOption" class="form-label">Option</label>
                                    <input
                                            type="text"
                                            name="updateOption"
                                            id="updateOption"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="updateCertificateType" class="form-label">Certificate Type</label>
                                    <input
                                            type="text"
                                            name="updateCertificateType"
                                            id="updateCertificateType"
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
                                    <label for="deleteCourseCode" class="form-label">Course Code</label>
                                    <input
                                            type="text"
                                            name="deleteCourseCode"
                                            id="deleteCourseCode"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="deleteCourseName" class="form-label">Course Name</label>
                                    <input
                                            type="text"
                                            name="deleteCourseName"
                                            id="deleteCourseName"
                                            class="form-control"
                                            placeholder="1"
                                    />
                                </div>
                            </div>
                            <div class="row g-2 mb-3">
                                <div class="col mb-0">
                                    <label for="deleteOption" class="form-label">Option</label>
                                    <input
                                            type="text"
                                            name="deleteOption"
                                            id="deleteOption"
                                            class="form-control"
                                            placeholder="A"
                                    />
                                </div>
                                <div class="col mb-0">
                                    <label for="deleteCertificateType" class="form-label">Certificate Type</label>
                                    <input
                                            type="text"
                                            name="deleteCertificateType"
                                            id="deleteCertificateType"
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
                                        <td><strong><?php echo $row['CourseCode']; ?></strong></td>
                                        <td><?php echo $row['CourseName']; ?></td>
                                        <td><?php echo $row['Optional']; ?></td>
                                        <td><?php echo $row['CertificateType']; ?></td>
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
            let updateCourseCode = row.cells[0].textContent; // Replace with the appropriate index
            let updateCourseName = row.cells[1].textContent; // Replace with the appropriate index
            let updateOption = row.cells[2].textContent; // Replace with the appropriate index
            let updateCertificateType = row.cells[3].textContent; // Replace with the appropriate index

            // Populate the form fields in the modal with extracted data
            document.getElementById("updateCourseCode").value = updateCourseCode;
            document.getElementById("updateCourseName").value = updateCourseName;
            document.getElementById("updateOption").value = updateOption;
            document.getElementById("updateCertificateType").value = updateCertificateType;

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
            let deleteCourseCode = row.cells[0].textContent; // Replace with the appropriate index
            let deleteCourseName = row.cells[1].textContent; // Replace with the appropriate index
            let deleteOption = row.cells[2].textContent; // Replace with the appropriate index
            let deleteCertificateType = row.cells[3].textContent; // Replace with the appropriate index

            // Populate the form fields in the modal with extracted data
            document.getElementById("deleteCourseCode").value = deleteCourseCode;
            document.getElementById("deleteCourseName").value = deleteCourseName;
            document.getElementById("deleteOption").value = deleteOption;
            document.getElementById("deleteCertificateType").value = deleteCertificateType;

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