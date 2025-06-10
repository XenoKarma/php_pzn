<?php

// $a + $b = Union = Menggabungkan dua array

//$a == $b = Equality = Mengecek apakah dua array memiliki nilai yang sama

// $a === $b = Identity = Mengecek apakah dua array memiliki nilai yang sama dan tipe data yang sama

// $a != $b = Inequality = Mengecek apakah dua array tidak memiliki nilai yang sama

// $a <> $b = Inequality = Mengecek apakah dua array tidak memiliki nilai yang sama

// $a !== $b = Non-identity = Mengecek apakah dua array tidak memiliki nilai yang sama atau tipe data yang berbeda

// mari coba

// Operator (1)
$first = [
    "first_name" => "andika"
];

$last = [
    "first_name" => "andika",
    "last_name" => "purnama"
];

$full = $first + $last; // Union, menggabungkan dua array
var_dump($full); // Union, menggabungkan dua array

// Operator (2)
$a = [
    "first_name" => "andika",
    "last_name" => "purnama"
];

$b = [
    "last_name" => "purnama",
    "first_name" => "andika"
];

var_dump($a == $b);