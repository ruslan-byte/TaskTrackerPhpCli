<?php
enum TaskStatus: string
{
    case IN_PROGRESS = 'in-progress';
    case TODO = 'todo';
    case DONE = 'done';
}
class Task
{
    public $id;
    public $description;
    public TaskStatus $status;
    public $createdAt;
    public $updatedAt;

    public function __construct($description)
    {
        $this->id = 2;
        $this->description = $description;
        $this->status = TaskStatus::TODO;
        $this->createdAt = date('d.m.y');
        $this->updatedAt = date('d.m.y');
    }
}
