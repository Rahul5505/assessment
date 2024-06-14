<?php 
// json_encode() : is a function or method i.e used to encode an array   data in json_formate
  // $arr=array("1"=>"Computer","2"=>"Electronics","3"=>"Electrical","4"=>"Civil","5"=>"Mechanical","6"=>"Architcture");
//    print_r($arr);


$arr='{"1":"Computer","2":"Electronics","3":"Electrical","4":"Civil","5":"Mechanical","6":"Architcture"}';
print_r(json_decode($arr));
?>