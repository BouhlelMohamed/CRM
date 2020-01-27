<?php

require_once('Appointment.php');


class AppointmentManager
{
    
    public function showAllAppointments()
    {
        $query = Database::getPdo()->prepare("SELECT * FROM appointments ORDER BY date ASC");

        $query->execute();

        $appointments = array();

        $allAppointments = $query->fetchAll();

        $index = 0;

        foreach($allAppointments as $v)
        {
            $appointment = new Appointment;
            $appointment->setId($v['id']);
            $appointment->setDate($v['date']);
            $appointment->setHour($v['hour']);
            $appointment->setName($v['name']);
            $appointment->setCompany($v['company']);
            $appointment->setAddress($v['address']);
            $appointment->setDescription($v['description']);
            $appointment->setPhoneNumber($v['phone_number']);
            $appointment->setEmail($v['email']);

            $appointments[$index] = $appointment;
            $index++;
        }

        return $appointments;
    }

    public function insertAppointment()
    {
        $query = Database::getPdo()->prepare("INSERT INTO appointments (date,hour,name,company,address,description,phone_number,email) VALUES(:date,:hour,:name,:company,:address,:description,:phone_number,:email)");
            
        $query->execute(array(
        'date'   => isset($_POST['date']) ? $_POST["date"] : NULL, 
        'hour'   => isset($_POST['hour']) ? $_POST["hour"] : NULL, 
        'name'   => isset($_POST['name']) ? $_POST["name"] : NULL,    
        'company'   => isset($_POST['company']) ? $_POST["company"] : NULL,     
        'address'   => isset($_POST['address']) ? $_POST["address"] : NULL ,     
        'description'   => isset($_POST['description']) ? $_POST["description"] : NULL,      
        'phone_number'   => isset($_POST['phoneNumber']) ? $_POST["phoneNumber"] : NULL,      
        'email'   => isset($_POST['email']) ? $_POST["email"] : NULL      
     
        ));

    }

    public function deleteAppointment()
    {
        $query = Database::getPdo()->prepare("DELETE FROM appointments WHERE id = :id LIMIT 1");
        $query->execute([
            "id"    =>  $_REQUEST['id']
        ]);
    }


}