<?php
require __DIR__ . '/../global/Task.php';
require __DIR__ .  '/../global/useTaskStore.php';

function addTask($taskContent = 'Новая задача')
{
    if ($taskContent) {
        $taskList = getTaskList();
        $newTask = new Task($taskContent);
        array_push($taskList, $newTask);
        setTaskList($taskList);

        return "Task added successfully (ID: $newTask->id)";
    } else {
        echo ('Set the task name!');
    }
}
