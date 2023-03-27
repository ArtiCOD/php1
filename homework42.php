<?php
// Задание 2
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
function foo(array $arg)
{
    $answer = ['Максимальное значение' => max($arg),
        'Минимальное значение' => min($arg),
        'Среднее значение' => round( array_sum($arg) / count($arg))
    ];
    print_r($answer);
}

foo($arr);




