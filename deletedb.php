<?php

$conn = new mysqli("localhost", "root", "", "muzej");
$SQL = "DELETE FROM muzej WHERE muzej_id=" . $_POST['P_muzej_id'];
$conn->query($SQL);
