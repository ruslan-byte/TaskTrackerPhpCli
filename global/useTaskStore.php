<?php
require_once __DIR__ . '/Task.php';
function getTaskList()
{
    $taskRes = [];

    $taskList = file_exists('task.json') ? (array) json_decode(file_get_contents('task.json')) :  [];
    if (count($taskList) > 0) {
        foreach ($taskList as $task) {
            $newTask = new Task('');
            $newTask->setTaskData($task->id, $task->description,  TaskStatus::from($task->status), $task->createdAt, $task->updatedAt);
            $taskRes[] = $newTask;
        }
    }

    return $taskRes;
}
function setTaskList($newTaskList)
{
    file_put_contents('task.json', json_encode($newTaskList));
}

function generateNewTaskId()
{
    $taskList = file_exists('task.json') ? (array) json_decode(file_get_contents('task.json')) :  [];
    if (count($taskList) > 0) {
        return $taskList[count($taskList) - 1]->id + 1;
    } else {
        return 1;
    }
}
