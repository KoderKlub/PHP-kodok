<?php

$db = new SQLite3('database/mydb.sqlite');

if (isset($_GET['uid']) && !empty($_GET['uid'])) {
    $id = $_GET['uid'];

    $statement = $db->prepare("DELETE FROM users WHERE user_id=?");
    $statement->bindValue(1, $id);
    $success = $statement->execute();

    if ($success) {
        header("location:index.php");
    }else{
        echo "User with id $id was NOT deleted!";
    }
}