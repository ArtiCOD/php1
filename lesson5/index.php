<?php
//test
include "task.php";
include "user.php";
include "comment.php";
include "taskService.php";

$user = new User('Алёша','alex@alex.ru');
$task = new Task($user,'задача',2);

taskService::oddComment($user,$task,'ержан,вставай');
taskService::oddComment($user,$task,'пора на работу!');

foreach ($task-getComments() as $comment){
    echo $comment->getText() . ", ";
    echo 'имя задачи '. $comment->getTask()->getDescription();
}
