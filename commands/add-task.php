<?php
require_once __DIR__ . '/../global/Task.php';
require_once __DIR__ .  '/../global/useTaskStore.php';

function addTask($taskContent = 'Новая задача')
{
    if ($taskContent) {
        $taskList = getTaskList();
        $newTask = new Task($taskContent);
        array_push($taskList, $newTask);
        setTaskList($taskList);

        echo "Task added successfully (ID: $newTask->id)";
    } else {
        echo ('Set the task name!');
    }
}
