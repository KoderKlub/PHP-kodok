<?php

// file include and require - fájl bevétel/tartalmazás és bekérés

require "modules/file1.php";  // gives error when file not exists, stops execution
// require_once "modules/file1.php"; // does not requires when already required

require "modules/file2.php";

// include "modules/file2.php";  // gives warning when file not exists, continues execution
// include_once "modules/file2.php";  // does not includes when already included

// multiply(3, 2);
// add(5, 6);

// echo "Hello!";

echo $number;
