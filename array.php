<?php

$students=[
    "rahim",
    "kabir",
    "tanvir",
    "rasel",
];
///add value in an array in the last 
$students[]="rayhan";

//remove last value from the array...
$po=array_pop($students);
$po=array_pop($students);

// remvoe first value from the array
$si=array_shift($students);

//adding value in first of array value
$un=array_unshift($students,"23");

//adding value in the last of array
$pu=array_push($students,"nuru vai");

//replace value in an array by indexing
$in=$students[0]="khondakar";

$n= count($students);           //for loop use for print all of value from array  remember that it's very important
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
