<?php

// File json 

$file = "main.json";

//ge contents
$mainjson = file_get_contents($file);


//decode 

$data = json_decode($mainjson,true);

// make array 

$data [] = array (
    'id' => 3,
    'name' => 'john',
    'post' => 'posts3'
);

//encode
$jsonfile = json_encode($data,JSON_PRETTY_PRINT);

//save
$save = file_put_contents($file,$jsonfile);
