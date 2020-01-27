<?php

require_once('./Models/ContactManager.php');
require_once('./Models/AppointmentManager.php');

class ContactController
{
    public function contactPage()
    {        
        $contactManager = new ContactManager;
        $view = new View;
        return $view->render("Views/contact/showAllContacts", array("contacts" => $contactManager->showAllContacts()));

    }

    public function contactInsertPage()
    {        
        $contactManager = new ContactManager();
        $contactManager->insertContact();
        header("Location: contacts");
    }

    public function contactDeletePage()
    {        
        $contactManager = new ContactManager();
        $contactManager->deleteContact();
        header("Location: contacts");
    }

    public function makeAppointmentForContactPage()
    {        

        $appointmentManager = new AppointmentManager();
        $contactManager = new ContactManager;
        $view = new View;
        return $view->render("Views/contact/appointmentContact", array("contact" => $contactManager->findContactWithId(),$appointmentManager->insertAppointment()));
    }
}