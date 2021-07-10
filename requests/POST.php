<?php
include "DB.php";

/* $errors = [];

if (!$task) {
    $errors[] = 'Please provide a task';
} */


if($_SERVER['REQUEST_METHOD'] === 'POST') {

$task = $_POST['task'];
$description = $_POST['description'];
$date = date('Y-m-d H:i:s');


$statement = $pdo->prepare("INSERT INTO todo_list (task, description, status, created)
VALUES (:task, :description, :status, :date)
");
$statement->bindValue(':task', $task);
$statement->bindValue(':description', $description);
$statement->bindValue(':status', 0);
$statement->bindValue(':date', $date);
$statement->execute();
}

if (isset($_POST['submit'])) {
    {
        header("Location: ../index.php");
    }
}

?>