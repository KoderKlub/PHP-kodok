<?php

// MySQL (elavult, nem használható)
// MySQLi (improved)
// SQLite
// PDO interface (PHP Data Objects)

// to use the SQLite3 class, create the php.ini file and modify the following lines:
// extension=sqlite3
// sqlite3.extension_dir = "C:/prog-languages/php-8.2.10/ext"
// extension_dir = "ext"


// Adatbázis osztály ami az SQLite3-ból örököl  
// class Adatbazis extends SQLite3 {
//     function __construct(){
//         $this->open('database/mydb.sqlite');
//     }
// }

// Adatbázis példány/objektum
// $db = new Adatbazis();
$db = new SQLite3('database/mydb.sqlite');

// SQL parancs a users tábla létrehozásához
$statement = "CREATE TABLE IF NOT EXISTS users  (
    user_id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL)";

$db->exec($statement);


// SQL parancs, felhasználók hozzádása a users táblához
// $statement = "INSERT INTO users (username, email, password) VALUES 
// ('Reka', 'reka@mail.com', 'reka1234'),
// ('Andi', 'andi@mail.com', 'andi1234')";

// SQL parancs végrehajtása
// $db->exec($statement);

// felhasználók lekérése a users táblából
$users = $db->query("SELECT * FROM users");

// felhasználók kiíratása
// while ($user = $users->fetchArray()){
//     echo "{$user['user_id']} \t {$user['username']} \t {$user['email']} \t {$user['password']}" . PHP_EOL;
// }

function showUsers() {
    global $users;

    while ($user = $users->fetchArray()) {
    
        $table_row = <<<USERS
        <tr>
            <td>{$user['user_id']}</td>
            <td>{$user['username']}</td>
            <td>{$user['email']}</td>
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
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>user id</th>
                <th>username</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php showUsers(); $db->close(); ?>
        </tbody>
    </table>
</body>
</html>

