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

if (isset($_GET['uid']) && !empty($_GET['uid'])) {
    $id = intval($_GET['uid']);

    $stmt = mysqli_prepare($conn, "DELETE FROM users WHERE user_id=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    $success = mysqli_stmt_execute($stmt);

    mysqli_close($conn);

    if ($success) {
        header("location:index.php");
    }else{
        echo "User with id $id was NOT deleted!";
    }
}