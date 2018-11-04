<?php

class Task {
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

}

$task = new Task('Go to the store', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda commodi dolorem fuga fugit laboriosam laudantium mollitia obcaecati omnis, veniam! Aliquam beatae culpa fugit ipsum iste nobis quis rem vel.');

$task->complete();

var_dump($task->title, $task->description, $task->completed);