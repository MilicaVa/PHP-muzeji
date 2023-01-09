<?php

class Direktor
{
    public $direktor_id;
    public $ime;
    public $prezime;
    public $email;
    public $telefon;

    function __construct($direktor_id, $ime, $prezime, $email, $telefon)
    {
        $this->direktor_id = $direktor_id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->email = $email;
        $this->telefon = $telefon;
    }
}
