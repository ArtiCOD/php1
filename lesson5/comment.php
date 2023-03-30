<?php

class Comment{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(User $author,Task $task, $text){
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getTask(){
        return $this->task;
    }

    public function getText(){
        return $this->text;
    }
}