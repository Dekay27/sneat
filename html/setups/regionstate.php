<?php

$countryID = "";
$countryDescription = "";

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=phpgrid', 'root', '');

// Query the database
$result = $db->query('SELECT * FROM country');

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

    <title>Region/State - Setup | ISMS - Integrated School Management System</title>

    <meta name="description" content=""/>

    <script>
        function includeHTMLSnippet() {

            // Traverse the collection of
            // all HTML elements
            const id = document.getElementsByTagName("*");
            let element;
            let xmlRequest;
            let file;
            for (let i = 0; i < id.length; i++) {
                element = id[i];

                // Search for elements with
                // specific attributes
                file = element.getAttribute(
                    "GFG-include-html-snippet");

                if (file) {

                    // Create an HTTP request with the
                    // attribute value as the file name
                    xmlRequest = new XMLHttpRequest();
                    xmlRequest.onreadystatechange = function () {
                        if (this.readyState === 4) {
                            if (this.status === 200) {
                                element.innerHTML = this.responseText;
                            }

                            if (this.status === 404) {
                                element.innerHTML = "Page not found.";
                            }

                            // Delete the attribute and
                            // call this function again
                            element.removeAttribute(
                                "GFG-include-html-snippet");

                            includeHTMLSnippet();
                        }
                    }
                    xmlRequest.open("GET", file, true);
                    xmlRequest.send();
                    return; // Exit function.
                }
            }
        }
    </script>

</head>

<body>

<div class="content-wrapper">
    <!-- Content -->
    <div class="layout-wrapper layout-content-navbar">
        <div GFG-include-html-snippet="nav.html">

            <!-- Layout Nav Bar -->
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
                            <li class="nav-item lh-1 me-3">
                                <a
                                        class="github-button"
                                        href="https://github.com/themeselection/sneat-html-admin-template-free"
                                        data-icon="octicon-star"
                                        data-size="large"
                                        data-show-count="true"
                                        aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                                >Star</a
                                >
                            </li>

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
                                                    <span class="fw-semibold d-block">John Doe</span>
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

                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout Nav Bar -->


            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setup /</span> Region/State Setup</h4>

                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">List of Countries</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Country ID</th>
                                <th>Country Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php foreach ($rows as $row) { ?>
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>
                                            <?php echo $row['CountryID']; ?></strong></td>
                                    <td><?php echo $row['CountryDescription']; ?></td>
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


                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            , made with ❤️ by
                            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Hightel
                                Consults</a>
                        </div>
                        <div>
                            <a href="https://themeselection.com/license/" class="footer-link me-4"
                               target="_blank">License</a>

                            <a
                                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                                    target="_blank"
                                    class="footer-link me-4"
                            >Documentation</a>

                            <a
                                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                                    target="_blank"
                                    class="footer-link me-4"
                            >Support</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>

        </div>
    </div>
    <!-- Content wrapper -->
</div>

<!-- Page JS -->
<!-- #3 Include Script -->
<script>
    includeHTMLSnippet();
</script>

</body>

</html>