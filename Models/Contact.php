<?php

class Contact
{
    private $id;
    private $name;
    private $company;
    private $turnover;
    private $address;
    private $phoneNumber;
    private $email;
    private $sector;
    private $state;
    private $createdAt;


    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany(?string $company)
    {
        $this->company = $company;
        return $this;
    }

    public function getTurnover()
    {
        return $this->turnover;
    }

    public function setTurnover(?string $turnover)
    {
        $this->turnover = $turnover;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress(?string $address)
    {
        $this->address = $address;
        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(?string $email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSector()
    {
        return $this->sector;
    }

    public function setSector(?string $sector)
    {
        $this->sector = $sector;
        return $this;
    }
    public function getState()
    {
        return $this->state;
    }

    public function setState(string $state)
    {
        $this->state = $state;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}