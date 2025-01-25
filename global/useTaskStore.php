<?php
function getTaskList()
{
    $taskList = file_exists('task.json') ? (array) json_decode(file_get_contents('task.json')) :  [];
    return $taskList;
}
function setTaskList($newTaskList)
{
    file_put_contents('task.json', json_encode($newTaskList));
}
