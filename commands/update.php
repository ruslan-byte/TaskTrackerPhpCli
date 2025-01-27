<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function updateTask($taskId, $newDescription)
{
    $taskList = getTaskList();
    foreach ($taskList as $task) {
        if ($task->id === (int)$taskId)
            $task->description =  $newDescription;
    }
    setTaskList($taskList);
}
