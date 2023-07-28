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

    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Country Data </h5>
            </div>

            <form action="updatecode.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Country ID </label>
                        <input type="text" name="country_id" id="country_id" class="form-control"
                               placeholder="Enter Country ID">
                    </div>

                    <div class="form-group">
                        <label> Country Description </label>
                        <input type="text" name="country_description" id="country_description" class="form-control"
                               placeholder="Enter Country Description">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="../index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                        width="25"
                        viewBox="0 0 25 42"
                        version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <defs>
                    <path
                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                            id="path-1"
                    ></path>
                    <path
                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                            id="path-3"
                    ></path>
                    <path
                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                            id="path-4"
                    ></path>
                    <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"
                    ></path>
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                                id="Triangle"
                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Application Management -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Application Management">Application Management</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="application-form.html" class="menu-link">
                                <div data-i18n="Application Form">Application Form</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="applicants.html" class="menu-link">
                                <div data-i18n="Applicants">Applicants</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Student Management -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="Student Management">Student Management</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="students-form.html" class="menu-link">
                                <div data-i18n="Students Form">Students Form</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="students-records.html" class="menu-link">
                                <div data-i18n="Students Records">Students Records</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="students-promotion.html" class="menu-link">
                                <div data-i18n="Students Promotion">Students Promotion</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="registered-students.html" class="menu-link">
                                <div data-i18n="Registered Students">Registered Students</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Course Management -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-book"></i>
                        <div data-i18n="Course Management">Course Management</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="course-registration.html" class="menu-link">
                                <div data-i18n="Course Registration">Course Registration</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="internal-course-registration.html" class="menu-link">
                                <div data-i18n="Internal Course Registration">Internal Course Registration</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="edit-reg-course-info.html" class="menu-link">
                                <div data-i18n="Edit Reg Course Info">Edit Reg Course Info</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Assessments and Scores -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-clipboard"></i>
                        <div data-i18n="Assessment and Scores">Assessment and Scores</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="scores-dashboard.html" class="menu-link">
                                <div data-i18n="Scores Dashboard">Scores Dashboard</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="resit-registration.html" class="menu-link">
                                <div data-i18n="Resit Registration">Resit Registration</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="resit-scores-dashboard.html" class="menu-link">
                                <div data-i18n="Resit Scores Dashboard">Resit Scores Dashboard</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="exam-results.html" class="menu-link">
                                <div data-i18n="Exam Results">Exam Results</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Academic Reports -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="Academic Reports">Academic Reports</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="students-reports.html" class="menu-link">
                                <div data-i18n="Students Reports">Students Reports</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="transcript-score-sheet.html" class="menu-link">
                                <div data-i18n="Transcript Score Sheet">Transcript Score Sheet</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="broadsheet.html" class="menu-link">
                                <div data-i18n="Broadsheet">Broadsheet</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="transcript.html" class="menu-link">
                                <div data-i18n="Transcript">Transcript</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="statistical-reports.html" class="menu-link">
                                <div data-i18n="Statistical Reports">Statistical Reports</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Financial Managements -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dollar"></i>
                        <div data-i18n="Financial Management">Financial Management</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="financials.html" class="menu-link">
                                <div data-i18n="Financials">Financials</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Faculty and Evaluation -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-group"></i>
                        <div data-i18n="Faculty and Evaluation">Faculty and Evaluation</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="lecturer-eval-form.html" class="menu-link">
                                <div data-i18n="Lecturer Eval. Form">Lecturer Eval. Form</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="lecturer-eval-report.html" class="menu-link">
                                <div data-i18n="Lecturer Eval. Report">Lecturer Eval. Report</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Data Import/Export -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-import"></i>
                        <div data-i18n="Data Import/Export">Data Import/Export</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="import-from-excel.html" class="menu-link">
                                <div data-i18n="Import from Excel">Import from Excel</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="upload-to-transcript.html" class="menu-link">
                                <div data-i18n="Upload to Transcript">Upload to Transcript</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="upload-to-archives.html" class="menu-link">
                                <div data-i18n="Upload to Archives">Upload to Archives</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="upload-to-students.html" class="menu-link">
                                <div data-i18n="Upload to Students">Upload to Students</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Security and Settings -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-lock"></i>
                        <div data-i18n="Security and Settings">Security and Settings</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="password-manager.html" class="menu-link">
                                <div data-i18n="Password Manager">Password Manager</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="change-password.html" class="menu-link">
                                <div data-i18n="Change Password">Change Password</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pin-management.html" class="menu-link">
                                <div data-i18n="Pin Management">Pin Management</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- System Configuration -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-cog"></i>
                        <div data-i18n="System Configuration">System Configuration</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="specialization.html" class="menu-link">
                                <div data-i18n="Specialization">Specialization</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="setup-tables.html" class="menu-link">
                                <div data-i18n="Setup Tables">Setup Tables</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="audit-trail.html" class="menu-link">
                                <div data-i18n="Audit Trail">Audit Trail</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Logout -->
                <li class="menu-item">
                    <a href="logout.html" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-log-out"></i>
                        <div data-i18n="Logout">Logout</div>
                    </a>
                </li>

            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item d-flex align-items-center">
                            <i class="bx bx-search fs-4 lh-0"></i>
                            <input
                                    type="text"
                                    class="form-control border-0 shadow-none"
                                    placeholder="Search..."
                                    aria-label="Search..."
                            />
                        </div>
                    </div>
                    <!-- /Search -->

                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <!-- Place this tag where you want the button to render. -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                               data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../assets/img/avatars/1.png" alt
                                         class="w-px-40 h-auto rounded-circle"/>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../assets/img/avatars/1.png" alt
                                                         class="w-px-40 h-auto rounded-circle"/>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">Hanson</span>
                                                <small class="text-muted">Admin</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../auth-login-basic.html">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </nav>

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
                                                <li class="list-group-item"><a href="exam_malpractice.html">1. Exam Malpractice</a></li>
                                                <li class="list-group-item"><a href="upsa_grading_setup.html">2. UPSA Grading Setup</a></li>
                                                <li class="list-group-item"><a href="knust_grading_system.html">3. KNUST Grading System</a></li>
                                                <li class="list-group-item"><a href="gimpa_grading_system.html">4. GIMPA Grading System</a></li>
                                                <li class="list-group-item"><a href="uds_bns_grading_system.html">5. UDS-BNS Grading System</a></li>
                                                <li class="list-group-item"><a href="uds_grading_system.html">6. UDS Grading System</a></li>
                                                <li class="list-group-item"><a href="uhas_grading_system.html">7. UHAS Grading System</a></li>
                                                <li class="list-group-item"><a href="graduation_class_setup.html">8. Graduation Class Setup</a></li>
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
                                                <li class="list-group-item"><a href="abe_subject_setup.html">1. ABE Subject Setup</a></li>
                                                <li class="list-group-item"><a href="wassce_subject_table.html">2. WASSCE/SSSCE Subject Table</a></li>
                                                <li class="list-group-item"><a href="gbce_subjects_table.html">3. GBCE Subjects</a></li>
                                                <li class="list-group-item"><a href="olevels_subjects_table.html">4. O-Levels Subjects</a></li>
                                                <li class="list-group-item"><a href="dbs_subjects_table.html">5. DBS Subjects</a></li>
                                                <li class="list-group-item"><a href="other_certificates_table.html">6. Other Certificates</a></li>
                                                <li class="list-group-item"><a href="hnd_subjects_table.html">7. HND Subjects</a></li>
                                                <li class="list-group-item"><a href="abce_subjects_table.html">8. ABCE Subjects</a></li>
                                                <li class="list-group-item"><a href="alevels_subjects_table.html">9. A-Levels Subjects</a></li>
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
                                                data-bs-target="#accordionOne2"
                                                aria-expanded="true"
                                                aria-controls="accordionOne2"
                                        >
                                            General Table Setup
                                        </button>
                                    </h2>

                                    <div
                                            id="accordionOne2"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample2"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="country_table.html">1. Country Table</a></li>
                                                <li class="list-group-item"><a href="region_table.html">2. Region/State Table</a></li>
                                                <li class="list-group-item"><a href="title_table.html">3. Title Table</a></li>
                                                <li class="list-group-item"><a href="employment_nature_table.html">4. Nature of Employment</a></li>
                                                <li class="list-group-item"><a href="application_mode_table.html">5. Mode of Application</a></li>
                                                <li class="list-group-item"><a href="result_deadline_table.html">6. Result Deadline</a></li>
                                                <li class="list-group-item"><a href="medical_setup_table.html">7. Medical Setup</a></li>
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
                                                data-bs-target="#accordionTwo2"
                                                aria-expanded="false"
                                                aria-controls="accordionTwo2"
                                        >
                                            Setup of Courses
                                        </button>
                                    </h2>
                                    <div
                                            id="accordionTwo2"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo2"
                                            data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="school_table.html">1. School Table</a></li>
                                                <li class="list-group-item"><a href="faculty_table.html">2. Faculty Table</a></li>
                                                <li class="list-group-item"><a href="department_table.html">3. Department Table</a></li>
                                                <li class="list-group-item"><a href="quality_assurance_setup.html">Quality Assurance Setup</a></li>
                                                <li class="list-group-item"><a href="programme_table.html">4. Programme Table</a></li>
                                                <li class="list-group-item"><a href="level_table.html">5. Level Table</a></li>
                                                <li class="list-group-item"><a href="session_table.html">6. Session Table</a></li>
                                                <li class="list-group-item"><a href="course_setup.html">7. Course Setup</a></li>
                                                <li class="list-group-item"><a href="course_assignment.html">8. Course Assignment</a></li>
                                                <li class="list-group-item"><a href="academic_year_table.html">9. Academic Year Table</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column 3 -->
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
                                            Admissions - Grading Systems Setup
                                        </button>
                                    </h2>

                                    <div
                                            id="accordionOne"
                                            class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="abce_grading_system.html">1. ABCE Grading System</a></li>
                                                <li class="list-group-item"><a href="o_levels_grading_system.html">2. O-Levels Grading System</a></li>
                                                <li class="list-group-item"><a href="a_levels_grading_system.html">3. A-Levels Grading System</a></li>
                                                <li class="list-group-item"><a href="hnd_grading_system.html">4. HND Grading System</a></li>
                                                <li class="list-group-item"><a href="dbs_grading_system.html">5. DBS Grading System</a></li>
                                                <li class="list-group-item"><a href="gbce_grading_system.html">6. GBCE Grading System</a></li>
                                                <li class="list-group-item"><a href="wassce_sssce_grading_system.html">7. WASSCE/SSSCE Grading System</a></li>
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
                                            Rights and Privileges
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
                                                <li class="list-group-item"><a href="user_setup.html">1. User Setup</a></li>
                                                <li class="list-group-item"><a href="system_setup.html">2. System Setup</a></li>
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
                                                data-bs-target="#accordionThree"
                                                aria-expanded="false"
                                                aria-controls="accordionThree"
                                        >
                                            Quality Assurance Setup
                                        </button>
                                    </h2>
                                    <div
                                            id="accordionThree"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="headingThree"
                                            data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="table_a_setup.html">1. Table A Setup</a></li>
                                                <li class="list-group-item"><a href="table_b_setup.html">2. Table B Setup</a></li>
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
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                        </div>
                        <div>
                            <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                            <a
                                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank"
                                    class="footer-link me-4"
                            >Documentation</a
                            >

                            <a
                                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank"
                                    class="footer-link me-4"
                            >Support</a
                            >
                        </div>
                    </div>
                </footer>
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

                $('#country_id').val(data[0]);
                $('#country_description').val(data[1]);
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

                $('#country_id').val(data[0]);

            });
        });
    </script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
