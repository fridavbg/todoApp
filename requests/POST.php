<?php
include "DB.php";

$error = "";

if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $description = $_POST['description'];
    $date = date('Y-m-d H:i:s');

        if (empty($task)) {
            $error = "Please enter a task title";
        } else {
            $statement = $pdo->prepare("INSERT INTO todo_list (task, description, status, created)
            VALUES (:task, :description, :status, :date)    
            ");
            $statement->bindValue(':task', $task);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':status', 0);
            $statement->bindValue(':date', $date);
            $statement->execute();

                header("Location: ../index.php");
            }
}

?>