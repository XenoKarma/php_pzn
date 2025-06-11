<?php

//tampa null
$data = [
    "action" => "Create"
];

if ( isset($data["action"])){
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// Kode null
$data [];
$action = $data['action'] ?? 'nothing';

echo $action;
// github
// sekarang tes