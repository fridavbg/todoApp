<?php
include_once "./views/partials/header.php";
include "./views/get.php";
?>

    <div class="wrapper">
        <h2 class="title">To do list</h2>
        <a href="./views/create.php" class="btn"><button>Add new task</button></a>
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
                    <a href="./views/update.php?id=<?php echo $task['id'] ?>" id="edit-btn" class="btn">
                        <button>Edit</button>
                    </a>
                    </form>
                    <form method="POST" action="./views/delete.php">
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