<?php


//array value print where you can start?

$number=array();

for($i=22; $i<=30; $i++){
$push=array_push($number,$i);
}
print_r($number);
print_r($push);

$number=range(21,30,2);
print_r($number);