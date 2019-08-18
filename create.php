<?php

// Array 1 

$data [] = array(
    'id' => 1,
    'name' => "kagaya john",
    'post' => "Hello world"
);

// Array 2 
$data [] = array(
    'id' => 2,
    'name' => " john ",
    'post' => "Second Posts "
);

// Encode 
$jsonfile = json_encode($data,JSON_PRETTY_PRINT);


// save 
file_put_contents('main.json',$jsonfile);




