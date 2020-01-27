<?php

require_once('Models/ToDoListManager.php');

class ToDoListController 
{
    public function toDoListPage()
    {        
        $toDoListManager = new ToDoListManager();
        $view = new View;
        return $view->render("Views/toDoList/showAllList", array("tasks" => $toDoListManager->showAllTasks()));
    }
    public function insertTaskPage()
    {        
        $toDoListManager = new ToDoListManager();
        $toDoListManager->insertTask($_POST['task']);
        header("Location: todolist");
    }
    public function deleteTaskPage()
    {        
        $toDoListManager = new ToDoListManager();
        $toDoListManager->deleteTask();
        header("Location: todolist");
    }
    public function changeStateOfTaskPage()
    {        
        $toDoListManager = new ToDoListManager();
        $toDoListManager->changeStateOfTask();
        header("Location: todolist");

    }
}