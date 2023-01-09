$(function () {
    allfunctions()
});


function allfunctions() {


    $(document).on('click', '#button-save', function () {

        let naziv = $('#naziv-m').val()
        let adresa = $('#adresa-m').val()
        let direktor = $('#direktor-m').val()
        let grad = $('#grad-m').val()
        let telefon = $('#telefon-m').val()
        let sajt = $('#sajt-m').val()


        if (naziv == '' || adresa == '' || telefon == '' || sajt == '') {
            alert("Polja ne mogu biti prazna");
            return;
        }


        $.ajax({
            url: 'unesimuzejdb.php',
            method: 'POST',
            data: {
                P_naziv: naziv,
                P_adresa: adresa,
                P_direktor: direktor,
                P_grad: grad,
                P_telefon: telefon,
                P_sajt: sajt,
            },


            success: function () {
                alert("Muzej je unet u bazu")
                window.location.href = "index.php"
            }
        })
    })



}