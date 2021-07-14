<?php 
include "DB.php";

$id = $_POST['id'] ?? null;

if (!$id) {
    header('Location: ../index.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM todo_list WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: index.php");
?>