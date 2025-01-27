<?php
require './commands/add-task.php';
require './commands/list.php';
require './commands/update.php';
require './commands/delete.php';
require './commands/set-status.php';
match ($argv[1] ?? null) {
    'add' => addTask(taskContent: $argv[2] ?? null),
    'list' => getTaskListForShow($argv[2] ?? null),
    'update' => updateTask($argv[2] ?? null, $argv[3] ?? null),
    'delete' => deleteTaskById($argv[2] ?? null),
    'mark-in-progress' => setStatusOnTask($argv[2] ?? null, TaskStatus::IN_PROGRESS),
    'mark-done' => setStatusOnTask($argv[2] ?? null, TaskStatus::DONE),
    'mark-todo' => setStatusOnTask($argv[2] ?? null, TaskStatus::TODO),
    default => 'Unknown team',
};
