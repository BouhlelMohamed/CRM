<?php

require_once('Contact.php');

class ContactManager
{
    public function showAllContacts()
    {
        $query = Database::getPdo()->prepare("SELECT * FROM contacts ORDER BY created_at DESC");

        $query->execute();

        $contacts = array();

        $allContacts = $query->fetchAll();

        $index = 0;

        foreach($allContacts as $v)
        {
            $contact = new Contact;
            $contact->setId($v['id']);
            $contact->setCreatedAt($v['created_at']);
            $contact->setState($v['state']);
            $contact->setName($v['name']);
            $contact->setCompany($v['company']);
            $contact->setAddress($v['address']);
            $contact->setTurnover($v['turnover']);
            $contact->setPhoneNumber($v['phone_number']);
            $contact->setEmail($v['email']);
            $contact->setSector($v['sector']);

            $contacts[$index] = $contact;
            $index++;
        }

        return $contacts;
    }

    public function insertContact()
    {
        $query = Database::getPdo()->prepare("INSERT INTO contacts (name,company,turnover,address,phone_number,email,sector,state) VALUES(:name,:company,:turnover,:address,:phone_number,:email,:sector,:state)");
            
        $query->execute(array(
        'name'   => isset($_POST['name']) ? $_POST["name"] : NULL, 
        'company'   => isset($_POST['company']) ? $_POST["company"] : NULL, 
        'turnover'   => isset($_POST['turnover']) ? $_POST["turnover"] : NULL,    
        'address'   => isset($_POST['address']) ? $_POST["address"] : NULL,     
        'phone_number'   => isset($_POST['phoneNumber']) ? $_POST["phoneNumber"] : NULL ,     
        'email'   => isset($_POST['email']) ? $_POST["email"] : NULL,      
        'sector'   => isset($_POST['sector']) ? $_POST["sector"] : NULL,      
        'state'   => isset($_POST['state']) ? $_POST["state"] : NULL      
     
        ));
    }

    public function findContactWithId()
    {
        $contact = new Contact;
        
        $query = Database::getPdo()->prepare("SELECT * FROM contacts WHERE id = :id");

        $query->execute(["id" => $_REQUEST['id']]);

        $contactById = $query->fetch();

        $contact->setId($contactById['id']);
        $contact->setName($contactById['name']);
        $contact->setCompany($contactById['company']);
        $contact->setAddress($contactById['address']);
        $contact->setPhoneNumber($contactById['phone_number']);
        $contact->setEmail($contactById['email']);


        return $contact;
    }

    public function deleteContact()
    {
        $query = Database::getPdo()->prepare("DELETE FROM contacts WHERE id = :id LIMIT 1");
        $query->execute([
            "id"    =>  $_REQUEST['id']
        ]);
    }

}