<?php
// Задание 2
$name = readline("Как вас зовут? ");
$age = (int)readLine("Сколько вам лет? ");

echo "Вас зовут $name, вам $age лет.\n";
// Задание 3
$task1 = readline("Какая задача стоит перед вами сегодня? ");
$taskDuration1 = (int)readLine("Сколько примерно времени эта задача займет? ");
$task2 = readline("Какая задача стоит перед вами сегодня? ");
$taskDuration2 = (int)readLine("Сколько примерно времени эта задача займет? ");
$task3 = readline("Какая задача стоит перед вами сегодня? ");
$taskDuration3 = (int)readLine("Сколько примерно времени эта задача займет? ");

$allDuration = $taskDuration1+$taskDuration2+$taskDuration3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ({$taskDuration1}ч)
- $task2 ({$taskDuration2}ч)
- $task3 ({$taskDuration3}ч)
Примерное время выполнения плана = {$allDuration}ч";
