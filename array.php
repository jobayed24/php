<?php

////extrat some value of array also insert some value of array in previous array by array_splice


///basically use array merge for adding extract two array's values in one array 
///but + isn't now perfect for same plain index of array

///important

///if it will associative array and it's keys is numerice than if you want to print it your should use 
////array slice and also array + || merge and if you want to add some valus you use array_splice for that

$fruits=['mango','banana','jakfruits','pinapple'];

$fruits2=['torando','jakndo','makndo','jainfruit'];

$fruit4=array_slice($fruits,-3,2,true);
$fruit5=array_slice($fruits2,-3,2,true);
print_r($fruit4);
print_r($fruit5);
$newfruits=array_merge($fruit4,$fruit5);

print_r($newfruits);
$enter_new_fruit=['jk','khandakar'];
$newsplic=array_splice($fruits2,-3,2,$enter_new_fruit);

print_r($newsplic);
$arraymerg=array_merge($fruit4,$fruit5);
print_r($arraymerg);

$newentry=$fruit4+$fruit5;
print_r($newentry);