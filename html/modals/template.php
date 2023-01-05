<?php

$countryID = "";
$countryDescription = "";

// Connect to the database
// $db = new PDO('mysql:host=hightelconsultscom.ipowermysql.com;dbname=isms', 'hightelconsult', 'Pay@2022');

$connection = mysqli_connect("127.0.0.1", "root", "12341234", 'test');


// Query the database
$result = $connection->query('SELECT * FROM users');

// Fetch the data as an associative array
// $rows = $result->fetchAll(PDO::FETCH_ASSOC);

// Fetch all
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<html
        lang="en"
        class="light-style layout-menu-fixed"
        dir="ltr"
        data-theme="theme-default"
        data-assets-path="../../assets/"
        data-template="vertical-menu-template-free"
        xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Template | ISMS - Integrated School Management System</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico"/>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>


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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

                    <!-- Vertically Centered Modals -->
                    <div class="col-lg-4 col-md-6">
                        <div class="mt-3">


                            <!-- Edit Modal -->
                            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="updatetemplate.php" method="POST">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                            <button
                                                    type="button"
                                                    class="btn-close"
                                                    data-bs-dismiss="modal"
                                                    aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3" >
                                                    <label for="idWithTitle" class="form-label">Name</label>
                                                    <input
                                                            type="text"
                                                            name="idWithTitle"
                                                            id="idWithTitle"
                                                            class="form-control"
                                                            placeholder="Enter Name"
                                                            width="30px"
                                                    />
                                                </div>
                                                <div class="col mb-3" >
                                                    <label for="nameWithTitle" class="form-label">Name</label>
                                                    <input
                                                            type="text"
                                                            name="nameWithTitle"
                                                            id="nameWithTitle"
                                                            class="form-control"
                                                            placeholder="Enter Name"
                                                            width="30px"
                                                    />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="emailWithTitle" class="form-label">Email</label>
                                                    <input
                                                            type="text"
                                                            name="emailWithTitle"
                                                            id="emailWithTitle"
                                                            class="form-control"
                                                            placeholder="xxxx@xxx.xx"
                                                    />
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="dobWithTitle" class="form-label">DOB</label>
                                                    <input
                                                            type="text"
                                                            name="dobWithTitle"
                                                            id="dobWithTitle"
                                                            class="form-control"
                                                            placeholder="DD / MM / YY"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" name="updatedata" class="btn btn-primary" href="">
                                                Save changes</button>
                                        </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Delete Modal -->
                            <div class="modal fade" id="modalDelete" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="deletetemplate.php" method="POST">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalCenterTitle">Modal title</h5>
                                                <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                ></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-1" >
                                                        <label for="idWithTitle" class="form-label">ID</label>
                                                        <input
                                                                type="text"
                                                                name="delete-id"
                                                                id="delete-id"
                                                                class="form-control"
                                                                placeholder="Enter Name"
                                                                width="30px"
                                                        />
                                                    </div>
                                                    <div class="col mb-3" >
                                                        <label for="nameWithTitle" class="form-label">Name</label>
                                                        <input
                                                                type="text"
                                                                name="nameWithTitle"
                                                                id="nameWithTitle"
                                                                class="form-control"
                                                                placeholder="Enter Name"
                                                                width="30px"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label for="emailWithTitle" class="form-label">Email</label>
                                                        <input
                                                                type="text"
                                                                name="emailWithTitle"
                                                                id="emailWithTitle"
                                                                class="form-control"
                                                                placeholder="xxxx@xxx.xx"
                                                        />
                                                    </div>
                                                    <div class="col mb-0">
                                                        <label for="dobWithTitle" class="form-label">DOB</label>
                                                        <input
                                                                type="text"
                                                                name="dobWithTitle"
                                                                id="dobWithTitle"
                                                                class="form-control"
                                                                placeholder="DD / MM / YY"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" name="deletedata" class="btn btn-warning">
                                                    Yes, delete entry</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- Insert Modal -->
                            <div class="modal fade" id="modalInsert" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <form action="inserttemplate.php" method="POST">

                                            <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Insert Data</h5>
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
                                                    <label for="insertName" class="form-label">Name</label>
                                                    <input
                                                            type="text"
                                                            id="insertName"
                                                            name="insertName"
                                                            class="form-control"
                                                            placeholder="Enter Name"
                                                    />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="insertEmail" class="form-label">Email</label>
                                                    <input
                                                            type="text"
                                                            id="insertEmail"
                                                            name="insertEmail"
                                                            class="form-control"
                                                            placeholder="xxxx@xxx.xx"
                                                    />
                                                </div>
                                                <div class="col mb-0">
                                                    <label for="insertDate" class="form-label">Date Verified</label>
                                                    <input
                                                            type="text"
                                                            id="insertDate"
                                                            name="insertDate"
                                                            class="form-control"
                                                            placeholder="<?php echo date('d-m-y h:i:s') ?>"
                                                            readonly
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" name="insertdata" class="btn btn-primary">Save changes</button>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Basic Bootstrap Table -->
                    <div class="card">

                        <!--/ Insert Data Button -->
                            <div class="card-body">
                                <div class="row demo-vertical-spacing">
                                    <div class="col"
                                         data-bs-toggle="modal"
                                         data-bs-target="#modalInsert">
                                        <button type="button" class="btn btn-outline-primary text-nowrap">
                                            <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Add Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <!--/ Insert Data Button -->

                        <hr class="my-3" />

                        <div class="table-responsive text-nowrap">
                            <table id="datatableid" class="table">
                                <caption class="ms-4">
                                    List of Entries
                                </caption>

                                <thead>

                                <tr>
                                    <th><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Email Verified At</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <?php foreach ($rows as $row) { ?>
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                                <?php echo $row['id']; ?></strong></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['email_verified_at']; ?></td>
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
                                                    ><i class="bx bx-trash"></i> Delete</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot class="table-border-bottom-0">
                                <tr>
                                    <th>Project</th>
                                    <th>Client</th>
                                    <th>Users</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->

                    <hr class="my-5" />

                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">Table Basic</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>Client</th>
                                    <th>Users</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                    <td>Albert Cook</td>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller"
                                            >
                                                <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson"
                                            >
                                                <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                            <li
                                                    data-bs-toggle="tooltip"
                                                    data-popup="tooltip-custom"
                                                    data-bs-placement="top"
                                                    class="avatar avatar-xs pull-up"
                                                    title="Christina Parker"
                                            >
                                                <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown" data-bs-offset="0,14"
                                                    data-bs-placement="left">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                   data-bs-target="#modalCenter" href="javascript:void(0);"
                                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                                >
                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                   data-bs-target="#modalDelete" href="javascript:void(0);"
                                                ><i class="bx bx-trash me-1"></i> Delete</a
                                                >
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot class="table-border-bottom-0">
                                <tr>
                                    <th>Project</th>
                                    <th>Client</th>
                                    <th>Users</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->

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
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<script>
    $(document).ready(function () {
        $('.delete-button').on('click', function () {

            $('#modalDelete').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete-id').val(data[0]);
            $('#nameWithTitle').val(data[1]);
            $('#emailWithTitle').val(data[2]);
            $('#dobWithTitle').val(data[3]);
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.edit-button').on('click', function () {

            $('#modalCenter').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function () {
                return $(this).text();
            }).get();

            console.log(data);

            $('#idWithTitle').val(data[0]);
            $('#nameWithTitle').val(data[1]);
            $('#emailWithTitle').val(data[2]);
            $('#dobWithTitle').val(data[3]);
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