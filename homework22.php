<?php
//Задание 2
$taskCount = readline("Сколько задач запланировано на сегодня? ");
$taskQuestion = "Какая задача стоит перед вами сегодня? ";
$durationQuestion =  "Сколько примерно времени эта задача займет? ";
$tasks = "";
$duration = 0;

for($i = 0; $i< $taskCount;$i++){
    ${"task_$i"} = readline($taskQuestion);
    echo ${"task_$i"};
    ${"duration_$i"} = (int)readline($durationQuestion);
    echo ${"duration_$i"};
    $tasks .= "- ${"task_$i"} (${"duration_$i"}ч)\n";
    $duration = $duration + ${"duration_$i"};
    echo $allduration;
}

echo "Cегодня у вас запланировано $taskCount приоритетных задачи на день:
$tasks
Примерное время выполнения плана = {$duration}ч";

