<?php
//Задание 1
$userAnswer = (int)readline("В каком году была создана ЧВК РЁДАН?\n Выберите один из трёх вариантов
 2022 2023 2021");
$drivers = PDO::getAvailableDrivers();
var_dump($drivers);


while ($userAnswer != 2021 || $userAnswer != 2022 || $userAnswer != 2023) {
    $userAnswer = (int)readline("В каком году была создана ЧВК РЁДАН?\n Выберите один из трёх вариантов
 2022 2023 2021");
    echo  $userAnswer;
}
/*
 * Я не понимаю,почему это не работает,сломал весь мозг.
вот примерно тоже самое на JS
let a = prompt()
    while (a != 10) {
      a = prompt();
      console.log(a);
    }
Смысл один и тот-же,только в JS все рабоатет,а тут нет,почему так? это из-за неточности самого языка?
Или я как-то не правильно логическое выражение оформил?
 */

if( $userAnswer == 2023) {
    echo "Поздравляю,верный ответ";
}elseif ($userAnswer == 2021 || $userAnswer == 2022) {
    echo "$userAnswer ответ отрицательный!";
}








