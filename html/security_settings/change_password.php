<?php
// Start session to access user session variables
session_start();

// Database connection - replace with your actual database credentials
$conn = new mysqli('localhost', 'root', '', 'sneat');

// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    // Placeholder user ID - replace with actual user session or identification mechanism
    $userId = $_SESSION['username'];

    // Validate current password
    $sql = "SELECT password FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        // Verify password - ensure you use password hashing in your actual application
        if (password_verify($currentPassword, $row['password'])) {
            // Check if new passwords match
            if ($newPassword === $confirmNewPassword) {
                // Update password in database - ensure to hash the new password
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                $updateSql = "UPDATE users SET password = ? WHERE id = ?";
                $updateStmt = $conn->prepare($updateSql);
                $updateStmt->bind_param("si", $hashedPassword, $userId);

                if ($updateStmt->execute()) {
                    echo "Password changed successfully.";
                } else {
                    echo "Error updating password.";
                }
            } else {
                echo "New passwords do not match.";
            }
        } else {
            echo "Current password is incorrect.";
        }
    } else {
        echo "User not found.";
    }

    $stmt->close();
    $conn->close();
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

    <title>Change Password | ISMS - Integrated School Management System</title>

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
                    <h4 class="fw-bold py-3 mb-4 text-center">Change Password</h4>

                    <div class="card">
                        <div class="container">
                            <form action="change_password.php" method="POST">
                                <div class="row g-2 mt-3">
                                    <div class="col-lg-4">
                                        <label for="currentPassword" class="form-label">Current Password:</label><br>
                                        <input type="password" class="form-control" id="currentPassword" name="currentPassword" required><br>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-lg-4 ">
                                        <label for="newPassword" class="form-label">New Password:</label><br>
                                        <input type="password" class="form-control" id="newPassword" name="newPassword" required><br>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="confirmNewPassword" class="form-label">Confirm New Password:</label><br>
                                        <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" required><br>
                                    </div>
                                </div>


                                    <button type="submit" name="changePassword" class="btn btn-primary mb-3">
                                        Change Password
                                    </button>

                            </form>
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
