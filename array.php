<?php


$fruit1=['p'=>'pineaple',"j"=>'jeckfruit','t'=>'tomato','l'=>'letu32s','a'=>'apple'];
$number2=[2,74,33,32,24,67,22,55,43,66];
$number3=[3,6,88,32,66,89];
$fruit2=['apple','Apple','cucumber','Cucumber','beat','Beat'];

////find same valu wihout key and wtih key find difference with key and without key
$numbers=array_intersect_assoc($number2,$number3);
print_r($numbers);

$fruits=array_diff($fruit1,$fruit2);

print_r($fruits);