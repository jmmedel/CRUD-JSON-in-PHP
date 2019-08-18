<?php


// file json
$file = "main.json";

// get_file json
$mainjson = file_get_contents($file);

//decode 
$data = json_decode($mainjson,true);


//loop to json using foreach
foreach($data as $key => $d){

      //get the id to update 
      if($d['id'] === 1 ){
          $data[$key]['name'] = "bucky  the new boston";
      }

}
   
//encode
$jsonfile = json_encode($data,JSON_PRETTY_PRINT);


//save
file_put_contents($file,$jsonfile);