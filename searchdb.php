<?php

$conn = new mysqli("localhost", "root", "", "muzej");
$SQL = "SELECT muzej.*, direktor.*, grad.naziv as gnaziv FROM muzej LEFT JOIN direktor ON muzej.direktor_id = direktor.direktor_id
        LEFT JOIN grad ON muzej.grad_id = muzej.muzej_id WHERE muzej.naziv LIKE '%" . $_POST['P_unos'] . "%'
        OR grad.naziv LIKE '%" . $_POST['P_unos'] . "%'";



$result = $conn->query($SQL);
while ($muzej = mysqli_fetch_assoc($result)) {
?>
    <tr class="text-center">
        <td><?php echo $muzej['muzej_id']; ?></td>
        <td><?php echo $muzej['naziv'];  ?></td>
        <td><?php echo $muzej['adresa'];  ?></td>
        <td><?php echo $muzej['gnaziv'];  ?></td>
        <td><?php echo $muzej['ime'] . " " . $muzej['prezime']; ?></td>
        <td><?php echo $muzej['telefon']; ?></td>
        <td><?php echo $muzej['sajt']; ?></td>
    </tr>
<?php
}
?>