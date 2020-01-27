<?php

class Database
{
    public static function getPdo()
    {
        $database = new PDO('mysql:host=localhost;dbname=crm;charset=utf8', 'admin', '1234');
       
        return $database;
    }
}







