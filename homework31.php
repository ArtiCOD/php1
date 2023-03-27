<?php
//Задание 1
$array1 = [1,2,3,4,5,6,7,8,9,10];
$array2 = [2,2,2,2,2,2,2,2,2,2];
foreach ($array1 as $value){
    $count = 0;
   $value = $value * $array2[$count];
   $count++;
    print_r($value);
}
