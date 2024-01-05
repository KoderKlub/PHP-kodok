<?php

$lucky_number = 456;
const PI = 3.1415926;
$name = "Kovács Piroska";

function addTitle(){
    echo "My super website!";
}


// Heredoc string
function addNav(){
    $nav = <<<NAV
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
    NAV;
    echo $nav;
}

function addContent(){
    $content = <<<CONT
    <div>
        <h1>Welcome on my website!</h1>

        <h3>Here is quote from Bruce Lee:</h3>
        <p>I fear not the man who has practiced 10000 kick once, but I fear the man who has practiced one kick 10000 times.</p>
    </div>
    CONT;
    echo $content;
}

function test_return(){
    return "Returned from the test_return function.";
}

function addFooter(){
    global $name;
    $footer = <<<FOOT
    <footer>
        <p>Author: $name</p>
        <p><a href="mailto:piroska@example.com">piroska@example.com</a></p>
    </footer>
    FOOT;
    echo $footer;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php addTitle() ?></title>
</head>
<body>
    
    <?php addNav() ?>
    <?php addContent() ?>

    <h4>Some additional information!</h4>
    <p>My lucky number is: <?= $lucky_number ?></p>
    <p>The value of PI is: <?= PI ?></p>

    <?php $szoveg = test_return() ?>
    <?= strtoupper($szoveg) ?>

    <?php addFooter() ?>

</body>
</html>

