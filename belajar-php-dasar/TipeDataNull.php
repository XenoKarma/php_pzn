<?php

$name = null;
$age = null;
$address = null;

echo "Perkenalkan nama saya $name, saya berumur $age tahun, dan alamat saya di $address \n";
// Output: Perkenalkan nama saya , saya berumur  tahun, dan alamat saya di
// null

//cek apakah variabel null
if (is_null($name)) {
    echo "Nama belum diisi \n";
} else {
    echo "Nama: $name \n";
}

if (is_null($age)) {
    echo "Umur belum diisi \n";
} else {
    echo "Umur: $age \n";
}

if (is_null($address)) {
    echo "Alamat belum diisi \n";
} else {
    echo "Alamat: $address \n";
}

// Output:
// Nama belum diisi
// Umur belum diisi
// Alamat belum diisi

$contoh = "andika";
unset($contoh); // menghapus variabel $contoh

echo "$contoh";

//lebi aman menggunakan isset
$contoh1 = "andika";
$contoh1 = null;

var_dump(isset($contoh1));
// Output: bool(false)
// isset akan mengembalikan false jika variabel belum didefinisikan atau bernilai null