<?php

namespace app;

use PDO;

/** 
 * Class Database
 */

class Database
{

    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=127.0.0.1;port=3306;dbname=TodoApp', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getTasks()
    {
        $statement = $this->pdo->prepare('SELECT * FROM todo_list ORDER BY created DESC');
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
