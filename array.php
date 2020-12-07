<?php
$foods=[
    "22"=>"tanvir",
    "23"=>"rasel",
    "tainaki"=>"assa ai obosta",
];
//addin valu in the last of associative array

$foods["tainaki"].=", oassa" ;
$foods['tainaki']=$foods['tainaki'].", khondakr";
print_r($foods);
foreach($foods as $food){  /// for print associative array values  in php use foreach
    echo $food."\n";
}

foreach($foods as $key=>$valu){  /// for print associative array in php use foreach
    echo $key."=>".$valu."\n";
}

$keys=array_keys($foods);    //use keyes for print values.....

$n=count($keys);
for($i=0;$i<$n; $i++){
    $key=$keys[$i];
    echo $foods[$key]."\n";
}