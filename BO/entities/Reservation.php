<?php

class Reservation
{
    private $idResevation;
    private $FirstName;
    private $LastName;
    private $date;
    private $time;
    private $phone;
    private $message;
    private $nbPers;


    public function __construct($idResevation, $FirstName, $LastName, $date, $time, $phone, $message, $nbPers)
    {
        $this->idResevation = $idResevation;
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->date = $date;
        $this->time = $time;
        $this->phone = $phone;
        $this->message = $message;
        $this->nbPers = $nbPers;

    }


    public function getIdResevation()
    {
        return $this->idResevation;
    }


    public function setIdResevation($idResevation)
    {
        $this->idResevation = $idResevation;

        return $this;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }


    public function getLastName()
    {
        return $this->LastName;
    }


    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }


    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }


    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }


    public function getPhone()
    {
        return $this->phone;
    }


    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }


    public function getMessage()
    {
        return $this->message;
    }


    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }


    public function getNbPers()
    {
        return $this->nbPers;
    }


    public function setNbPers($nbPers)
    {
        $this->nbPers = $nbPers;

        return $this;
    }

}

?>
