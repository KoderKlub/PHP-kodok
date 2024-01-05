<?php

session_start();

// Cookies and Sessions ($_COOKIE and $_SESSION superglobals)

// GDPR - General Data Protection Regulation

// setcookie("veznev", "Horvath", time() + 3600);
// setcookie("kernev", "Anita", time() + 3600);

setcookie("veznev", "Horvath", time() - 3600);
setcookie("kernev", "Anita", time() - 3600);

// Set session variables
$_SESSION["kedvenc_szin"] = "zöld";
$_SESSION["kedvenc_allat"] = "kutya";


// remove all session variables
session_unset();

// destroy the session
session_destroy();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_COOKIE["veznev"]) && isset($_COOKIE["kernev"])) {
            echo $_COOKIE["veznev"] . "<br>";
            echo $_COOKIE["kernev"] . "<br>";
        }

        if (isset($_SESSION["kedvenc_szin"])){
            echo $_SESSION["kedvenc_szin"] . "<br>";
        }
    ?>
</body>
</html>