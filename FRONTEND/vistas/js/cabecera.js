/*cabecera*/ 

$("#btnCategorias").click(function () {

    if(window.matchMedia("(max-width:767px)").matches){

        $("#btnCategorias").after($("#categorias").slideToggle("fast"))


    } else{

        $("#cabecera").after($("#categorias").slideToggle("fast"))
    }


})