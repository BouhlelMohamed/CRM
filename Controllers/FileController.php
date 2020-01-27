<?php

require_once('Models/FileManager.php');

class FileController
{
    public function filePage()
    {        
        $fileManager = new FileManager();

        $view = new View;
        
        return $view->render("Views/file/showAllFiles", array("files" => $fileManager->showAllFiles()));
    }

    public function insertFilePage()
    {        
        $fileManager = new FileManager();
        $fileManager->insertFile();
        header("Location: filesmanager");
    }

    public function deleteFilePage()
    {        
        $fileManager = new FileManager();
        $fileManager->deleteFile();
        header("Location: filesmanager");
    }
}