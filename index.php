<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="index-1">

        <h2 class="muzej-h2">Muzej</h2>

        <div class="muzej-index">
            <div class="muzej-info">
                <span>Naziv: </span>
                <input type="text" id="naziv-m">
            </div>
            <div class="muzej-info">
                <span>Adresa: </span>
                <input type="text" id="adresa-m">
            </div>
            <div class="muzej-info">
                <span>Direktor: </span>
                <select id="direktor-m">
                    <?php
                    include('Direktor.php');
                    $direktori = Direktor::getDirektore();
                    foreach ($direktori as $direktor) {
                    ?>
                        <option value="<?php echo $direktor['direktor_id'] ?>">
                            <?php echo $direktor['ime'] . " " . $direktor['prezime'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="muzej-info">
                <span>Grad: </span>
                <select id="grad-m">
                    <?php
                    include('Grad.php');
                    $gradovi = Grad::getGradove();
                    foreach ($gradovi as $grad) {
                    ?>
                        <option value="<?php echo $grad['grad_id'] ?>">
                            <?php echo $grad['naziv'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="muzej-info">
                <span>Telefon: </span>
                <input type="text" id="telefon-m">
            </div>
            <div class="muzej-info">
                <span>Sajt: </span>
                <input type="text" id="sajt-m">
            </div>

            <button type="button" id="button-save">Unesi</button>
        </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="jquery.js"></script>
</body>

</html>