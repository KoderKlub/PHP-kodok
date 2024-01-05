<?php

$db = new SQLite3('database/mydb.sqlite');

// $id = $_GET['uid'];

// $user_query = $db->query("SELECT * FROM users WHERE user_id=$id");
// $user = $user_query->fetchArray();


if (isset($_POST['submit'])) {
    $id = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $score = intval($_POST['score']);

    $stmt = $db->prepare("UPDATE users SET fname=?, lname=?, email=?, score=? WHERE user_id=$id");
    $stmt->bindValue(1, $fname);
    $stmt->bindValue(2, $lname);
    $stmt->bindValue(3, $email);
    $stmt->bindValue(4, $score, SQLITE3_INTEGER);
    $success = $stmt->execute();

    if ($success) {
        header("location:index.php");
    }else{
        die("Something went wrong!");
    }
}

?>
