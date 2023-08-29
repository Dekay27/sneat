<?php

$schoolName = "";
$headsName = "";
$address1 = "";
$address2 = "";
$address3 = "";
$telephone1 = "";
$telephone2 = "";
$mobilePhone = "";
$email = "";
$fax = "";
$website = "";
$location = "";

// Connect to the database
$db = new PDO('mysql:host=mysql.hightelconsult.com;dbname=kuceportalonline', 'hightelconsult', 'Zozo_999_Kwame');

// Query the database
$result = $db->query('SELECT * FROM schoolinfo');

// Fetch the data as an associative array
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
    $schoolName = $row['SchoolName'];
    $headsName = $row['HeadsName'];
    $address1 = $row['Address1'];
    $address2 = $row['Address2'];
    $address3 = $row['Address3'];
    $telephone1 = $row['Telephone1'];
    $telephone2 = $row['Telephone2'];
    $mobilePhone = $row['MobilePhone'];
    $email = $row['EmailAddress'];
    $fax = $row['Fax'];
    $website = $row['WebsiteAddress'];
    $location = $row['Location'];
}

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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> School Information
                    </h4>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">School Details</h5>
                                <!-- Account -->
                                <div class="card-body">
                                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                                        <img
                                                src="../../../assets/img/avatars/1.png"
                                                alt="user-avatar"
                                                class="d-block rounded"
                                                height="100"
                                                width="100"
                                                id="uploadedAvatar"
                                        />
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new logo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input
                                                        type="file"
                                                        id="upload"
                                                        class="account-file-input"
                                                        hidden
                                                        accept="image/png, image/jpeg"
                                                />
                                            </label>
                                            <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-4">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>

                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-0"/>
                                <div class="card-body">
                                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">School Name</label>
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        id="schoolName"
                                                        name="schoolName"
                                                        value="<?php echo $schoolName; ?>"
                                                        placeholder="Hightel University"
                                                        autofocus
                                                />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="lastName" class="form-label">Name of Head</label>
                                                <input class="form-control" type="text" name="lastName" id="lastName"
                                                       value="<?php echo $headsName; ?>"/>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                       placeholder="Address Line 1"
                                                       value="<?php echo $address1; ?>"/><br>
                                                <input type="text" class="form-control" id="address" name="address"
                                                       placeholder="Address Line 2"
                                                       value="<?php echo $address2; ?>"/><br>
                                                <input type="text" class="form-control" id="address" name="address"
                                                       placeholder="Address Line 3" value="<?php echo $address3; ?>"/>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">Telephone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">GH (+233)</span>
                                                    <input
                                                            type="text"
                                                            id="phoneNumber"
                                                            name="phoneNumber"
                                                            class="form-control"
                                                            placeholder="0202 555 0111"
                                                            value="<?php echo $telephone1; ?>"
                                                    />
                                                </div>
                                                <br>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon11">GH (+233)</span>
                                                    <input
                                                            type="text"
                                                            id="phoneNumber"
                                                            name="phoneNumber"
                                                            class="form-control"
                                                            placeholder="0202 555 0111"
                                                            value="<?php echo $telephone2; ?>"
                                                    />
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Mobile</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon11">GH (+233)</span>
                                                    <input
                                                            type="text"
                                                            id="phoneNumber"
                                                            name="phoneNumber"
                                                            class="form-control"
                                                            placeholder="0202 555 0111"
                                                            value="<?php echo $mobilePhone; ?>"
                                                    />
                                                </div>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        id="email"
                                                        name="email"
                                                        value="<?php echo $email; ?>"
                                                        placeholder="john.doe@example.com"
                                                />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="organization" class="form-label">Website</label>
                                                <input
                                                        type="text"
                                                        class="form-control"
                                                        id="organization"
                                                        name="organization"
                                                        value="<?php echo $website; ?>"
                                                />
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="state" class="form-label">Location</label>
                                                <input class="form-control" type="text" id="location" name="location"
                                                       placeholder="California" value="<?php echo $location; ?>"/>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Fax</label>
                                                <input
                                                        class="form-control"
                                                        type="text"
                                                        id="fax"
                                                        name="fax"
                                                />
                                            </div>

                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Account -->
                            </div>
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