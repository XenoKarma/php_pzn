<?php


// perulangan dengan kondisi 
$counter = 1;

for ( ; $counter <= 3; ) {
    echo "Ini adalah perulangan yang ke-$counter" . PHP_EOL;
    $counter++;
}

// Perulangan dengan Init Statement

for ( $counter = 1 ; $counter <= 3; ) {
    echo "Ini adalah perulangan yang ke-$counter" . PHP_EOL;
    $counter++;
}

// Perulangan dengan Post Statement
for ( $counter = 2 ; $counter >= 1; $counter-- ) {
    echo "Ini adalah perulangan yang ke-$counter" . PHP_EOL;
}

// Syntax Alternatif For Loop
for ($counter = 2 ; $counter <= 5; $counter++):
    echo "Ini adalah perulangan yang ke-$counter" . PHP_EOL;
endfor;