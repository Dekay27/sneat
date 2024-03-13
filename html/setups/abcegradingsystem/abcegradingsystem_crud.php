<?php
//include '../../../logon.php';
$connection = mysqli_connect('mysql.hightelconsult.com', 'hightelconsult', 'Zozo_999_Kwame', 'kuceportalonline');

if (isset($_POST['updatedata'])) {
    $id = $_POST['updateID'];
    $grade = $_POST['updateGrade'];
    $numericGrade = $_POST['updateNumericGrade'];

    $query = "UPDATE abcegradingsystem SET Grade=?, NumericGrade=? WHERE RecordKey=?";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssi", $grade, $numericGrade, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION['message'] = "Data Updated";
        } else {
            $_SESSION['message'] = "Data Not Updated";
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Failed to prepare the statement.";
    }

    header("Location: abcegradingsystem.php");
    exit();
}

if (isset($_POST['insertdata'])) {
    $grade = $_POST['insertGrade'];
    $numericGrade = $_POST['insertNumericGrade'];

    $query = "INSERT INTO abcegradingsystem (Grade, NumericGrade) VALUES (?, ?)";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "si", $grade, $numericGrade);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION['message'] = "Data Saved";
        } else {
            $_SESSION['message'] = "Data Not Saved";
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Failed to prepare the statement.";
    }

    header('Location: abcegradingsystem.php');
    exit();
}

if (isset($_POST['deletedata'])) {
    $id = $_POST['deleteID'];

    $query = "DELETE FROM abcegradingsystem WHERE RecordKey=?";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $_SESSION['message'] = "Data Deleted";
        } else {
            $_SESSION['message'] = "Data Not Deleted";
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Failed to prepare the statement.";
    }

    header("Location: abcegradingsystem.php");
    exit();
}

?>
