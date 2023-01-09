<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Casari">
    <meta name="description" content="Casari es una tienda en línea de materiales de construcción ubicada en Granada">
    <meta name="keyword" content="construccion, azulejos, cemento, tejas, bañera, cristales">
    <title>Casari</title>

    <?php

        $icono=ControladorPlantilla::ctrEstiloPlantilla();

        echo '<link rel="icono" href="http://localhost/backend/'.$icono["icono"].'">';

    /*=============================================
	MANTENER LA RUTA FIJA DEL PROYECTO
	=============================================*/

    $url=Ruta::ctrRuta();

    $urlbackend=Ruta::ctrRutaBackend();

    // echo $url;

    echo '<link rel="icon" href="'.$urlbackend.$icono["icono"].'">';
    
    ?>

    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabecera.css">
    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed">

    <script src="vistas/js/plugins/jquery.min.js"></script>
    <script src="vistas/js/plugins/bootstrap.min.js"></script>
</head>
<body>
    <!--------------------------- Cabecera ------------------------------>

    <?php 
    include "modulos/cabecera.php";

    /*=============================================
CONTENIDO DINÁMICO
=============================================*/

    $rutas=array();
    $ruta=null;

    if(isset($_GET["ruta"])){

        //echo $_GET["ruta"];
        $rutas=explode("/" ,$_GET["ruta"]);

            /*=============================================
        URL'S AMIGABLES DE CATEGORÍAS
        =============================================*/
        $item="ruta";
        $valor=$rutas[0];

        $rutaCategorias=ControladorProductos::ctrMostrarCategorias($item,$valor);


        if($rutas[0] == $rutaCategorias["ruta"]){

            $ruta=$rutas[0];
        }

        /*=============================================
        URL'S AMIGABLES DE SUBCATEGORÍAS
        =============================================*/

        $rutaSubCategorias=ControladorProductos::ctrMostrarSubCategorias($item,$valor);

        foreach ($rutaSubCategorias as $key => $value) {

            if($rutas[0] == $value["ruta"]){

                $ruta=$rutas[0];

            }
        }

            /*=============================================
        LISTA BLANCA DE URL'S AMIGABLES
        =============================================*/

        if($ruta !=null){

            include "modulos/productos.php";

        }else{

            include "modulos/error404.php";

        }

    }else{
        
        include "modulos/slide.php";

    }


    ?>

    <script src="<?php echo $url; ?>vistas/js/cabecera.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>

    
</body>
</html>