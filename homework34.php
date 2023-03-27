<?php
//Задание 4
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 5,
        'Петр Петров' => 4,
        'Артем Артемов'=> 5,
        'Евгений Евгеньев'=> 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Василий Васильев' => 4,
        'Антон Антонов' => 2,
        'Елена Еленова' => 3,
        'Анна Анновна' => 2
        ]
];

$deduction = [];
$bestgroup = 0;
$groupename = '';

foreach ($students as $index => $value) {
    $score = 0;
    $count = 0;
    array_push($deduction,$index);
    foreach ($value as $ind => $key) {
        if ($key < 3) {
            array_push($deduction, $ind);
        }
        $score = $score + $key;
        $count++;
    }
        if($bestgroup < ($score / $count)) {
            $bestgroup = $score/$count;
            $groupename = $index;
        }
}

print_r("Лучший средний балл $bestgroup у группы $groupename
На отчисление ".implode(' ', $deduction));








