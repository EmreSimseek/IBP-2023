<?php

$db = mysqli_connect('localhost', 'root', '', 'students');


if (isset($_POST['submit'])) {
    // Get the form data
    $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);


    $errors = array();
    if (empty($full_name)) {
        $errors[] = 'Full name is required';
    }
    if (empty($email)) {
        $errors[] = 'Email is required';
    }
    if (empty($gender)) {
        $errors[] = 'Gender is required';
    }


    if (count($errors) == 0) {

        $query = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
        mysqli_query($db, $query);

        // Display a success message
        echo 'Student registered successfully!';
    } else {
        // Display the errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}


$query = "SELECT * FROM students";
$result = mysqli_query($db, $query);

echo '<ul>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<li>' . $row['full_name'] . ' - ' . $row['email'] . ' - ' . $row['gender'] . '</li>';
}
echo '</ul>';


