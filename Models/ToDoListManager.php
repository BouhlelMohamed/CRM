<?php

require_once('Database.php');
require_once('ToDoList.php');

class ToDoListManager extends Database
{

    public function showAllTasks()
    {
        $query = Database::getPdo()->prepare("SELECT * FROM todo_list ORDER BY state ASC");

        $query->execute();

        $tasks = array();

        $allTasks = $query->fetchAll();

        $index = 0;

        foreach($allTasks as $v)
        {
            $task = new ToDoList;
            $task->setId($v['id']);
            $task->setContent($v['content']);
            $task->setState($v['state']);
            $task->setCreatedAt($v['created_at']);
            $tasks[$index] = $task;
            $index++;
        }

        return $tasks;
    }

    public function insertTask()
    {
        $query = Database::getPdo()->prepare("INSERT INTO todo_list (content) VALUES(:task)");
            
        $query->execute(array(
        'task'   => isset($_POST['task']) ? $_POST["task"] : NULL      
        ));

    }

    public function deleteTask()
    {
        $query = Database::getPdo()->prepare("DELETE FROM todo_list WHERE id = :id LIMIT 1");
        $query->execute([
            "id"    =>  $_REQUEST['id']
        ]);
    }

    public function changeStateOfTask()
    {
        $query = Database::getPdo()->prepare("UPDATE todo_list SET state = :state WHERE id = :id LIMIT 1");
        $query->execute([
            "state" =>  1,
            "id"    =>  $_REQUEST['id']
        ]);
    }
}