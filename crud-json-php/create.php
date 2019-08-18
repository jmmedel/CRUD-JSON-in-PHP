<?php
// This is create methods 
// Data 1
$data [] = array(
    'id'     => 1,
    'name'   => 'kagaya',
    'post' => 'Hello World '
);

// Data 2
$data [] = array(
    'id'     => 2,
    'name'   => 'john',
    'post' => 'Post 2 '
);

// encode
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// save 
file_put_contents('main.json', $jsonfile);
