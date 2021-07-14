<!-- Error message display --- NOT WORKING	-->	
        <?php if (empty($task)) : ?>
			<div class="error">
				<?php echo $error; ?>
			</div>
		<?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="inputFields">
                <label for="task">Title:</label>

                <input type="text" name="task" value="<?php echo $task ?>" placeholder="Title"/>

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