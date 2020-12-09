<?php
///seach key or value in array by using array_search,,,in_array,,,array_exit

$fruits=['p'=>'pineaple',"j"=>'jeckfruit','t'=>'tomato','l'=>'letu32s','a'=>'apple'];
$numbers=[2,74,33,32,24,67,22,55,43,66];
$alphabaets=['apple','Apple','cucumber','Cucumber','beat','Beat'];

//// in index array if value is twice or thrice or more it print first value index .....
if(in_array(2,$numbers)){
    echo "this number is exit" ;
}else{
    echo "this number is not exit";
}
echo "\n";
$exit=array_search(33,$numbers);
echo $exit;

echo "\n";

if(key_exists("p",$fruits)){
    echo "key is exit";
}