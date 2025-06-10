<?php

$nama = "Andika Purnama";
$umur = 22;

echo "Perkenalkan nama saya adalah " . $nama . PHP_EOL . "umur saya " . $umur . " tahun" . PHP_EOL;


//Konversi ke number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);


//mengakses karakter
$tesDoang = "Andika";

echo $tesDoang[0] . PHP_EOL; 
echo $tesDoang[1] . PHP_EOL; 
echo $tesDoang[3] . PHP_EOL; 
echo $tesDoang[4] . PHP_EOL; 
echo $tesDoang[5] . PHP_EOL; 

//Variabel Parsing
$name = "Andika";
echo "Hello $name, Selamat Belajar!" . PHP_EOL;

//Kode: Curly Brace
$var = "var";
echo "This is {$var}s" . PHP_EOL;
