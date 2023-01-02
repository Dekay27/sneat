<?php

$countryID = "";
$countryDescription = "";

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=kuceportal', 'root', '');

// Query the database
$result = $db->query('SELECT * FROM schoolinfo');

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

    <title>School Info | ISMS - Integrated School Management System</title>

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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> School Info</h4>

                    <div class="row">
                        <!-- Basic -->
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">School Information</h5>
                                <div class="card-body demo-vertical-spacing demo-only-element">

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">School Name</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['SchoolName']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Address</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Address1']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Address2']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Address3']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Telephone</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Telephone1']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Telephone2']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Mobile</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['MobilePhone']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Email</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['EmailAddress']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Head of School</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['HeadsName']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Website</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['WebsiteAddress']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Fax</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Fax']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">Location</span>
                                        <input
                                                type="text"
                                                class="form-control"
                                                placeholder="<?php echo $rows['Location']; ?>"
                                                aria-label="Username"
                                                aria-describedby="basic-addon11"
                                        />
                                    </div>


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