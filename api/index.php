<?php
$database_path = __DIR__ . '/../data/tasks.json';

$json_data = file_get_contents($database_path);

$tasks = json_decode($json_data, true);

$new_task = $_POST['task'] ?? null;
if ($new_task) {
    $tasks[] = $new_task;

    $json_tasks = json_encode($tasks);
    file_put_contents($database_path, $json_tasks);

    header('Content-Type: application/json');
    echo $new_task;
} else {
    header('Content-Type: application/json');
    echo json_encode($tasks);
}
