<?php

class taskService{
    public static function addComment(User $author,Task $task, $text){
        $task->setComment(new Comment($author,$task,$text));
    }
}
