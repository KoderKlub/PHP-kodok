<?php

// PostgreSQL with PDO (PHP Data Objects)
// enable: extension=pdo_pgsql

// to change password in PostgreSQL
// ALTER USER postgres WITH PASSWORD 'new_password';

// to change user in PostgreSQL
// ALTER USER user_name RENAME TO new_name;

// $dbHost= 'localhost';
// $dbName = 'php-pdo-test';
// $dbUser = 'postgres';
// $dbPassword = 'jelszo4321';
// $dsn = "pgsql:host=$dbHost;port=5432;dbname=$dbName;";  // dsn = Data Source Name

$dbHost= 'cornelius.db.elephantsql.com';
$dbName = 'fqdknxlm';
$dbUser = 'fqdknxlm';
$dbPassword = 'xJIyWXXPrY8thsXiInYuPDM20EIx8NJ9';
$dsn = "pgsql:host=$dbHost;port=5432;dbname=$dbName;";  // dsn = Data Source Name

$pdo = new PDO($dsn, $dbUser, $dbPassword, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// create the users table
$statement = "CREATE TABLE IF NOT EXISTS users (
	user_id SERIAL PRIMARY KEY,
	username VARCHAR(100) UNIQUE NOT NULL,
	email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
);";

$pdo->exec($statement);

// insert data into users table
$statement = "INSERT INTO users (username, email, password) VALUES 
('Reka', 'reka@mail.com', 'reka1234'),
('Andi', 'andi@mail.com', 'andi1234'),
('Feri', 'feri@mail.com', 'feri1234'),
('Tibi', 'tibi@mail.com', 'tibi1234')";

$pdo->exec($statement);

$result = $pdo->query("SELECT * FROM users");
// print_r($result);
// print_r($result->fetchAll());
// print_r($result->fetch());

while ($user = $result->fetch()) {
    echo "{$user['user_id']} \t {$user['username']} \t {$user['email']} \t {$user['password']}" . PHP_EOL;
}

$pdo = null;

?>