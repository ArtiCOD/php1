<?php
//Задание 1
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
function foo($arg){
    if ($arg & 1) {
        return $arg . ' Не четное ';
    } else {
        return $arg . ' Четное ';
    }
}

function quest1($arg){
    if ($arg & 0) {
        return $arg . ' Четное ';
    } elseif($arg & 1) {
        return $arg . ' Не четное ';
    }
}

 print_r(array_map('foo',$arr));




