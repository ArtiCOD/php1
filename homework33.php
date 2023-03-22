<?php
//Задание 3
$userName = readline("Введите ваше имя ");
$congratulation = ["счастья ","здоровья ", "долгих лет жизни ","удачи ",
    "чтобы шпага блестела ", "деньги были "];
$epithets = ["бесконечного ", "крепкого", "от всего сердца","бомбического"];

$rndcongrat = array_rand($congratulation,3);
$rndepith = array_rand($epithets,3);
$arraycongrat = [$epithets[$rndepith[0]] , $congratulation[$rndcongrat[0]], $epithets[$rndepith[1]] ,
    $congratulation[$rndcongrat[1]] , $epithets[$rndepith[2]], $congratulation[$rndcongrat[2]]];
echo  "Дорогой, $userName, от всего сердца поздравляю тебя с днем рождения, желаю ";
echo implode(' ',$arraycongrat);
// Так и не понял почему array_rand возвращает индексы,в примерах на сайте метанит он возвращал значения,а в
//документации индексы. Есть ли возможность избежать эти костыли и сразу создать массив со значениями?