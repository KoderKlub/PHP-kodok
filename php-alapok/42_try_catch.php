<?php

// Error handling / Exception handling - Hibakezelés / Kivételkezelés

$databaseHost = '127.0.0.1';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'adatbazis2';


try {
    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
}
catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
    throw new Exception("Sikertelen csatlakozás az adatbázishoz!");
}
finally {
    echo "Ez itt mindenképp végrehajtódik." . PHP_EOL;
}



$result = mysqli_query($conn, "SELECT * FROM users");

while ($user = mysqli_fetch_array($result)) {
    echo "{$user['user_id']} \t {$user['username']} \t {$user['email']} \t {$user['password']}" . PHP_EOL;
}


// Closing the connection
mysqli_close($conn);
