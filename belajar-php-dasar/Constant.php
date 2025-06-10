<?php

define("AUTHOR", "Andika Purnama");
define("APP_VERSION", 100);

echo "Author: " . AUTHOR . "\n";
echo "App Version: " . APP_VERSION . "\n";
// APP_VERSION = 200; // ini akan error karena constant tidak bisa diubah
// define("APP_VERSION", 200); // ini juga akan error karena constant tidak bisa didefinisikan ulang
