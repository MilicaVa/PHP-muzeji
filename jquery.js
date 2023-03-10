$(function () {
    allfunctions()

    $.ajax(
        {
            url: 'popunitabeludb.php',
            success: function (muzeji) {

                $('.muzej-tabela-index').html(muzeji);

            }
        }
    )

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
            alert("Polja ne mogu biti prazna")
            return
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




    $(document).on('click', '#button-search', function () {

        var unos = $('#search-value').val()


        if (unos == '') {
            alert("Unesite naziv ili grad u kom se nalazi muzej")
            return
        }


        $.ajax({
            url: 'searchdb.php',
            method: 'POST',
            data: {
                P_unos: unos,
            },

            success: function (data) {
                $('tbody').html(data)
            }
        })
    })



    $(document).on('click', '.X', function () {

        var muzej_id = $(this).attr('muzej_id')


        $.ajax({
            url: 'deletedb.php',
            method: 'POST',
            data: {
                P_muzej_id: muzej_id,
            },

            success: function () {
                alert("Muzej je obrisan")
                window.location.href = "index.php"
            }
        })
    })


}