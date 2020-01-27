<?php

    require_once('./Models/AppointmentManager.php');

class AppointmentController
{
    public function appointmentPage()
    {        
        $appointmentManager = new AppointmentManager;
        $view = new View;
        return $view->render("Views/appointment/showAllAppointments", array("appointments" => $appointmentManager->showAllAppointments()));

    }

    public function appointmentInsertPage()
    {        
        $appointmentManager = new AppointmentManager;
        $appointmentManager->insertAppointment();
        header("Location: myappointments");
    }

    public function appointmentDeletePage()
    {

        $appointmentManager = new AppointmentManager;
        $appointmentManager->deleteAppointment();
        header("Location: myappointments");

    }
}