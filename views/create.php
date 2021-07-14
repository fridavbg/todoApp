<?php
include "DB.php";
include_once "./partials/header.php";
$error = "";

if (isset($_POST['submit'])) {
	$task = $_POST['task'];
	$description = $_POST['description'];

	if (empty($task)) {
		$error = "Please enter a task title";
	} else {
		$statement = $pdo->prepare("INSERT INTO todo_list (task, description, status, created)
            VALUES (:task, :description, :status, :date)    
            ");
		$statement->bindValue(':task', $task);
		$statement->bindValue(':description', $description);
		$statement->bindValue(':status', 0);
		$statement->bindValue(':date', date('Y-m-d H:i:s'));
		$statement->execute();

		header("Location: ../index.php");
	}
}
?>

<div class="wrapper">
		<h2 class="title">Add a new task</h2>
		<?php include_once "../views/forms/addForm.php"; ?>
		<a href="../index.php"><button class="btn">Go Back</button></a>
	</div>
</body>

</html>