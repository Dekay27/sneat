<?php
?>

<?php


?>

<!DOCTYPE html>
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

    <title>Student Aggregate</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="../assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>
<body>
<div class="container-xxl flex-grow-1 container-p-y">
    <h2>Student Aggregate</h2>
    <h5 class="py-3 my-4">Tabs</h5>

    <div class="row">
        <div class="col-xl-9">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <button
                                type="button"
                                class="nav-link active"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-justified-home"
                                aria-controls="navs-justified-home"
                                aria-selected="true"
                        >
                            <i class="tf-icons bx bx-home"></i> Home
                            <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger">3</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button
                                type="button"
                                class="nav-link"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-justified-profile"
                                aria-controls="navs-justified-profile"
                                aria-selected="false"
                        >
                            <i class="tf-icons bx bx-user"></i> Profile
                        </button>
                    </li>
                    <li class="nav-item">
                        <button
                                type="button"
                                class="nav-link"
                                role="tab"
                                data-bs-toggle="tab"
                                data-bs-target="#navs-justified-messages"
                                aria-controls="navs-justified-messages"
                                aria-selected="false"
                        >
                            <i class="tf-icons bx bx-message-square"></i> Messages
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                        <p>
                            Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
                            powder. Bear claw candy topping.
                        </p>
                        <p class="mb-0">
                            Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                            jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans
                            marshmallow
                            jujubes sweet.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                        <p>
                            Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                            cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice
                            cream
                            cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                            Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                            cotton candy liquorice caramels.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                        <p>
                            Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                            cupcake gummi bears cake chocolate.
                        </p>
                        <p class="mb-0">
                            Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake.
                            Sweet
                            roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding
                            jelly
                            jelly-o tart brownie jelly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="nav-align-center mb-4 justify-content-center">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h6>Aggregate</h6>
                        <h1><?php echo "10"; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
