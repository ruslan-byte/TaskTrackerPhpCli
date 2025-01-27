<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function updateTask($taskId, $newDescription)
{

    if (!$newDescription) {
        echo 'Please set new description';
        return -1;
    }


    $taskList = getTaskList();

    if (count(array_filter($taskList, fn($task) => $task->id === (int)$taskId)) === 0) {
        echo 'This task not found';
        return -1;
    }

    foreach ($taskList as $task) {
        if ($task->id === (int)$taskId)
            $task->description =  $newDescription;
    }
    setTaskList($taskList);
}
