<?php
//Задание 2
$userName = readline("Введите ваше имя ");
$congratulation = ["счастья ","здоровья ","долгих лет жизни ","удачи ","чтобы шпага блестела ","деньги были "];
$rndcongrat = array_rand($congratulation,3);

echo "$userName ,желаем {$congratulation[$rndcongrat[0]]}
{$congratulation[$rndcongrat[1]]}
{$congratulation[$rndcongrat[2]]}";


