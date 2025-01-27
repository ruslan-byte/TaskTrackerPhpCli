<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function getTaskListForShow($status)
{
    /** @var Task[] $taskList */
    $taskList = getTaskList();
    if ($status)
        $taskList = array_filter($taskList, fn($task) => $task->status === TaskStatus::from($status));

    $mask = "|%5.5s |%-30.30s | %10s | %10s | %10s  |\n";
    printf($mask, 'id', 'description', 'createdAt', 'updatedAt', 'status');
    foreach ($taskList as $task) {
        printf($mask, $task->id, $task->description, $task->createdAt, $task->updatedAt, $task->status->name);
    }
}
