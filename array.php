<?php
$person;
if(isset($person)){
    echo "name is set";
}else{
    echo "name is empty";
}
echo "\n";
if(empty($person)){
    echo "name is empty";
}else{
    echo "name is\'t not empty";
}
echo "\n";
if(isset($person) && (is_numeric($person) || $person!='')){
    echo "name is set and it's not an empty";
}else{
    echo "name is not set or empty";
}