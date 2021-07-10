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
    <div class="wrapper">
        <h2 class="title">Edit task</h2>
        <div class="content">
            <div class="inputFields">
                <label for="task">Title:</label>
                <br />
                <input type="text" id="task" placeholder="Title" />

                <label for="task">Description:</label>
                <br />
                <textarea id="description" placeholder="Add a description" name="description" rows="5"
                    cols="40"></textarea>
                <br />
                <button type="submit" class="btn">Save</button>
                <button href="index.html" class="btn">Delete</button>
            </div>
        </div>
        <a href="../index.php"><button class="btn">Go back</button></a>
    </div>
</body>

</html>