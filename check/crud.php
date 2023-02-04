<?php
$todoName = htmlspecialchars($_POST['todo']);
$todoName = trim($todoName);
$jsonArray = [];

//Если файл существует - получаем его содержимое
if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $jsonArray = json_decode($json, true);
}
// Делаем запись в файл
if ($todoName) {
    $jsonArray[] = $todoName;
    file_put_contents('todo.json', json_encode($jsonArray, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK));
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

// Удаление записи
$key = @$_POST['todo_name'];
if (isset($_POST['del'])) {
    unset($jsonArray[$key]);
    file_put_contents('todo.json', json_encode($jsonArray, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK));
    header('Location: ' . $_SERVER['HTTP_REFERER']);

}

// Редактирование
if (isset($_POST['save'])) {
    $jsonArray[$key] = @$_POST['title'];
    file_put_contents('todo.json', json_encode($jsonArray, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK));
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>