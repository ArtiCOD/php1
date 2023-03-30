<?php
class Task{
    private string $discription;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private  Array $comments = [];

    public function __construct(User $user,string $discription = '',int $priority = 1){
        $this->user = $user;
        $this->discription = $discription;
        $this->priority = $priority;
        $this->setDateCreated(new DateTime());
    }

    public function markAsDone(){
        $this->setDataUpdated(new DateTime());
        $this->setDateDone(new DateTime());
        $this->setIsDone();
    }

    public function getDescription(){
        return $this->discription;
    }

    public function getDateCreated(){
        return $this->dateCreated;
    }

    public function getDataUpdate(){
        return $this->dateUpdated;
    }

    public function getDateDone(){
        return $this->dateDone;
    }

    public function getPriority(){
        return $this->priority;
    }

    public function isDone(){
        return $this->isDone;
    }

    public function getUser(){
        return $this->user;
    }

    public function getComments(){
        return$this->comments;
    }

    public function setDescription(string $description){
        $this->setDateUpdated(new DateTime());
        $this->descripton = $description;
    }

    public function setDateCreated(DateTime $dateCreated){
        $this->dateCreated = $dateCreated
    }

    public function setDateUpdated(DateTime $dateUpdated){
        $this->dateUpdated = $dateUpdated;
    }

    public function setDateDone(DateTime $dataDone){
        $this->dateDone = $dataDone;
    }

    public function setPriority(int $priority){
        $this->priority = $priority;
    }

    private function setIsDone(){
        $this->isDone = true;
    }

    public function setUser(User $user){
        $this->user = $user;
    }

    public function getComment(Comment $comment){
        $this->comments[] = $comment;
    }

}