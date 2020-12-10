<?php


$fruit1=['p'=>'pineaple',"j"=>'jeckfruit','t'=>'tomato','l'=>'letu32s','a'=>'apple'];
$number2=[2,74,33,32,24,67,22,55,43,66];
$number3=[2,3,4,5];
$fruit2=['apple','Apple','cucumber','Cucumber','beat','Beat'];


$number=range(22,40);

$rnd=rand(0,18);

$pickrand=$number[$rnd];
echo $pickrand;
echo "\n";
if($pickrand % 2==0){
    echo "this number  is even";
}else{
    echo "this number is odd";
}
shuffle($number);
echo $number[0]; 
