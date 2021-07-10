<?php 
    include "./requests/GET.php";
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
        <a href="./views/add.php" class="btn"><button>Add new task</button></a>
        <div class="content">


            <hr>
            <?php 
            foreach ($tasks as $task) { ?>

            <div id="task-display">
                <input type="checkbox" id="status" />
                <p id="created"><?php echo $task['created'] ?></p>
                <p id="task-title"><?php echo $task['task'] ?></p>
                <br />
                <p id="description">
                    <?php echo $task['description'] ?>
                </p>
                <a href="./views/edit.php" id="edit-btn"><button class="btn">Edit</button></a>
            </div>
            <?php } ?>
            <hr>

        </div>
    </div>
</body>

</html>

<!-- Hard Coded
<div id="task-display">
                <input type="checkbox" id="status" />
                <p id="created">Created:</p>
                <p id="task-title">Apply for Printful's Developer School</p>
                <br />
                <p id="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <a href="./components/edit.php" id="edit-btn"><button class="btn">Edit</button></a>
            </div>

 -->