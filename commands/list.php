<?php
require_once 'global/useTaskStore.php';
function getTaskListForShow()
{
    /** @var Task[] $taskList */
    $taskList = getTaskList();

    $mask = "|%5.5s |%-30.30s | %10s | %10s | %10s  |\n";
    printf($mask, 'id', 'description', 'createdAt', 'updatedAt', 'status');;
    foreach ($taskList as $task) {
        printf($mask, $task->id, $task->description, $task->createdAt, $task->updatedAt, $task->status->name);
    }
}
