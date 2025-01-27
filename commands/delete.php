<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function deleteTaskById($id)
{
    $taskList = getTaskList();
    if (count(array_filter($taskList, fn($task) => $task->id === (int)$id)) === 0) {
        echo 'This task not found';
        return -1;
    }
    $taskList = array_filter($taskList, fn($task) => $task->id !== (int)$id);
    setTaskList($taskList);
    echo "Task deleted successfully";
}
