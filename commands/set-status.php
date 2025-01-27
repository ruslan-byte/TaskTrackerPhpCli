<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function setStatusOnTask($taskId, TaskStatus $status)
{
    $taskList = getTaskList();
    foreach ($taskList as $task) {
        if ($task->id === (int)$taskId)
            $task->status = $status;
    }
    setTaskList($taskList);
}
