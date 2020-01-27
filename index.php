<?php


require_once "Controllers/HomeController.php";
require_once "Controllers/ToDoListController.php";
require_once "Controllers/FileController.php";
require_once "Controllers/InvoiceController.php";
require_once "Controllers/AppointmentController.php";
require_once "Controllers/ContactController.php";
require_once "Controllers/ScrapingController.php";
require_once "Controllers/PurchaseController.php";

require_once "Views/View.php";


function path($link , $controllerName , $method){

    $page = substr($_SERVER["REQUEST_URI"],1);
    switch($page)
    {
        case $link:
            $controller = new $controllerName();
            echo $controller->$method();
        break;
        case "/":
            $controller = new HomeController;
            echo $controller->homePage();
    }

}


$id = $_REQUEST['id'] ?? NULL;

path("","HomeController","homePage");
// To do List
path("todolist","ToDoListController","toDoListPage");
path("insertTask","ToDoListController","insertTaskPage");
path("deleteTask?id=$id","ToDoListController","deleteTaskPage");
path("changeStateTask?id=$id","ToDoListController","changeStateOfTaskPage");

// File Manager
path("filesmanager","FileController","filePage");
path("insertFile","FileController","insertFilePage");
path("deleteFile?id=$id","FileController","deleteFilePage");

// Invoice
path("invoice","InvoiceController","invoicePage");

// Appointment
path("myappointments","AppointmentController","appointmentPage");
path("insertAppointment","AppointmentController","appointmentInsertPage");
path("deleteAppointment?id=$id","AppointmentController","appointmentDeletePage");

// Contacts
path("contacts","ContactController","contactPage");
path("insertContact","ContactController","contactInsertPage");
path("makeAppointment?id=$id","ContactController","makeAppointmentForContactPage");
path("deleteContact?id=$id","ContactController","contactDeletePage");

// Scraping
path("scraping","ScrapingController","scrapingPage");

// Purchase
path("purchase","PurchaseController","purchasePage");
path("insertPurchase","PurchaseController","insertPurchasePage");
