<?php
include "DB.php";
include_once "../requests/partials/header.php";

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

    <!-- Error message display --- NOT WORKING		
        <?php if (!empty($error)) : ?>
			<div class="error">
				<?php echo $error; ?>
			</div>
		<?php endif; ?>
        -->

    <form action="" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="inputFields">
                <label for="task">Title:</label>

                <input type="text" name="task" value="<?php echo $task ?>" placeholder="Title" required />

                <label for="task">Description:</label>
                <textarea name="description" placeholder="Description" rows="5" cols="40"><?php echo $description ?></textarea>

                <button type="submit" name="submit" class="btn">Save</button>
            </div>
        </div>
        <form method="POST" action="./requests/delete.php">
            <input type="hidden" name="id" value="<?php echo $task['id'] ?>">
            <button type="submit" id="delete-btn" ; class="btn" disabled>
                Delete
            </button>
        </form>
    </form>
    <a href="../index.php"><button class="btn">Go Back</button></a>
</div>
</body>

</html>