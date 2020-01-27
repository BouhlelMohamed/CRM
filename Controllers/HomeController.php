<?php

require_once('./Models/AppointmentManager.php');

class HomeController
{
    public function homePage()
    {        
        $appointmentManager = new AppointmentManager;
        $view = new View;
        return $view->render("Views/appointment/showAllAppointments", array("appointments" => $appointmentManager->showAllAppointments()));

    }
}