<?php

//findout some value from an plain array by array slic

$data=['tanvir','rasel','shakawat','nuru vai','khondakar'];

$dataslic=array_slice($data,-3,-1,true);

print_r($dataslic);

//findout or extrat some value from an associative array by array slic

$dataSlic=['a'=>23,'v'=>34,'g'=>55,'h'=>35,'t'=>45,23=>45];     ///when array keys have numeric key if want to carry the index of associative keys then must use true in an array slic

$dataslic=array_slice($dataSlic,3,null,true);

print_r($dataslic);