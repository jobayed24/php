<?php
$fruits=['p'=>'pineaple',"j"=>'jeckfruit','t'=>'tomato','l'=>'letu32s','a'=>'apple'];
$numbers=[2,74,33,32,24,67,22,55,43,66];
$alphabaets=['apple','Apple','cucumber','Cucumber','beat','Beat'];

sort($alphabaets,SORT_STRING | SORT_FLAG_CASE);

print_r($alphabaets);

krsort($fruits);      ///sorting by sort /ksort/foreah for orginnial key reminder...

print_r($fruits);

$array_values=array_values($fruits);

for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i]."\n";
}
for($i=0; $i<count($array_values); $i++){
    echo $array_values[$i]."\n";
}

echo "\n";
foreach($fruits as $key=>$value){
    echo $key.'='.$value."\n";
}