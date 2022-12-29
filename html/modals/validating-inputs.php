<?php
// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : array();

    // Validate the input
    $errors = array();
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
    if (!is_numeric($age) || $age < 18 || $age > 99) {
        $errors[] = "Age must be a number between 18 and 99.";
    }
    if ($gender != "male" && $gender != "female") {
        $errors[] = "Invalid gender.";
    }
    if (empty($hobbies)) {
        $errors[] = "At least one hobby is required.";
    }

    // If there are no errors, process the input
    if (empty($errors)) {
        // Save the input to the database or perform other actions as needed...
    } else {
        // Display the errors
        echo "There were errors in the form:<br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

<!-- Form HTML -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Age: <input type="text" name="age"><br>
    Gender: <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female<br>
    Hobbies: <input type="checkbox" name="hobbies[]" value="reading">Reading
    <input type="checkbox" name="hobbies[]" value="writing">Writing
    <input type="checkbox" name="hobbies[]" value="sports">Sports<br>
    <input type="submit" value="Submit">
</form>
