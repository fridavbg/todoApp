<?php

error_reporting (E_ALL ^ E_NOTICE);  

/**
 * @package DBConnection
 * @author Frida
 */

// DB Connection
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=TodoApp', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// GET - Get All tasks
$statement = $pdo->prepare('SELECT * FROM todo_list ORDER BY created DESC');
$statement->execute();
// Fetch all tasks as an assoc array
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC); 


/* 
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
*/

?>