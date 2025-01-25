<?php
require './commands/add-task.php';
require './commands/list.php';
match ($argv[1] ?? null) {
    'add' => addTask(taskContent: $argv[2] ?? null),
    'list' => getTaskListForShow(),
    default => 'Неизвестная команда',
};
