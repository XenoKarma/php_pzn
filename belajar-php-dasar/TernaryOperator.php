<?php

$gender = "PRIA";
$hai = null;


// yang biasa
if ($gender == "PRIA") {
    $hai = "HAI BRO";
}else {
    $hai = "HAI NONA";
}

echo $hai . PHP_EOL;


//ternary operator
$hai = $gender == "PRIA" ? "Hi Bro!" : "Hi Nona!";
echo $hai . PHP_EOL;

//lebih simple, simply lovely huh
//next belajar Null Coalescing Operator! 2:45:00