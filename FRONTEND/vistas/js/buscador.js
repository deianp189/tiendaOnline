/*=============================================
BUSCADOR
=============================================*/

$("#buscador a").click(function () {

    if ($("#buscador input") == "") {
        
        $("#buscador a").attr("href", "");//Si busca cuando el campo esta vacio no ocupa cache    
    }
    
})

$("#buscador input").change(function(){

    var busqueda = $("#buscador input").val();
    var expresion = /^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

    if (!expresion.test(busqueda)) {

        $("#buscador input").val("");//Si introduce cualquier otro caracter añade vacio     
    }else {

        var evaluarBusqueda = busqueda.replace(/[áéíóúÁÉÍÓÚ ]/g, "_");//Los caracteres con esos simbolos se pone un guion bajo

        var rutaBuscador = $("#buscador a").attr("href");

        if ($("#buscador input").val() != "") {

            $("#buscador a").attr("href", rutaBuscador+"/"+evaluarBusqueda);//Coge la variable buscador y la concatena con lo que queremos buscar
            
        }
        
    }
})

/*=============================================
BUSCADOR CON ENTER
=============================================*/

$("#buscador input").focus(function () {

    $(document).keyup(function (event){
        event.preventDefault();

        if (event.keyCode == 13 && $("#buscador input").val() != "") { //El boton 13 es el ENTER

            var rutaBuscador = $("#buscador a").attr("href");
            window.location.href = rutaBuscador;    
        }

    })
    
})

