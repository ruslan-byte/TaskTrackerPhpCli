<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function setStatusOnTask($taskId, TaskStatus $status)
{
    $taskList = getTaskList();
    $old_status = '';
    $is_success = false;
    foreach ($taskList as $task) {

        if ($task->id === (int)$taskId) {
            $old_status = $task->status->name;
            $task->status = $status;
            echo "Status changed $old_status -> $status->name";
            global $is_success;
            $is_success = true;
        }
    }

    if (!$is_success) {
        echo 'This task not found';
    }

    setTaskList($taskList);
}
