<?php
// File json 
$file = "main.json";

// get file json
$mainjson = file_get_contents($file);

// decode
$data = json_decode($mainjson, true);

// loop to json 
foreach ($data as $key => $d) {
    // get the id to update
    if ($d['id'] === 1) {
        $data[$key]['name'] = 'bucky';
    }
}

// encode 
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// save
$save = file_put_contents($file, $jsonfile);
