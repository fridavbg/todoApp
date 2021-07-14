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
