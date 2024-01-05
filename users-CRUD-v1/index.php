<?php

// CRUD app

$db = new SQLite3('database/mydb.sqlite');

// create the users table
$statement = "CREATE TABLE IF NOT EXISTS users  (
    user_id INTEGER PRIMARY KEY AUTOINCREMENT,
    fname VARCHAR(100) NOT NULL,
    lname VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    score INTEGER NOT NULL)";

$db->exec($statement);


if (check_fields()){
    user_create();
}

function check_fields(){
    $fname = isset($_POST["fname"]) && !empty($_POST["fname"]);
    $lname = isset($_POST["lname"]) && !empty($_POST["lname"]);
    $email = isset($_POST["email"]) && !empty($_POST["email"]);
    $score = isset($_POST["score"]) && !empty($_POST["score"]);
    return $fname && $lname && $email && $score;
}

function user_create(){
    global $db;
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $score = intval($_POST["score"]);

    if (email_exists($email)){
        return;
    }

    $stmt = $db->prepare("INSERT INTO users (fname, lname, email, score) VALUES (?, ?, ?, ?)");
    $stmt->bindValue(1, $fname);
    $stmt->bindValue(2, $lname);
    $stmt->bindValue(3, $email);
    $stmt->bindValue(4, $score, SQLITE3_INTEGER);
    $stmt->execute();
}

function email_exists(string $email): bool{
    global $db;
    $emails = $db->query("SELECT email FROM users WHERE email='$email'");
    while ($current_email = $emails->fetchArray()){
        if ($current_email['email'] == $email) {
            return true;
        }
    }
    return false;
}

function user_read_all(){
    global $db;
    $users = $db->query("SELECT * FROM users");

    while ($user = $users->fetchArray()){
        $table_row = <<<USERS
        <tr>
            <td>{$user['user_id']}</td>
            <td>{$user['fname']}</td>
            <td>{$user['lname']}</td>
            <td>{$user['email']}</td>
            <td>{$user['score']}</td>
            <td>
                <a class="btn btn-primary" href="edit_user.php?uid={$user['user_id']}">edit</a>
                <a class="btn btn-danger ms-2" href="delete_user.php?uid={$user['user_id']}">delete</a>
            </td>
        </tr>
        USERS;
        echo $table_row;
    }
}

// $db->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">

        <?= check_fields() ? "Hello " . $_POST["fname"] : "Please fill out all the fields!" ?>

        <form action="" method="post">
            <label for="fname">First name</label>
            <input type="text" name="fname" class="form-control">

            <label for="lname">Last name</label>
            <input type="text" name="lname" class="form-control">

            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">

            <label for="score">Score</label>
            <input type="number" name="score" min="1" max="10" class="form-control">

            <button type="submit" class="btn btn-success mt-4">Submit</button>
        </form>

         <!-- READ ALL USERS INTO TABLE -->

         <div class="mt-4"> 
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">user id</th>
                        <th scope="col">first name</th>
                        <th scope="col">last name</th>
                        <th scope="col">email</th>
                        <th scope="col">score</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php user_read_all(); $db->close(); ?>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>