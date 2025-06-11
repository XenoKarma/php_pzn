<?php

$counter = 1;
while ( $counter <= 10) {
    echo "Ini perulangan for while yang ke-$counter" . PHP_EOL ;
    $counter++;
}

// Kode : Syntax Alternatif While Loop

$counter = 1;
while ( $counter <= 10) :
    echo "Ini perulangan for while yang ke-$counter" . PHP_EOL ;
    $counter++;
endwhile;

// next Do While Loop