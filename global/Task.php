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
        $this->setTaskData(2, $description, TaskStatus::TODO, date('d.m.y'), date('d.m.y'));
    }
    public function setTaskData($id, $description, TaskStatus $status, $createdAt, $updatedAt)
    {
        $this->id = $id;
        $this->description = $description;
        $this->status = $status;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }
}
