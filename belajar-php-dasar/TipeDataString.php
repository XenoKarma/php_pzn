<?php

echo "Tipe Data String";

//Singgle quotes
echo "nama : ";
echo "Andika Purnama";


//Double quotes
echo "nama : ";
echo "Andika Purnama";
echo "\n";//ini adalah karakter newline atau bisa dibilang tombol enter

//Double quotes
echo 'Nama :';
echo "Nama\t :Andika Purnama\t hehehe\t";

//Heredoc
echo <<<DIKA

selamat belajar php, sekarang kita belajar tipe data string
ini adalah cara penulisan string dengan heredoc
kacau           yee         heheheh

DIKA;


//Nowdoc
echo <<<'DIKA'
selamat belajar php, sekarang kita belajar tipe data string
ini adalah cara penulisan string dengan nowdoc
kacau           yee         heheheh
DIKA;
//Hasilnya sama dengan heredoc, hanya saja pada nowdoc, kita tidak bisa menggunakan variable didalamnya
//jadi, jika kita ingin menampilkan string dengan variable, gunakan heredoc
