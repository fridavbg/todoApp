<?php
include "../requests/POST.php";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />

		<link rel="stylesheet" href="../css/style.css" />

		<title>To-Do List</title>
	</head>

	<body>
		<div class="wrapper">
			<h2 class="title">Add a new task</h2>
			<br>
			<!-- Error message display -->
			<?php if(!empty($error)): ?>
				<div class="error">
					<?php echo $error;?>
				</div>
			<?php endif; ?>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <div class="content">
				<div class="inputFields">
					<label for="task">Title:</label>
					
					<input type="text" name="task" placeholder="Title"/>

					<label for="task">Description:</label>
					<textarea
						name="description"
						placeholder="Description"
						rows="5"
						cols="40"
					></textarea>

        <button type="submit" name="submit" class="btn">Save</button>
                </div>
			</div>

        </form>
        <a href="../index.php"><button class="btn">Go Back</button></a>
        </div>
    </body>
</html>