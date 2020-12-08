<?php
$person=['fname'=>'jobayed','lanme'=>'khondakar'];

//dep copy ,copy by value

$newperson=$person;

$newperson['fname']='rasel';

print_r($newperson);

print_r($person);

//copy by reference or shallow copy

$person2=&$person;

$person2['fname']='nuru vai';

print_r($person2);

print_r($person);


function newPerson($person){   ///shawllow copy deep copy by a function
    $person['fname']='ruddra';
    print_r($person);
} 

newPerson($person);

print_r($person);