<?php

// Superglobals

// print_r($_GET);
// print_r($_POST);

// GET request
// http://localhost:3000/37_get_and_post.php?veznev=Kovacs&kernev=Ildiko

// POST request
// http://localhost:3000/37_get_and_post.php

// if (isset($_GET["veznev"]) and isset($_GET["kernev"])) {
//     echo "<h3>Köszönjük jelentkezését {$_GET['veznev']} {$_GET['kernev']}.</h3>";
// }else{
//     echo "<p>Kérem adja meg a teljes nevét!</p>";
// }

if (isset($_POST["veznev"]) and isset($_POST["kernev"])) {
    echo "<h3>Köszönjük jelentkezését {$_POST['veznev']} {$_POST['kernev']}.</h3>";
}else{
    echo "<p>Kérem adja meg a teljes nevét!</p>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for="veznev">Vezetéknév</label>
    <input type="text" name="veznev">

    <label for="kernev">Keresztnév</label>
    <input type="text" name="kernev">

    <button>Küldés</button>

</form>
    
</body>
</html>