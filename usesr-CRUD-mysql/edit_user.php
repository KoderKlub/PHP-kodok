<?php

// local db
// $databaseHost = 'localhost';
// $databaseUsername = 'root';
// $databasePassword = '';
// $databaseName = 'usersdb';

// container db
$databaseHost = 'localhost';
$databaseUsername = 'felhasznalonev';
$databasePassword = 'jelszo';
$databaseName = 'usersdb';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (isset($_POST['submit'])) {
    $id = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $score = intval($_POST['score']);

    $stmt = mysqli_prepare($conn, "UPDATE users SET fname=?, lname=?, email=?, score=? WHERE user_id=$id");
    mysqli_stmt_bind_param($stmt, "sssi", $fname, $lname, $email, $score);
    $success = mysqli_stmt_execute($stmt);

    mysqli_close($conn);

    if ($success) {
        header("location:index.php");
    }else{
        die("Something went wrong!");
    }
}

?>
