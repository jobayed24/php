<?php
$name="jobayed, tanvir, shakawat, nuravai";      ///convert string to array and array to string 
$ex=explode(', ',$name);
print_r($ex);

$jo=join(", ",$ex);
echo $jo;


$vergin="vargin2, vargin3, vargin4, vargin5,vargin6,vargin7";  ///preg slit used for detect mutiple delimeter

$pre=preg_split("/(, |,)/",$vergin);

print_r($pre);
echo count($pre);