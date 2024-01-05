<?php

$db = new SQLite3('database/mydb.sqlite');

$id = $_GET['uid'];

$user_query = $db->query("SELECT * FROM users WHERE user_id=$id");
$user = $user_query->fetchArray();


if (isset($_POST['submit'])) {
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-4">
        <!-- UPDATE EXISTING USER -->
        <form action="" method="post">
            <label for="fname">First name</label>
            <input type="text" name="fname" class="form-control" value=<?= $user['fname'] ?>>

            <label for="lname">Last name</label>
            <input type="text" name="lname" class="form-control" value=<?= $user['lname'] ?>>

            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value=<?= $user['email'] ?>>

            <label for="score">Score</label>
            <input type="number" name="score" min="1" max="10" class="form-control" value=<?= $user['score'] ?>>

            <button type="submit" name="submit" class="btn btn-success mt-4">Update</button>
        </form>
    </div>
    
</body>
</html>