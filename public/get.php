
<?php

require_once "DB.php";

// GET - Get All tasks
$statement = $pdo->prepare('SELECT * FROM todo_list ORDER BY created DESC');
$statement->execute();
// Fetch all tasks as an assoc array
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
?>