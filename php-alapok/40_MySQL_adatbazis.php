<?php

// MySQLi extension

// Basic connection settings
$databaseHost = '127.0.0.1';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'adatbazis2';

// Procedural way
// in php.ini enable: extension=mysqli 
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


// create the users table
$statement = "CREATE TABLE IF NOT EXISTS users (
    user_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL
);";

$stmt_prepare = mysqli_prepare($conn, $statement);
mysqli_stmt_execute($stmt_prepare);

// insert data into users table
$statement = "INSERT INTO users (username, email, password) VALUES 
('Reka', 'reka@mail.com', 'reka1234'),
('Andi', 'andi@mail.com', 'andi1234')";

// $stmt_prepare = mysqli_prepare($conn, $statement);
// mysqli_stmt_execute($stmt_prepare);

$result = mysqli_query($conn, "SELECT * FROM users");
// $users = mysqli_fetch_all($result);
// print_r($users);

while ($user = mysqli_fetch_array($result)) {
    echo "{$user['user_id']} \t {$user['username']} \t {$user['email']} \t {$user['password']}" . PHP_EOL;
}

// Closing the connection
mysqli_close($conn);

?>