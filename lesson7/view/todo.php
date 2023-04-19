<h1>Ваш список задач</h1>
<a href="?action=logout">Выйти</a>
<?php
include "model/Task.php";
include "model/user.php";
include "model/Comment.php";

class taskService{
    public static function addComment(User $author,Task $task, $text){
        $task->setComment(new Comment($author,$task,$text));
    }
}

$user = new User('Алёша','alex@alex.ru');
$task = new Task($user,'задача',2);

taskService::oddComment($user,$task,'ержан,вставай');
taskService::oddComment($user,$task,'пора на работу!');

foreach ($task-getComments() as $comment){
    echo $comment->getText() . ", ";
    echo 'имя задачи '. $comment->getTask()->getDescription();
}

