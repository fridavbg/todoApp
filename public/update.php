<?php
require_once "DB.php";
include_once "../views/partials/header.php";

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: ../index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM todo_list WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

$error = "";
$description = $task['description'];
$task = $task['task'];

if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $description = $_POST['description'];

    if (empty($task)) {
        $error = "Please enter a task title";
    } else {
        $statement = $pdo->prepare("UPDATE todo_list SET task = :task, description = :description WHERE id = :id");
        $statement->bindValue(':task', $task);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':id', $id);
        $statement->execute();

        header("Location: ../index.php");
    }
}
?>

<div class="wrapper">
    <h2 class="title">Edit task: <?php echo $task ?> </h2>
    <?php include_once "../views/forms/editForm.php" ?>
    <a href="../index.php"><button class="btn">Go Back</button></a>
</div>
</body>

</html>