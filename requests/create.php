<?php
include "DB.php";
include_once "./partials/header.php";
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

	<div class="wrapper">
		<h2 class="title">Add a new task</h2>

		<!-- Error message display -->
		<?php if (!empty($error)) : ?>
			<div class="error">
				<?php echo $error; ?>
			</div>
		<?php endif; ?>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
			<div class="content">
				<div class="inputFields">
					<label for="task">Title:</label>

					<input type="text" name="task" placeholder="Title" />

					<label for="task">Description:</label>
					<textarea name="description" placeholder="Description" rows="5" cols="40"></textarea>

					<button type="submit" name="submit" class="btn">Save</button>
				</div>
			</div>

		</form>
		<a href="../index.php"><button class="btn">Go Back</button></a>
	</div>
</body>

</html>