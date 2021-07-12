<?php
include "./requests/get.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />

    <title>To-Do List</title>
</head>

<body>
    <div class="wrapper">
        <h2 class="title">To do list</h2>
        <a href="./requests/create.php" class="btn"><button>Add new task</button></a>
        <div class="content">


            <hr>
            <?php
            foreach ($tasks as $i => $task) { ?>

                <!-- ERROR DISPLAY
            <?php if (!empty($tasks)) : ?>
				<div class="error">
					<?php echo "No tasks to show"; ?>
				</div>
			<?php endif; ?> 
             -->
                <div id="task-display">
                    <input type="checkbox" id="status" value="<?php $task['status'] ?>" />
                    <p id="created">Created: <?php echo $task['created'] ?></p>
                    <p id="task-title"><?php echo $task['task'] ?></p>
                    <br />
                    <p id="description">
                        <?php echo $task['description'] ?>
                    </p>
                    <a href="./requests/update.php?id=<?php echo $task['id'] ?>" id="edit-btn" class="btn">
                        <button>Edit</button>
                    </a>
                    </form>
                    <form method="POST" action="./requests/delete.php">
                        <input type="hidden" name="id" value="<?php echo $task['id'] ?>
                    ">
                        <button type="submit" id="delete-btn" ; class="btn">
                            Delete
                        </button>
                    </form>    
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>