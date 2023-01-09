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

    public static function getGradove()
    {
        $conn = new mysqli("localhost", "root", "", "muzej");
        $SQL = "SELECT * FROM grad";
        $result = $conn->query($SQL);

        $gradovi = [];
        while ($grd = mysqli_fetch_assoc($result)) {
            $gradovi[] = $grd;
        }

        return $gradovi;
    }
}
