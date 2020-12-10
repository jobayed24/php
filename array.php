<?php


$fruit1=['p'=>'pineaple',"j"=>'jeckfruit','t'=>'tomato','l'=>'letu32s','a'=>'apple'];
$number2=[2,74,33,32,24,67,22,55,43,66];
$number3=[2,3,4,5];
$fruit2=['apple','Apple','cucumber','Cucumber','beat','Beat'];

//assign array value as a variable 
list($prothom,$second,$third,$fourth)=$number3;

echo $prothom; 

function sum($oldvalue,$newvalue){
    $oldvalue=$oldvalue+$newvalue;
    return $oldvalue;
}

$sum2 =array_reduce(array(2),"sum");

print_r($sum2);
echo "\n"; 
$co=count($number3);
echo $co;
