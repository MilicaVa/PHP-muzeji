 <input type="text" id="search-value" class="form-control">
 <button class="btn btn-primary" id="button-search">Search</button>

 <table class="table table-bordered border-primary table-hover">


     <thead>
         <tr class="text-center table-primary border-primary">
             <th onclick="numberTableSort(this,true)">ID</th>
             <th onclick="tableSort(this)">Naziv</th>
             <th onclick="tableSort(this)">Adresa</th>
             <th onclick="tableSort(this)">Grad</th>
             <th onclick="tableSort(this)">Direktor</th>
             <th>Telefon</th>
             <th>Sajt</th>
         </tr>
     </thead>


     <tbody>

         <?php
            $conn = new mysqli("localhost", "root", "", "muzej");
            $SQL = "SELECT muzej.*, direktor.*, grad.naziv as gnaziv FROM muzej LEFT JOIN direktor ON muzej.direktor_id = direktor.direktor_id
        LEFT JOIN grad ON muzej.grad_id = muzej.muzej_id";
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

     </tbody>
 </table>