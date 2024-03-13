<?php
$connection = mysqli_connect('mysql.hightelconsult.com', 'hightelconsult', 'Zozo_999_Kwame', 'kuceportalonline');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

session_start();

if (isset($_POST['updatedata'])) {
    $courseCode = $_POST['updateCourseCode'];
    $courseName = $_POST['updateCourseName'];
    $option = $_POST['updateOption'];
    $certificateType = $_POST['updateCertificateType'];

    $query = "UPDATE abcesubjects SET CourseCode=?, CourseName=?, Optional=?, CertificateType=? WHERE CourseCode=?";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $courseCode, $courseName, $option, $certificateType, $courseCode);
        $result = mysqli_stmt_execute($stmt);

        $_SESSION['message'] = $result ? "Data Updated" : "Data Not Updated";
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Failed to prepare the statement.";
    }

    header("Location: abcesubjects.php");
    exit();
}

if (isset($_POST['insertdata'])) {
    $courseCode = $_POST['insertCourseCode'];
    $courseName = $_POST['insertCourseName'];
    $option = $_POST['insertOption'];
    $certificateType = $_POST['insertCertificateType'];

    $query = "INSERT INTO abcesubjects (CourseCode, CourseName, Optional, CertificateType) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        // Bind the parameters to the query
        mysqli_stmt_bind_param($stmt, "ssss", $courseCode, $courseName, $option, $certificateType);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        $_SESSION['message'] = $result ? "Data Saved" : "Data Not Saved";
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Failed to prepare the statement.";
    }

    header('Location: abcesubjects.php');
    exit();
}

if (isset($_POST['deletedata'])) {
    $courseCode = $_POST['deleteCourseCode'];

    $query = "DELETE FROM abcesubjects WHERE CourseCode=?";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $courseCode);
        $result = mysqli_stmt_execute($stmt);

        $_SESSION['message'] = $result ? "Data Deleted" : "Data Not Deleted";
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Failed to prepare the statement.";
    }

    header("Location: abcesubjects.php");
    exit();
}
?>
