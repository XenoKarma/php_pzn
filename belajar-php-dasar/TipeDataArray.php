<?php

$values = array(1, 2, 3, 4, 5);
var_dump($values);

$names = ["andika", "purnama", "hehehe"];
var_dump($names);


var_dump($names[0]); // akses elemen pertama

$names[0] = "budi"; // ubah elemen pertama
var_dump($names[0]); // akses elemen pertama setelah diubah

unset($names[1]); // hapus elemen kedua
var_dump($names); // tampilkan array setelah elemen kedua dihapus

$names[] = "caca"; // tambahkan elemen baru
var_dump($names); // tampilkan array setelah elemen baru ditambahkan

var_dump(count($names)); // hitung jumlah elemen dalam array
//hasilnya 3, karena elemen kedua dihapus


//kode pembuatan map
$andika = array(
    "id" => "andika",
    "name" => "purnama",
    "age" => 22
);

var_dump($andika);
var_dump($andika["id"]); // akses elemen dengan key "id"


//contoh array didalam array
$eko = array(
    "id" => "eko",
    "name" => "kurniawan",
    "age" => 22,
    "address" => array(
        "city" => "bandung",
        "country" => "indonesia"
    )
);

var_dump($eko);
var_dump($eko["name"]); // akses elemen dengan key "id"
var_dump($eko["address"]["city"]); // akses elemen dalam array
