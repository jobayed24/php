<?php
$data=[
    "fname"=>"jobayed",
    "lname"=>"hossen",
    "section"=>"B",
    "roll"=>"22"
];

$serialize=serialize($data);   ///use serialze functions to save array data anywhere but it's useablitly isn't like json encode 

$unserialize=unserialize($serialize);
print_r($unserialize);

$en=json_encode($data);         ///use json encode and decode for save data an array of php but need always json for it's two useabilit....i can use this valu in php also i can JS
$de=json_decode($en,true);

print_r($de);