<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';
function deleteTaskById($id)
{
    $taskList = getTaskList();
    $taskList = array_filter($taskList, fn($task) => $task->id !== (int)$id);
    setTaskList($taskList);
}
