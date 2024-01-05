<?php

// néhány példa beépített (globális) függvényekre

$a = 5;
// $a = "";
// $a = [];
// $a = null;
// $a = 0;
// $a = false;


// isset and empty functions
// var_dump(isset($a));  // cheks if a variable exists, and is not null
// var_dump(empty($a));  // cheks if a variable is not set, or contains an empty-like value (üres-szerű érték)



$welcome_text = "Hello, az en nevem Attila!";

// converts string to array
// $str_to_array = explode(" ", $welcome_text);
// print_r($str_to_array);


// converts array to string
// $array_to_str = implode("-", $str_to_array);
// print_r($array_to_str);


// retuns how many characters are in the string
// echo strlen($welcome_text);


// retuns how many values are in the array
// echo count([118, 422, 73, 14]);


$names_ages = [
    "Andi" => 32,
    "Ildi" => 18,
    "Zsani" => 44,
    "Viola" => 32
];

$array_to_json_str = json_encode($names_ages);
// echo $array_to_json_str;
// echo gettype($array_to_json_str);

$json_str_to_array = json_decode($array_to_json_str, associative: true);
// echo gettype($json_str_to_array);
print_r($json_str_to_array);