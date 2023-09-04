<?php


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

    <title>System Setup | ISMS - Integrated School Management System</title>

    <meta name="description" content=""/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/sf-black-filled/64/7950F2/wi-fi-connected.png"/>

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


<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <?php include_once '../modals/sidebar.php' ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <?php include_once '../modals/navigationbar.html' ?>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <!-- Accordion -->
                    <h4 class="mt-4">Setup Pages</h4>
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-md mb-4 mb-md-0">
                            <div class="accordion mt-3" id="accordionExample">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                                type="button"
                                                class="accordion-button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordionOne"
                                                aria-expanded="true"
                                                aria-controls="accordionOne"
                                        >
                                            Grading Systems/Exams Setup
                                        </button>
                                    </h2>

                                    <div
                                            id="accordionOne"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a
                                                            href="exammalpractice/exammalpractice.php">1. Exam
                                                        Malpractice</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystempu/gradingsystempu.php">2. PU
                                                        Grading Setup</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystemknust/gradingsystemknust.php">3.
                                                        KNUST
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystemgimpa/gradingsystemgimpa.php">4.
                                                        GIMPA
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystemudsbns/gradingsystemudsbns.php">5.
                                                        UDS-BNS Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystemuds/gradingsystemuds.php">6.
                                                        UDS
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystemuhas/gradingsystemuhas.php">7.
                                                        UHAS
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="gradingsystemug/gradingsystemug.php">8. UG
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a href="graduation_class_setup.html">9.
                                                        Graduation Class Setup</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button
                                                type="button"
                                                class="accordion-button collapsed"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#accordionTwo"
                                                aria-expanded="false"
                                                aria-controls="accordionTwo"
                                        >
                                            Admissions - Subjects Setup
                                        </button>
                                    </h2>
                                    <div
                                            id="accordionTwo"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a
                                                            href="abesubjectssetup/abesubjectssetup.php">1. ABE
                                                        Subject Setup</a></li>
                                                <li class="list-group-item"><a href="shssubjects/shssubjects.php">2.
                                                        WASSCE/SSSCE Subject Table</a></li>
                                                <li class="list-group-item"><a href="gbcesubjects/gbcesubjects.php">3.
                                                        GBCE
                                                        Subjects</a></li>
                                                <li class="list-group-item"><a href="olevelsubjects/olevelsubjects.php">4.
                                                        O-Levels Subjects</a></li>
                                                <li class="list-group-item"><a href="dbssubjects/dbssubjects.php">5. DBS
                                                        Subjects</a></li>
                                                <li class="list-group-item"><a href="othersubjects/othersubjects.php">6.
                                                        Other Certificates/Subjects</a></li>
                                                <li class="list-group-item"><a href="hndsubjects/hndsubjects.php">7. HND
                                                        Subjects</a></li>
                                                <li class="list-group-item"><a href="abcesubjects/abcesubjects.php">8.
                                                        ABCE Subjects</a></li>
                                                <li class="list-group-item"><a href="alevelsubjects/alevelsubjects.php">9.
                                                        A-Levels Subjects</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 2 -->
                        <div class="col-md mb-4 mb-md-0">
                            <div class="accordion mt-3" id="accordionExample2">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOne2">
                                        <button
                                                type="button"
                                                class="accordion-button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#generalTable"
                                                aria-expanded="true"
                                                aria-controls="accordionOne2"
                                        >
                                            General Table Setup
                                        </button>
                                    </h2>

                                    <div
                                            id="generalTable"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample2"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="country/country.php">1. Country
                                                        Table</a></li>
                                                <li class="list-group-item"><a href="regionstate/regionstate.php">2.
                                                        Region/State
                                                        Table</a></li>
                                                <li class="list-group-item"><a href="title/title.php">3. Title
                                                        Table</a></li>
                                                <li class="list-group-item"><a
                                                            href="natureofemployment/natureofemployment.php">4.
                                                        Nature of Employment</a></li>
                                                <li class="list-group-item"><a
                                                            href="modeofapplication/modeofapplication.php">5.
                                                        Mode of Application</a></li>
                                                <li class="list-group-item"><a href="deadlinesetup/deadlinesetup.php">6.
                                                        Result Deadline</a></li>
                                                <li class="list-group-item"><a href="medicalsetup/medicalsetup.php">7.
                                                        Medical Setup</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button
                                                type="button"
                                                class="accordion-button collapsed"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#courseSetup"
                                                aria-expanded="false"
                                                aria-controls="accordionTwo2"
                                        >
                                            Setup of Courses
                                        </button>
                                    </h2>
                                    <div
                                            id="courseSetup"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo2"
                                            data-bs-parent="#accordionExample2"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="schoolinfo/schoolinfo.php">1.
                                                        School
                                                        Info</a></li>
                                                <li class="list-group-item"><a href="faculty/faculty.php">2. Faculty
                                                        Table</a></li>
                                                <li class="list-group-item"><a href="department/department.php">3.
                                                        Department Table</a></li>
                                                <li class="list-group-item"><a href="###">Quality
                                                        Assurance Setup</a></li>
                                                <li class="list-group-item"><a href="programme/programme.php">4.
                                                        Programme
                                                        Table</a></li>
                                                <li class="list-group-item"><a href="level/level.php">5. Level
                                                        Table</a></li>
                                                <li class="list-group-item"><a href="session/session.php">6. Session
                                                        Table</a></li>
                                                <li class="list-group-item"><a href="coursesetup/coursesetup.php">7.
                                                        Course
                                                        Setup</a></li>
                                                <li class="list-group-item"><a href="###">8. Course
                                                        Assignment</a></li>
                                                <li class="list-group-item"><a href="academicyear/academicyear.php">9.
                                                        Academic Year Table</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3 -->
                        <div class="col-md mb-4 mb-md-0">
                            <div class="accordion mt-3" id="accordionExample3">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                                type="button"
                                                class="accordion-button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#gradingSystems"
                                                aria-expanded="true"
                                                aria-controls="accordionOne"
                                        >
                                            Admissions - Grading Systems Setup
                                        </button>
                                    </h2>

                                    <div
                                            id="gradingSystems"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample3"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a
                                                            href="abcegradingsystem/abcegradingsystem.php">1. ABCE
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="olevelgradingsystem/olevelgradingsystem.php">2.
                                                        O-Levels Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="alevelgradingsystem/alevelgradingsystem.php">3.
                                                        A-Levels Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="hndgradingsystem/hndgradingsystem.php">4. HND
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="dbsgradingsystem/dbsgradingsystem.php">5. DBS
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="gbcegradingsystem/gbcegradingsystem.php">6. GBCE
                                                        Grading System</a></li>
                                                <li class="list-group-item"><a
                                                            href="shsgradingsystem/shsgradingsystem.php">7.
                                                        WASSCE/SSSCE Grading System</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button
                                                type="button"
                                                class="accordion-button collapsed"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#rightsAndPrivileges"
                                                aria-expanded="false"
                                                aria-controls="accordionTwo"
                                        >
                                            Rights and Privileges
                                        </button>
                                    </h2>
                                    <div
                                            id="rightsAndPrivileges"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo"
                                            data-bs-parent="#accordionExample3"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="usersetup/usersetup.php">1. User
                                                        Setup</a>
                                                </li>
                                                <li class="list-group-item"><a href="setup.php">2. System
                                                        Setup</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                                type="button"
                                                class="accordion-button collapsed"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#qualityAssurance"
                                                aria-expanded="false"
                                                aria-controls="accordionThree"
                                        >
                                            Quality Assurance Setup
                                        </button>
                                    </h2>
                                    <div
                                            id="qualityAssurance"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample3"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="table_a_setup.html">1. Table A
                                                        Setup</a></li>
                                                <li class="list-group-item"><a href="table_b_setup.html">2. Table B
                                                        Setup</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Accordion -->

                    <!--/ Advance Styling Options -->
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php include_once '../modals/footer.php' ?>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->

            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
