<?php

$nilai = "E";

if ($nilai == "A") {
    echo "Selamat, anda lulus dengan sangat baik!" . PHP_EOL;
}else if ($nilai == "B") {
    echo "Selamat, anda lulus!" . PHP_EOL;
}else if ($nilai == "C") {
    echo "Selamat, anda lulus!" . PHP_EOL;
}else if ($nilai == "D") {
    echo "Maaf, anda gagal!" . PHP_EOL;
}else {
    echo "Mungkin anda salah jurusan!";
}

//gunakan switch: 

switch($nilai) {
    case "A":
        echo "Selamat, anda lulus dengan sangat baik!" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat, anda lulus!" . PHP_EOL;
        break;
    case "D":
        echo "Maaf, anda gagal!" . PHP_EOL;
        break;
    default:
        echo "Sepertinya anda salah jurusan!" . PHP_EOL;
}

//switch statement syntax alternatif

switch($nilai) :
    case "A":
        echo "Selamat, anda lulus dengan sangat baik!" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat, anda lulus!" . PHP_EOL;
        break;
    case "D":
        echo "Maaf, anda gagal!" . PHP_EOL;
        break;
    default:
        echo "Sepertinya anda salah jurusan!" . PHP_EOL;
endswitch;

