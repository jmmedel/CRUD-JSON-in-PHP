<?php
// File json 
$file = "main.json";

// get file json
$mainjson = file_get_contents($file);

// decode 
$data = json_decode($mainjson, true);

// foreach to echo all the data
foreach ($data as $d) {
    echo $d['id']. "<br>";
    echo $d['name']. "<br>";
    echo $d['post']. "<br>";
}
