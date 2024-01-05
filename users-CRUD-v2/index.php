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
    if ($emails->fetchArray()) {
        return true;
    }
    return false;
}

function user_read_all(){
    global $db;
    $users = $db->query("SELECT * FROM users");

    while ($user = $users->fetchArray()){
        $table_row = <<<USERS
        <tr id="user-{$user['user_id']}">
            <td>{$user['user_id']}</td>
            <td>{$user['fname']}</td>
            <td>{$user['lname']}</td>
            <td>{$user['email']}</td>
            <td>{$user['score']}</td>
            <td>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser" data-edit-uid="{$user['user_id']}" onclick="get_edit_id(this)">edit</a>
                <a class="btn btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#deleteUser" data-del-uid="{$user['user_id']}" onclick="get_delete_id(this)">delete</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

        <!-- Delete User Modal -->
        <div class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to delete this user?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="swap-target" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a id="deleter" href="delete_user.php?uid=0" type="button" class="btn btn-primary">Delete</a>
            </div>
            </div>
        </div>
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editUserModalLabel">Edit user</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="edit_user.php" method="post" id="myform">

                    <input id="hidden-uid" type="text" name="uid" hidden>

                    <label for="fname">First name</label>
                    <input id="fname" type="text" name="fname" class="form-control">

                    <label for="lname">Last name</label>
                    <input id="lname" type="text" name="lname" class="form-control">

                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control">

                    <label for="score">Score</label>
                    <input id="score" type="number" name="score" min="1" max="10" class="form-control">

                    <!-- <button id="editer" type="submit" name="submit" class="btn btn-primary">Save changes</button> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="editer" form="myform" name="submit" type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function get_delete_id(elem){
            let del_uid = elem.getAttribute("data-del-uid");
            let row = document.getElementById("user-" + del_uid);
            let uid = row.children[0].innerHTML;
            let fname = row.children[1].innerHTML;
            let lname = row.children[2].innerHTML;
            let email = row.children[3].innerHTML;
            // console.log(uid, fname, lname, email);
            document.getElementById("swap-target").innerHTML = `<b>${fname} ${lname}: ${email}</b>`;

            let btn = document.getElementById("deleter");
            btn.setAttribute("href", btn.getAttribute("href").replace("0", uid));
        }

        function get_edit_id(elem){
            let edit_uid = elem.getAttribute("data-edit-uid");
            let row = document.getElementById("user-" + edit_uid);
            let uid = row.children[0].innerHTML;
            let fname = row.children[1].innerHTML;
            let lname = row.children[2].innerHTML;
            let email = row.children[3].innerHTML;
            let score = row.children[4].innerHTML;

            // console.log(`${uid} - ${fname} - ${lname} - ${email} - ${score}`);

            let hidden_uid = document.getElementById("hidden-uid");
            hidden_uid.setAttribute("value", uid);

            let fname_input = document.getElementById("fname");
            fname_input.setAttribute("value", fname);

            let lname_input = document.getElementById("lname");
            lname_input.setAttribute("value", lname);

            let email_input = document.getElementById("email");
            email_input.setAttribute("value", email);

            let score_input = document.getElementById("score");
            score_input.setAttribute("value", score);
        }

    </script>
</body>
</html>