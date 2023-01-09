/*Plantilla */

$.ajax({

    url: "ajax/plantilla.ajax.php", 
    success: function (respuesta) {

        //console.log(JSON.parse(respuesta));

        var colorFondo = JSON.parse(respuesta).colorFondo;

        console.log(colorFondo);

    }

})