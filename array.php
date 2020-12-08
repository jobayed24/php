<?php

////extrat some value of array also insert some value of array in previous array by array_splice

$fruits=['mango','banana','jakfruits','pinapple'];

$newfruits=['traito','applepi'];

$somefruits=array_splice($fruits,-3,-2,$newfruits);

print_r($somefruits);
print_r($fruits);