<?php

$students=[
    "rahim",
    "kabir",
    "tanvir",
    "rasel",
];

$n= count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}
echo " "."\n";
for($i=$n-1;$i>=0;$i--){
    echo $students[$i]."\n";
}
