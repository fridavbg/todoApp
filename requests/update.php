<?php
include "DB.php";

$id = $_GET['id'] ?? null;


$error = "";
$task = "";
$description = "";

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
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/style.css" />

    <title>To-Do List</title>
</head>

<body>
    <div class="wrapper" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2 class="title">Edit task</h2>
        <div class="content">
            <div class="inputFields">
                <label for="task">Title:</label>
                
                <input type="text" value="<?php echo $task?>" placeholder="Please enter a task title"/>

                <label for="task">Description:</label>
                <textarea 
                placeholder="Please add a description"
                name="description" rows="5" cols="40"><?php echo $description?></textarea>
                <a href="../requests/PUT.php"><button class="btn">Save</button></a>
                <a href="../requests/delete.php?id=<?php echo $task['id']; ?>"><button class="btn" disabled>Delete</button></a>
            </div>
        </div>

        <a href="../index.php"><button class="btn">Go back</button></a>
    </div>
</body>

</html>