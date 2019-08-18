<?php
// File json 
$file = "main.json";

//  get file json
$mainjson = file_get_contents($file);

// decode
$data = json_decode($mainjson, true);

// array
$data [] = array(
    'id'     => 3,
    'name'   => 'john',
    'post' => 'post3'
);

// encode
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// save
$save = file_put_contents($file, $jsonfile);
