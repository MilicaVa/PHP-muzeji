<?php

class Grad
{
    public $grad_id;
    public $naziv;
    public $gradonacelnik;

    function __construct($grad_id, $naziv, $gradonacelnik)
    {
        $this->grad_id = $grad_id;
        $this->naziv = $naziv;
        $this->gradonacelnik = $gradonacelnik;
    }
}
