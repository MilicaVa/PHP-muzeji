<?php

class Muzej
{
    public $muzej_id;
    public $naziv;
    public $adresa;
    public $direktor_id;
    public $grad_id;
    public $telefon;
    public $sajt;

    function __construct($muzej_id, $naziv, $adresa, $direktor_id, $grad_id, $telefon, $sajt)
    {
        $this->muzej_id = $muzej_id;
        $this->naziv = $naziv;
        $this->adresa = $adresa;
        $this->direktor_id = $direktor_id;
        $this->grad_id = $grad_id;
        $this->telefon = $telefon;
        $this->sajt = $sajt;
    }
}
