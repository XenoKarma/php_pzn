<?php

$nilai = 80;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat, anda lulus" . PHP_EOL;
}
// nah jika dijalankan kalau false tidak ada jawaban;
// sekarang masukan Else Statement
else {
    echo "Maaf, anda gagal!";
}

//ada juga Else if Statement
$uts = 90;
$uas = 80;

if ($uts >= 80 && $uas >= 80) {
    echo "Selamat Anda mendapatkan A". PHP_EOL;
} else if ($uts >= 70 && $uas >= 70) {
    echo "Selamat Anda mendapatkan B" . PHP_EOL;
}else if ($uts >= 60 && $uas >= 60) {
    echo "Selamat Anda mendapatkan C" . PHP_EOL;
}else {
    echo "Maaf, anda gagal dan nilai anda D" . PHP_EOL;
}

//if statement dengan Colon

if ($uts >= 80 && $uas >= 80) :
    echo "Selamat Anda mendapatkan A". PHP_EOL;
 elseif ($uts >= 70 && $uas >= 70) :
    echo "Selamat Anda mendapatkan B" . PHP_EOL;
elseif ($uts >= 60 && $uas >= 60) :
    echo "Selamat Anda mendapatkan C" . PHP_EOL;
else :
    echo "Maaf, anda gagal dan nilai anda D" . PHP_EOL;
endif;
