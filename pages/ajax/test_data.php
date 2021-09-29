<?php 
$newObj = '[
    {
      "user": {
        "name": "kantapat",
        "age": "50"
      }
    },
    {
      "user": {
        "name": "Tanapong",
        "age": "40"
      }
    }
  ]';

$data = json_decode($newObj,true);

echo $newObj;
// $myObj = array(
//   array("name" => "Kantapat","score" => 32,"grade" => 13),
//   array("name" => "Tanapong","score" => 32,"grade" => 12)
// );
//  $out = array_values($myObj);

// $myJSON = json_encode($obj);


// echo "hello world!";

?>