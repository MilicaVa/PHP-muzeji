<?php

include('Muzej.php');

$muzej = new Muzej(
    NULL,
    $_POST['P_naziv'],
    $_POST['P_adresa'],
    $_POST['P_direktor'],
    $_POST['P_grad'],
    $_POST['P_telefon'],
    $_POST['P_sajt'],
);

$conn = new mysqli("localhost", "root", "", "muzej");
$SQL = "INSERT INTO muzej VALUES (NULL, '" . $muzej->naziv . "', '" . $muzej->adresa . "', '" . $muzej->telefon . "', '" . $muzej->sajt .
    "', '" . $muzej->direktor_id . "', '" . $muzej->grad_id . "')";

$conn->query($SQL);