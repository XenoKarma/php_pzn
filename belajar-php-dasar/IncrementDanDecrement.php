<?php

$a = 10;

$b = ++$a; // pre-increment, $b = 11, $a = 11
var_dump($a); // 11

//mirip seperti :
$a = $a + 1;
$b = $a;

var_dump($a); // 11
var_dump($b); // 11
