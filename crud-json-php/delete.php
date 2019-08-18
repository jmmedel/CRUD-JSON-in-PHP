<?php
// File json 
$file = "main.json";

// get file json
$mainjson = file_get_contents($file);

// decode
$data = json_decode($mainjson, true);

// loop to array
foreach ($data as $key => $d) {
    //get the id 
    if ($d['id'] === 2) {
        
        array_splice($data, $key, 1);
    }
}

// encode 
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// save
$anggota = file_put_contents($file, $jsonfile);
